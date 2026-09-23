<?php
/**
 * Main fallback template.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="default-page">

	<div class="container">

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article <?php post_class(); ?>>

					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>

					<?php the_excerpt(); ?>

				</article>

			<?php endwhile; ?>

		<?php else : ?>

			<p>
				<?php esc_html_e( 'Nema sadržaja.', 'adriabit' ); ?>
			</p>

		<?php endif; ?>

	</div>

</main>

<?php
get_footer();