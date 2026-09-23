<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="final-cta">

	<div class="container">

		<p class="eyebrow">
			Imate ideju?
		</p>

		<h2>
			Pretvorimo je
			<span>u nešto konkretno.</span>
		</h2>

		<a
			class="button button--primary"
			href="<?php echo esc_url( home_url( '/pokrenimo-projekt/' ) ); ?>"
		>
			Pokrenimo projekt

			<?php echo adriabit_icon( 'arrow-up-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</a>

	</div>

</section>