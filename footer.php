<?php
/**
 * Site footer.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer class="site-footer">

	<div class="site-footer__inner">

		<div class="site-footer__brand">

			<a
				class="site-footer__logo"
				href="<?php echo esc_url( home_url( '/' ) ); ?>"
			>
				ADRIABIT
			</a>

			<p>
				Web i aplikacije koje rade za vaš posao.
			</p>

		</div>

		<div class="site-footer__links">

			<a href="<?php echo esc_url( home_url( '/#usluge' ) ); ?>">
				Usluge
			</a>

			<a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>">
				Demo
			</a>

			<a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
				Case Studies
			</a>

			<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">
				Kontakt
			</a>

		</div>

	</div>

	<div class="site-footer__bottom">

		<p>
			&copy;
			<?php echo esc_html( wp_date( 'Y' ) ); ?>
			ADRIABIT.
		</p>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>