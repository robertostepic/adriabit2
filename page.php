<?php
/**
 * Default page template.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="default-page">

	<div class="container default-page__inner">

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article <?php post_class(); ?>>

				<header class="default-page__header">

					<h1>
						<?php the_title(); ?>
					</h1>

				</header>

				<div class="default-page__content">
					<?php the_content(); ?>
				</div>

			</article>

		<?php endwhile; ?>

	</div>

</main>

<?php
get_footer();