<?php
/**
 * Pokrenimo projekt.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$project_form_status = '';

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['adriabit_project_submit'] ) ) {

	$nonce = isset( $_POST['adriabit_project_nonce'] )
		? sanitize_text_field( wp_unslash( $_POST['adriabit_project_nonce'] ) )
		: '';

	$honeypot = isset( $_POST['website_address'] )
		? trim( (string) wp_unslash( $_POST['website_address'] ) )
		: '';

	if ( ! wp_verify_nonce( $nonce, 'adriabit_project_form' ) || '' !== $honeypot ) {
		$project_form_status = 'error';
	} else {

		$name        = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
		$company     = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
		$email       = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
		$phone       = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
		$type        = isset( $_POST['project_type'] ) ? sanitize_key( wp_unslash( $_POST['project_type'] ) ) : '';
		$description = isset( $_POST['project_description'] ) ? sanitize_textarea_field( wp_unslash( $_POST['project_description'] ) ) : '';
		$website     = isset( $_POST['current_website'] ) ? esc_url_raw( wp_unslash( $_POST['current_website'] ) ) : '';
		$budget      = isset( $_POST['budget'] ) ? sanitize_key( wp_unslash( $_POST['budget'] ) ) : '';
		$timeline    = isset( $_POST['timeline'] ) ? sanitize_key( wp_unslash( $_POST['timeline'] ) ) : '';
		$privacy     = ! empty( $_POST['privacy'] );

		$type_labels = array(
			'landing-page' => 'Landing stranica',
			'wordpress'    => 'WordPress stranica',
			'ecommerce'    => 'Web trgovina',
			'web-app'      => 'Web aplikacija',
			'desktop-app'  => 'Desktop aplikacija',
			'mobile-app'   => 'Mobilna aplikacija',
			'not-sure'     => 'Nisam siguran što mi treba',
		);

		$budget_labels = array(
			'under-1000' => 'Do 1.000 €',
			'1000-2500'  => '1.000 – 2.500 €',
			'2500-5000'  => '2.500 – 5.000 €',
			'5000-plus'   => '5.000 € +',
		);

		$timeline_labels = array(
			'asap'         => 'Što prije',
			'month'        => 'Unutar mjesec dana',
			'three-months' => 'Unutar 3 mjeseca',
			'later'        => 'Kasnije',
		);

		if ( '' === $name || ! is_email( $email ) || '' === $description || ! $privacy ) {
			$project_form_status = 'error';
		} else {

			$subject = sprintf( 'Novi AdriaBit upit — %s', $name );

			$message  = "NOVI UPIT — POKRENIMO PROJEKT\n\n";
			$message .= "Ime i prezime: {$name}\n";
			$message .= "Tvrtka / obrt: " . ( $company ?: '—' ) . "\n";
			$message .= "Email: {$email}\n";
			$message .= "Telefon: " . ( $phone ?: '—' ) . "\n\n";
			$message .= "Vrsta projekta: " . ( $type_labels[ $type ] ?? 'Nije odabrano' ) . "\n";
			$message .= "Budžet: " . ( $budget_labels[ $budget ] ?? 'Nije određeno' ) . "\n";
			$message .= "Početak: " . ( $timeline_labels[ $timeline ] ?? 'Nije određeno' ) . "\n";
			$message .= "Postojeća stranica: " . ( $website ?: '—' ) . "\n\n";
			$message .= "OPIS PROJEKTA\n";
			$message .= "------------------------------\n";
			$message .= $description . "\n";

			$headers = array(
				'Content-Type: text/plain; charset=UTF-8',
				'Reply-To: ' . $name . ' <' . $email . '>',
			);

			$sent = wp_mail(
				get_option( 'admin_email' ),
				$subject,
				$message,
				$headers
			);

			if ( $sent ) {
				wp_safe_redirect(
					add_query_arg(
						'project_sent',
						'1',
						get_permalink()
					)
				);
				exit;
			}

			$project_form_status = 'error';
		}
	}
}

if ( isset( $_GET['project_sent'] ) && '1' === sanitize_text_field( wp_unslash( $_GET['project_sent'] ) ) ) {
	$project_form_status = 'success';
}

get_header();
?>

<main id="primary" class="project-page">

	<section class="project-hero">
		<div class="project-shell">

			<div class="project-hero__copy">
				<p class="project-eyebrow">POKRENIMO PROJEKT</p>

				<h1 class="project-hero__title">
					Imate ideju?<br>
					<span>Pretvorimo je u nešto što radi.</span>
				</h1>

				<p class="project-hero__lead">
					Ne morate imati gotovu specifikaciju ni znati koju tehnologiju trebate.
					Opišite nam što želite postići, a mi ćemo pomoći definirati pravi put.
				</p>
			</div>

			<div class="project-hero__note" aria-hidden="true">
				<span class="project-hero__note-line"></span>
				<p>Ideja → plan → proizvod.</p>
			</div>

		</div>
	</section>

	<section class="project-main">
		<div class="project-shell project-layout">

			<aside class="project-guide">
				<p class="project-eyebrow">KAKO KREĆEMO</p>

				<div class="project-guide__item">
					<span>01</span>
					<div>
						<h2>Recite nam što trebate.</h2>
						<p>Ne trebate pisati tehničku dokumentaciju. Poslovni problem i cilj su dovoljni za početak.</p>
					</div>
				</div>

				<div class="project-guide__item">
					<span>02</span>
					<div>
						<h2>Mi slažemo sliku projekta.</h2>
						<p>Pregledamo zahtjev, funkcionalnosti i mogući tehnički pristup.</p>
					</div>
				</div>

				<div class="project-guide__item">
					<span>03</span>
					<div>
						<h2>Dogovaramo sljedeći korak.</h2>
						<p>Prije bilo kakve obveze usuglašavamo opseg, okvirnu cijenu i način rada.</p>
					</div>
				</div>

				<div class="project-guide__contact">
					<span>NISTE SIGURNI ŠTO VAM TREBA?</span>
					<p>Nema problema. Opišite situaciju svojim riječima.</p>
				</div>
			</aside>

			<div class="project-form-card">

				<div class="project-form-card__header">
					<p class="project-eyebrow">VAŠ PROJEKT</p>
					<h2>Recite nam što gradimo.</h2>
					<p>Polja označena zvjezdicom su obavezna.</p>
				</div>

				<?php if ( 'success' === $project_form_status ) : ?>
					<div class="project-form-notice project-form-notice--success" role="status">
						<strong>Upit je poslan.</strong>
						<span>Hvala. Javit ćemo vam se nakon što pregledamo projekt.</span>
					</div>
				<?php elseif ( 'error' === $project_form_status ) : ?>
					<div class="project-form-notice project-form-notice--error" role="alert">
						<strong>Upit nije poslan.</strong>
						<span>Provjerite obavezna polja i pokušajte ponovno.</span>
					</div>
				<?php endif; ?>

				<form class="project-form" action="<?php echo esc_url( get_permalink() ); ?>" method="post">
					<?php wp_nonce_field( 'adriabit_project_form', 'adriabit_project_nonce' ); ?>
					<input class="project-hp" type="text" name="website_address" value="" tabindex="-1" autocomplete="off" aria-hidden="true">

					<fieldset class="project-form__section">
						<legend>
							<span>01</span>
							<strong>Što vam treba?</strong>
						</legend>

						<div class="project-types">

							<label class="project-type">
								<input type="radio" name="project_type" value="landing-page">
								<span>
									<strong>Landing stranica</strong>
									<small>Fokusirana stranica za ponudu, kampanju ili uslugu.</small>
								</span>
							</label>

							<label class="project-type">
								<input type="radio" name="project_type" value="wordpress">
								<span>
									<strong>WordPress stranica</strong>
									<small>Poslovna web stranica prilagođena vašem brendu.</small>
								</span>
							</label>

							<label class="project-type">
								<input type="radio" name="project_type" value="ecommerce">
								<span>
									<strong>Web trgovina</strong>
									<small>Prodaja proizvoda ili usluga putem interneta.</small>
								</span>
							</label>

							<label class="project-type">
								<input type="radio" name="project_type" value="web-app">
								<span>
									<strong>Web aplikacija</strong>
									<small>Custom alat, portal ili poslovni sustav.</small>
								</span>
							</label>

							<label class="project-type">
								<input type="radio" name="project_type" value="desktop-app">
								<span>
									<strong>Desktop aplikacija</strong>
									<small>Poslovna aplikacija za rad na računalu.</small>
								</span>
							</label>

							<label class="project-type">
								<input type="radio" name="project_type" value="mobile-app">
								<span>
									<strong>Mobilna aplikacija</strong>
									<small>Aplikacija za mobilne uređaje.</small>
								</span>
							</label>

							<label class="project-type project-type--wide">
								<input type="radio" name="project_type" value="not-sure">
								<span>
									<strong>Nisam siguran što mi treba</strong>
									<small>Opišite problem, a mi ćemo predložiti odgovarajući smjer.</small>
								</span>
							</label>

						</div>
					</fieldset>

					<fieldset class="project-form__section">
						<legend>
							<span>02</span>
							<strong>O projektu</strong>
						</legend>

						<label class="project-field project-field--full">
							<span>Što želite napraviti? *</span>
							<textarea
								name="project_description"
								rows="7"
								required
								placeholder="Opišite ideju, problem koji želite riješiti ili što očekujete od novog weba / aplikacije."
							></textarea>
						</label>

						<label class="project-field project-field--full">
							<span>Postojeća web stranica</span>
							<input
								type="url"
								name="current_website"
								placeholder="https://vasa-stranica.hr"
							>
						</label>

						<div class="project-form__grid">

							<label class="project-field">
								<span>Okvirni budžet</span>
								<select name="budget">
									<option value="">Još nisam siguran</option>
									<option value="under-1000">Do 1.000 €</option>
									<option value="1000-2500">1.000 – 2.500 €</option>
									<option value="2500-5000">2.500 – 5.000 €</option>
									<option value="5000-plus">5.000 € +</option>
								</select>
							</label>

							<label class="project-field">
								<span>Kada želite krenuti?</span>
								<select name="timeline">
									<option value="">Nije određeno</option>
									<option value="asap">Što prije</option>
									<option value="month">Unutar mjesec dana</option>
									<option value="three-months">Unutar 3 mjeseca</option>
									<option value="later">Kasnije</option>
								</select>
							</label>

						</div>
					</fieldset>

					<fieldset class="project-form__section">
						<legend>
							<span>03</span>
							<strong>O vama</strong>
						</legend>

						<div class="project-form__grid">

							<label class="project-field">
								<span>Ime i prezime *</span>
								<input type="text" name="name" autocomplete="name" required>
							</label>

							<label class="project-field">
								<span>Tvrtka / obrt</span>
								<input type="text" name="company" autocomplete="organization">
							</label>

							<label class="project-field">
								<span>Email *</span>
								<input type="email" name="email" autocomplete="email" required>
							</label>

							<label class="project-field">
								<span>Telefon</span>
								<input type="tel" name="phone" autocomplete="tel">
							</label>

						</div>
					</fieldset>

					<label class="project-consent">
						<input type="checkbox" name="privacy" value="1" required>
						<span>
							Slažem se da se uneseni podaci koriste za obradu i odgovor na moj upit. *
						</span>
					</label>

					<div class="project-submit">
						<button class="button project-submit__button" type="submit" name="adriabit_project_submit" value="1">
							Pošalji projekt
							<span aria-hidden="true">↗</span>
						</button>

						<p>
							Podaci se koriste isključivo za obradu vašeg upita.
						</p>
					</div>

				</form>
			</div>

		</div>
	</section>

	<section class="project-bottom">
		<div class="project-shell project-bottom__inner">
			<p class="project-eyebrow">NEMA PRODAVANJA MAGLE</p>
			<h2>
				Prvo moramo razumjeti<br>
				<span>što vaš posao stvarno treba.</span>
			</h2>
			<p>
				Ako postoje jednostavniji ili smisleniji način da riješimo problem,
				reći ćemo vam prije nego što krenemo graditi.
			</p>
		</div>
	</section>

</main>

<?php
get_footer();
