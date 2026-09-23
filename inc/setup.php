<?php
/**
 * Theme setup.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure theme features.
 */
function adriabit_setup() {

	load_theme_textdomain(
		'adriabit',
		ADRIABIT_DIR . '/languages'
	);

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 260,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'align-wide' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'adriabit' ),
			'footer'  => __( 'Footer Navigation', 'adriabit' ),
		)
	);

	add_image_size(
		'adriabit-project',
		1600,
		1000,
		true
	);

	add_image_size(
		'adriabit-card',
		900,
		650,
		true
	);
}
add_action( 'after_setup_theme', 'adriabit_setup' );


/**
 * Set the theme content width.
 */
function adriabit_content_width() {

	$GLOBALS['content_width'] = apply_filters(
		'adriabit_content_width',
		1280
	);
}
add_action( 'after_setup_theme', 'adriabit_content_width', 0 );