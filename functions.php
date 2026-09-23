<?php
/**
 * ADRIABIT theme bootstrap.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ADRIABIT_VERSION', '0.1.1' );
define( 'ADRIABIT_DIR', get_template_directory() );
define( 'ADRIABIT_URI', get_template_directory_uri() );

require_once ADRIABIT_DIR . '/inc/setup.php';
require_once ADRIABIT_DIR . '/inc/enqueue.php';
require_once ADRIABIT_DIR . '/inc/helpers.php';
require_once ADRIABIT_DIR . '/inc/cookie-consent.php';