<?php
/**
 * Prijava u Project Portal.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="portal-login-page">
	<section class="portal-login">
		<div class="portal-login__glow" aria-hidden="true"></div>

		<div class="portal-login__shell">

			<div class="portal-login__intro">
				<p class="portal-login__eyebrow">PROJECT PORTAL</p>

				<h1>
					Vaš projekt.<br>
					<span>Uvijek na jednom mjestu.</span>
				</h1>

				<p class="portal-login__lead">
					Pratite tijek projekta, nove verzije, poruke, datoteke i sljedeće korake
					bez traženja informacija po emailovima.
				</p>

				<div class="portal-login__features">
					<div>
						<span>01</span>
						<p>Status i napredak projekta</p>
					</div>
					<div>
						<span>02</span>
						<p>Novosti, datoteke i pregledi</p>
					</div>
					<div>
						<span>03</span>
						<p>Jedno mjesto za komunikaciju</p>
					</div>
				</div>
			</div>

			<div class="portal-login__card">
				<div class="portal-login__card-head">
					<p class="portal-login__eyebrow">PRIJAVA</p>
					<h2>Dobro došli natrag.</h2>
					<p>Prijavite se podacima koje ste dobili za svoj projekt.</p>
				</div>

				<div class="portal-login__demo-note">
					<span>DEMO</span>
					<p>Project Portal još nije povezan s korisničkim računima. Ova stranica trenutno prikazuje buduće korisničko sučelje.</p>
				</div>

				<form class="portal-login__form" action="#" method="post" onsubmit="return false;">
					<label>
						<span>Email</span>
						<input type="email" name="email" autocomplete="email" placeholder="ime@tvrtka.hr">
					</label>

					<label>
						<span>Lozinka</span>
						<input type="password" name="password" autocomplete="current-password" placeholder="••••••••">
					</label>

					<div class="portal-login__options">
						<label class="portal-login__remember">
							<input type="checkbox" name="remember">
							<span>Zapamti me</span>
						</label>

						<span class="portal-login__muted">Zaboravljena lozinka</span>
					</div>

					<button class="button portal-login__submit" type="button" disabled aria-disabled="true">
						Prijava u portal
						<span aria-hidden="true">↗</span>
					</button>
				</form>

				<p class="portal-login__help">
					Trebate pristup projektu?
					<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontaktirajte AdriaBit</a>
				</p>
			</div>

		</div>
	</section>
</main>

<?php get_footer(); ?>
