<?php
/**
 * Kontakt.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$contact_status = '';

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['adriabit_contact_submit'] ) ) {

	$nonce = isset( $_POST['adriabit_contact_nonce'] )
		? sanitize_text_field( wp_unslash( $_POST['adriabit_contact_nonce'] ) )
		: '';

	$honeypot = isset( $_POST['website_address'] )
		? trim( (string) wp_unslash( $_POST['website_address'] ) )
		: '';

	if ( ! wp_verify_nonce( $nonce, 'adriabit_contact_form' ) || '' !== $honeypot ) {
		$contact_status = 'error';
	} else {
		$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
		$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
		$company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
		$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
		$subject = isset( $_POST['subject'] ) ? sanitize_text_field( wp_unslash( $_POST['subject'] ) ) : '';
		$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';
		$privacy = ! empty( $_POST['privacy'] );

		if ( '' === $name || ! is_email( $email ) || '' === $message || ! $privacy ) {
			$contact_status = 'error';
		} else {
			$mail_subject = 'Novi AdriaBit kontakt — ' . ( $subject ?: $name );

			$mail_message  = "NOVI KONTAKT UPIT\n\n";
			$mail_message .= "Ime i prezime: {$name}\n";
			$mail_message .= "Tvrtka / obrt: " . ( $company ?: '—' ) . "\n";
			$mail_message .= "Email: {$email}\n";
			$mail_message .= "Telefon: " . ( $phone ?: '—' ) . "\n";
			$mail_message .= "Predmet: " . ( $subject ?: '—' ) . "\n\n";
			$mail_message .= "PORUKA\n------------------------------\n{$message}\n";

			$sent = wp_mail(
				get_option( 'admin_email' ),
				$mail_subject,
				$mail_message,
				array(
					'Content-Type: text/plain; charset=UTF-8',
					'Reply-To: ' . $name . ' <' . $email . '>',
				)
			);

			if ( $sent ) {
				wp_safe_redirect( add_query_arg( 'contact_sent', '1', get_permalink() ) );
				exit;
			}

			$contact_status = 'error';
		}
	}
}

if ( isset( $_GET['contact_sent'] ) && '1' === sanitize_text_field( wp_unslash( $_GET['contact_sent'] ) ) ) {
	$contact_status = 'success';
}

get_header();
?>

<main id="primary" class="contact-page">

	<section class="contact-hero">
		<div class="contact-shell contact-hero__grid">
			<div>
				<p class="contact-eyebrow">KONTAKT</p>
				<h1>Razgovarajmo o<br><span>vašoj ideji.</span></h1>
			</div>

			<div class="contact-hero__copy">
				<p>
					Imate pitanje, trebate savjet ili želite provjeriti možemo li vam pomoći?
					Pošaljite poruku. Za konkretan novi projekt možete odmah ispuniti detaljniji projektni brief.
				</p>

				<a class="contact-project-link" href="<?php echo esc_url( home_url( '/pokrenimo-projekt/' ) ); ?>">
					Pokrenimo projekt <span aria-hidden="true">↗</span>
				</a>
			</div>
		</div>
	</section>

	<section class="contact-main">
		<div class="contact-shell contact-layout">

			<aside class="contact-info">
				<p class="contact-eyebrow">JAVITE SE</p>

				<div class="contact-info__block">
					<span>EMAIL</span>
					<a href="mailto:info@adriabit.com">info@adriabit.com</a>
				</div>

				<div class="contact-info__block">
					<span>WEB</span>
					<p>adriabit.com</p>
				</div>

				<div class="contact-info__line"></div>

				<p class="contact-info__text">
					Za ponudu novog weba ili aplikacije koristite stranicu
					<strong>Pokrenimo projekt</strong>. Za sve ostalo dovoljna je ova forma.
				</p>
			</aside>

			<div class="contact-card">
				<div class="contact-card__header">
					<p class="contact-eyebrow">PORUKA</p>
					<h2>Kako vam možemo pomoći?</h2>
				</div>

				<?php if ( 'success' === $contact_status ) : ?>
					<div class="contact-notice contact-notice--success" role="status">
						<strong>Poruka je poslana.</strong>
						<span>Hvala na javljanju.</span>
					</div>
				<?php elseif ( 'error' === $contact_status ) : ?>
					<div class="contact-notice contact-notice--error" role="alert">
						<strong>Poruka nije poslana.</strong>
						<span>Provjerite obavezna polja i pokušajte ponovno.</span>
					</div>
				<?php endif; ?>

				<form class="contact-form" action="<?php echo esc_url( get_permalink() ); ?>" method="post">
					<?php wp_nonce_field( 'adriabit_contact_form', 'adriabit_contact_nonce' ); ?>
					<input class="contact-hp" type="text" name="website_address" value="" tabindex="-1" autocomplete="off" aria-hidden="true">

					<div class="contact-form__grid">
						<label class="contact-field">
							<span>Ime i prezime *</span>
							<input type="text" name="name" autocomplete="name" required>
						</label>

						<label class="contact-field">
							<span>Email *</span>
							<input type="email" name="email" autocomplete="email" required>
						</label>

						<label class="contact-field">
							<span>Tvrtka / obrt</span>
							<input type="text" name="company" autocomplete="organization">
						</label>

						<label class="contact-field">
							<span>Telefon</span>
							<input type="tel" name="phone" autocomplete="tel">
						</label>
					</div>

					<label class="contact-field">
						<span>Predmet</span>
						<input type="text" name="subject" placeholder="O čemu želite razgovarati?">
					</label>

					<label class="contact-field">
						<span>Poruka *</span>
						<textarea name="message" rows="8" required placeholder="Napišite nam kako vam možemo pomoći."></textarea>
					</label>

					<label class="contact-consent">
						<input type="checkbox" name="privacy" value="1" required>
						<span>Slažem se da se uneseni podaci koriste za obradu i odgovor na moj upit. *</span>
					</label>

					<button class="button contact-submit" type="submit" name="adriabit_contact_submit" value="1">
						Pošalji poruku <span aria-hidden="true">↗</span>
					</button>
				</form>
			</div>

		</div>
	</section>

</main>

<?php get_footer(); ?>
