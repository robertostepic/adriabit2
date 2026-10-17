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
				Web i aplikacije koje vaš posao čine lakšim.
			</p>

		</div>

		<div class="site-footer__links">

			<a href="<?php echo esc_url( home_url( '/usluge/' ) ); ?>">
				Usluge
			</a>

			<a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>">
				Projekti
			</a>

			<a href="<?php echo esc_url( home_url( '/#o-nama' ) ); ?>">
				O nama
			</a>

			<a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">
				Kontakt
			</a>

			<a href="<?php echo esc_url( home_url( '/pravni-podaci/' ) ); ?>">
				Pravni podaci
			</a>

			<a href="<?php echo esc_url( home_url( '/politika-privatnosti/' ) ); ?>">
				Politika privatnosti
			</a>

			<a href="<?php echo esc_url( home_url( '/politika-kolacica/' ) ); ?>">
				Politika kolačića
			</a>

		</div>

	</div>

	<div class="site-footer__bottom">

		<p>
			&copy;
			<?php echo esc_html( wp_date( 'Y' ) ); ?>
			ADRIABIT. AdriaBit je brend obrta STEP, vl. Maja Stepić.
		</p>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>