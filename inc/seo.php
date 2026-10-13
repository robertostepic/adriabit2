<?php
/**
 * Minimal SEO metadata for ADRIABIT.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return page-specific SEO data.
 *
 * @return array{title:string,description:string}
 */
function adriabit_get_seo_data() {

	$data = array(
		'title'       => '',
		'description' => '',
	);

	if ( is_front_page() ) {
		$data['title']       = 'Izrada web stranica i aplikacija | Adriabit';
		$data['description'] = 'Adriabit izrađuje web stranice, web trgovine i poslovne aplikacije prilagođene potrebama tvrtki i obrta.';
	} elseif ( is_page( 'usluge' ) ) {
		$data['title']       = 'Web stranice, web trgovine i aplikacije | Adriabit';
		$data['description'] = 'Web stranice, WordPress rješenja, web trgovine te web, desktop i mobilne aplikacije prilagođene vašem poslovanju.';
	} elseif ( is_page( 'demo' ) ) {
		$data['title']       = 'Naši projekti i demo rješenja | Adriabit';
		$data['description'] = 'Pogledajte Adriabit demo projekte web stranica, WordPress rješenja i poslovnih aplikacija.';
	} elseif ( is_page( 'kontakt' ) ) {
		$data['title']       = 'Kontakt i upiti | Adriabit';
		$data['description'] = 'Kontaktirajte Adriabit za web stranicu, web trgovinu, poslovnu aplikaciju ili razgovor o vašoj ideji.';
	} elseif ( is_page( 'pokrenimo-projekt' ) ) {
		$data['title']       = 'Zatražite ponudu za web ili aplikaciju | Adriabit';
		$data['description'] = 'Opišite svoj projekt i pošaljite upit Adriabitu za izradu web stranice, trgovine ili poslovne aplikacije.';
	} elseif ( is_page( 'politika-privatnosti' ) ) {
		$data['title']       = 'Politika privatnosti | Adriabit';
		$data['description'] = 'Informacije o obradi osobnih podataka na web stranici Adriabit.';
	} elseif ( is_page( 'politika-kolacica' ) ) {
		$data['title']       = 'Politika kolačića | Adriabit';
		$data['description'] = 'Informacije o kolačićima i postavkama privole na web stranici Adriabit.';
	}

	return $data;
}

/**
 * Keep Adriabit branding consistent in browser titles.
 *
 * @param array $parts Document title parts.
 * @return array
 */
function adriabit_filter_document_title_parts( $parts ) {

	$data = adriabit_get_seo_data();

	if ( ! empty( $data['title'] ) ) {
		$parts['title'] = $data['title'];
		unset( $parts['site'], $parts['tagline'] );
	}

	return $parts;
}
add_filter( 'document_title_parts', 'adriabit_filter_document_title_parts', 20 );

/**
 * Output minimal description and Open Graph metadata.
 */
function adriabit_output_seo_meta() {

	$data = adriabit_get_seo_data();

	if ( empty( $data['description'] ) ) {
		return;
	}

	$title       = ! empty( $data['title'] ) ? $data['title'] : wp_get_document_title();
	$description = $data['description'];
	$url         = is_front_page() ? home_url( '/' ) : get_permalink();

	echo "\n";
	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:locale" content="hr_HR">' . "\n";
	echo '<meta property="og:site_name" content="Adriabit">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
}
add_action( 'wp_head', 'adriabit_output_seo_meta', 5 );
