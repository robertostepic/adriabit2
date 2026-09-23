<?php
/**
 * Site header.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">
	<?php esc_html_e( 'Preskoči na sadržaj', 'adriabit' ); ?>
</a>

<header
	class="site-header"
	id="site-header"
	data-site-header
>

	<div class="site-header__inner">

		<a
			class="site-logo"
			href="<?php echo esc_url( home_url( '/' ) ); ?>"
			aria-label="<?php esc_attr_e( 'ADRIABIT — Naslovnica', 'adriabit' ); ?>"
		>

			<span class="site-logo__mark" aria-hidden="true">
				A
			</span>

			<span class="site-logo__word">
				ADRIABIT
			</span>

		</a>

		<nav
			class="site-navigation"
			aria-label="<?php esc_attr_e( 'Glavna navigacija', 'adriabit' ); ?>"
			data-navigation
		>

			<a href="<?php echo esc_url( home_url( '/#usluge' ) ); ?>">
				Usluge
			</a>

			<a href="<?php echo esc_url( home_url( '/#projekti' ) ); ?>">
				Projekti
			</a>

			<a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>">
				Demo
			</a>

			<a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
				Case Studies
			</a>

			<a href="<?php echo esc_url( home_url( '/#o-nama' ) ); ?>">
				O nama
			</a>

			<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">
				Kontakt
			</a>

		</nav>

		<div class="site-header__actions">

			<a
				class="site-header__portal"
				href="<?php echo esc_url( home_url( '/portal/' ) ); ?>"
			>
				Portal za klijente
			</a>

			<a
				class="button button--header"
				href="<?php echo esc_url( home_url( '/pokrenimo-projekt/' ) ); ?>"
			>
				Pokrenimo projekt
			</a>

		</div>

		<button
			class="menu-toggle"
			type="button"
			aria-expanded="false"
			aria-controls="mobile-navigation"
			aria-label="<?php esc_attr_e( 'Otvori izbornik', 'adriabit' ); ?>"
			data-menu-toggle
		>
			<span></span>
			<span></span>
		</button>

	</div>

	<div
		class="mobile-navigation"
		id="mobile-navigation"
		data-mobile-navigation
	>

		<nav aria-label="<?php esc_attr_e( 'Mobilna navigacija', 'adriabit' ); ?>">

			<a href="<?php echo esc_url( home_url( '/#usluge' ) ); ?>">
				Usluge
			</a>

			<a href="<?php echo esc_url( home_url( '/#projekti' ) ); ?>">
				Projekti
			</a>

			<a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>">
				Demo
			</a>

			<a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
				Case Studies
			</a>

			<a href="<?php echo esc_url( home_url( '/#o-nama' ) ); ?>">
				O nama
			</a>

			<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">
				Kontakt
			</a>

			<a href="<?php echo esc_url( home_url( '/portal/' ) ); ?>">
				Portal za klijente
			</a>

			<a
				class="button"
				href="<?php echo esc_url( home_url( '/pokrenimo-projekt/' ) ); ?>"
			>
				Pokrenimo projekt
			</a>

		</nav>

	</div>

</header>