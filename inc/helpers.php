<?php
/**
 * Theme helper functions.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return the URI for an asset inside the theme.
 *
 * @param string $path Relative asset path.
 *
 * @return string
 */
function adriabit_asset( $path ) {

	$path = ltrim( $path, '/' );

	return esc_url( ADRIABIT_URI . '/assets/' . $path );
}


/**
 * Output an accessible SVG-style icon placeholder.
 *
 * Used only for simple interface icons that do not belong
 * to the official ADRIABIT brand identity.
 *
 * @param string $name Icon name.
 *
 * @return string
 */
function adriabit_icon( $name ) {

	$icons = array(
		'arrow-up-right' =>
			'<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
				<path d="M7 17L17 7M9 7h8v8"/>
			</svg>',

		'arrow-down' =>
			'<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
				<path d="M12 5v14M6 13l6 6 6-6"/>
			</svg>',
	);

	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}

	return $icons[ $name ];
}