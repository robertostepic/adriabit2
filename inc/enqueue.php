<?php
/**
 * Theme assets.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue global and page-specific assets.
 */
function adriabit_enqueue_assets() {

	$version = ADRIABIT_VERSION;

	/*
	 * Main WordPress stylesheet.
	 */
	wp_enqueue_style(
		'adriabit-style',
		get_stylesheet_uri(),
		array(),
		$version
	);

	/*
	 * Global design system.
	 */
	wp_enqueue_style(
		'adriabit-variables',
		ADRIABIT_URI . '/assets/css/variables.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'adriabit-reset',
		ADRIABIT_URI . '/assets/css/reset.css',
		array( 'adriabit-variables' ),
		$version
	);

	wp_enqueue_style(
		'adriabit-typography',
		ADRIABIT_URI . '/assets/css/typography.css',
		array( 'adriabit-reset' ),
		$version
	);

	wp_enqueue_style(
		'adriabit-global',
		ADRIABIT_URI . '/assets/css/global.css',
		array( 'adriabit-typography' ),
		$version
	);

	wp_enqueue_style(
		'adriabit-navigation',
		ADRIABIT_URI . '/assets/css/navigation.css',
		array( 'adriabit-global' ),
		$version
	);

	wp_enqueue_style(
		'adriabit-animations',
		ADRIABIT_URI . '/assets/css/animations.css',
		array( 'adriabit-global' ),
		$version
	);

	/*
	 * Global JavaScript.
	 */
	wp_enqueue_script(
		'adriabit-main',
		ADRIABIT_URI . '/assets/js/main.js',
		array(),
		$version,
		true
	);

	wp_enqueue_script(
		'adriabit-navigation',
		ADRIABIT_URI . '/assets/js/navigation.js',
		array( 'adriabit-main' ),
		$version,
		true
	);

	/*
	 * Homepage-only assets.
	 */
	if ( is_front_page() ) {

		wp_enqueue_style(
			'adriabit-home',
			ADRIABIT_URI . '/assets/css/home.css',
			array( 'adriabit-animations' ),
			$version
		);

		wp_enqueue_script(
			'adriabit-animations',
			ADRIABIT_URI . '/assets/js/animations.js',
			array( 'adriabit-main' ),
			$version,
			true
		);

		wp_enqueue_script(
	'adriabit-gsap',
	'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js',
	array(),
	'3.13.0',
	true
);

wp_enqueue_script(
	'adriabit-scrolltrigger',
	'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js',
	array( 'adriabit-gsap' ),
	'3.13.0',
	true
);

		wp_enqueue_script(
			'adriabit-hero',
			ADRIABIT_URI . '/assets/js/hero.js',
			array( 'adriabit-gsap', 'adriabit-scrolltrigger' ),
			$version,
			true
		);

		wp_enqueue_script(
			'adriabit-services',
			ADRIABIT_URI . '/assets/js/services.js',
			array( 'adriabit-animations' ),
			$version,
			true
		);
	}

	if ( is_page( 'usluge' ) ) {
	wp_enqueue_style(
		'adriabit-usluge',
		ADRIABIT_URI . '/assets/css/usluge.css',
		array( 'adriabit-animations' ),
		$version
	);
}

	if ( is_page( 'pokrenimo-projekt' ) ) {

	wp_enqueue_style(
		'adriabit-project-start',
		ADRIABIT_URI . '/assets/css/project-start.css',
		array( 'adriabit-navigation' ),
		$version
	);
   }

   if ( is_page( 'kontakt' ) ) { 
	wp_enqueue_style(
		 'adriabit-contact', 
		 ADRIABIT_URI . '/assets/css/contact.css', 
		 array( 'adriabit-navigation' ), 
		 $version 
		 ); 
		}

	if ( is_page( 'prijava' ) ) {
	wp_enqueue_style(
		'adriabit-portal-login',
		ADRIABIT_URI . '/assets/css/portal-login.css',
		array( 'adriabit-navigation' ),
		$version
		);
	}

	if ( is_page( array( 'politika-privatnosti', 'politika-kolacica' ) ) ) {
	wp_enqueue_style(
		'adriabit-legal',
		ADRIABIT_URI . '/assets/css/legal.css',
		array( 'adriabit-navigation' ),
		$version
		);
	}

	wp_enqueue_style(
	'adriabit-cookie-consent',
	ADRIABIT_URI . '/assets/css/cookie-consent.css',
	array( 'adriabit-global' ),
	$version
);

wp_enqueue_script(
	'adriabit-cookie-consent',
	ADRIABIT_URI . '/assets/js/cookie-consent.js',
	array(),
	$version,
	true
);
}
add_action( 'wp_enqueue_scripts', 'adriabit_enqueue_assets' );