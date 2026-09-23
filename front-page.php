<?php
/**
 * ADRIABIT Front Page.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content">

	<?php get_template_part( 'template-parts/home/hero' ); ?>

	<?php get_template_part( 'template-parts/home/services' ); ?>

	<?php get_template_part( 'template-parts/home/process' ); ?>

	<?php get_template_part( 'template-parts/home/work' ); ?>

	<?php get_template_part( 'template-parts/home/portal' ); ?>

	<?php get_template_part( 'template-parts/home/about' ); ?>

	<?php get_template_part( 'template-parts/home/final-cta' ); ?>

</main>

<?php
get_footer();