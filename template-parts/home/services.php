<?php
/**
 * ADRIABIT Services intro.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$services = array(
	array(
		'title' => 'Landing stranice',
		'icon'  => 'browser',
	),
	array(
		'title' => 'WordPress rješenja',
		'icon'  => 'wordpress',
	),
	array(
		'title' => 'eCommerce trgovine',
		'icon'  => 'cart',
	),
	array(
		'title' => 'Web aplikacije',
		'icon'  => 'grid',
	),
	array(
		'title' => 'Desktop aplikacije',
		'icon'  => 'desktop',
	),
	array(
		'title' => 'Mobilne aplikacije',
		'icon'  => 'mobile',
	),
);
?>

<section id="sto-radimo" class="ab-services">

	<div class="container--wide">

		<div class="ab-services__intro">

			<div class="ab-services__headline">

				<p class="ab-kicker">
					Što radimo
				</p>

				<h2>
					Ne radimo samo<br>
					web stranice.
					<strong>
						Gradimo digitalne<br>
						alate za poslovanje.
					</strong>
				</h2>

			</div>

			<div class="ab-services__side">

				<div class="ab-stats">

					<div>
						<strong>6+</strong>
						<span>područja<br>razvoja</span>
					</div>

					<div>
						<strong>100%</strong>
						<span>posvećenost<br>projektu</span>
					</div>

					<div>
						<strong>∞</strong>
						<span>dugoročna<br>suradnja</span>
					</div>

				</div>

				<div class="ab-services__description">

					<p>
						Od modernih web stranica do složenih
						poslovnih aplikacija – pomažemo malim
						i srednjim tvrtkama da digitaliziraju
						procese, unaprijede poslovanje i rastu brže.
					</p>

					<a href="#o-nama">
						Saznajte više o nama
						<span>→</span>
					</a>

				</div>

			</div>

		</div>


		<div class="ab-service-nav">

			<?php foreach ( $services as $index => $service ) : ?>

				<a
					href="#"
					class="ab-service-item<?php echo 0 === $index ? ' is-active' : ''; ?>"
				>

					<span class="ab-service-item__icon" aria-hidden="true">

						<?php if ( 'browser' === $service['icon'] ) : ?>

							<svg viewBox="0 0 32 32">
								<rect x="4" y="6" width="24" height="20" rx="2"/>
								<path d="M4 11h24"/>
							</svg>

						<?php elseif ( 'wordpress' === $service['icon'] ) : ?>

							<span class="ab-wp-icon">W</span>

						<?php elseif ( 'cart' === $service['icon'] ) : ?>

							<svg viewBox="0 0 32 32">
								<path d="M4 6h4l3 14h13l3-9H10"/>
								<circle cx="13" cy="25" r="1.5"/>
								<circle cx="23" cy="25" r="1.5"/>
							</svg>

						<?php elseif ( 'grid' === $service['icon'] ) : ?>

							<svg viewBox="0 0 32 32">
								<rect x="5" y="5" width="8" height="8" rx="1"/>
								<rect x="19" y="5" width="8" height="8" rx="1"/>
								<rect x="5" y="19" width="8" height="8" rx="1"/>
								<rect x="19" y="19" width="8" height="8" rx="1"/>
							</svg>

						<?php elseif ( 'desktop' === $service['icon'] ) : ?>

							<svg viewBox="0 0 32 32">
								<rect x="4" y="5" width="24" height="17" rx="1"/>
								<path d="M16 22v5M11 27h10"/>
							</svg>

						<?php else : ?>

							<svg viewBox="0 0 32 32">
								<rect x="9" y="3" width="14" height="26" rx="2"/>
								<path d="M14 6h4M15 25h2"/>
							</svg>

						<?php endif; ?>

					</span>

					<strong>
						<?php echo esc_html( $service['title'] ); ?>
					</strong>

					<?php if ( 0 === $index ) : ?>
						<span class="ab-service-item__arrow">→</span>
					<?php endif; ?>

				</a>

			<?php endforeach; ?>

		</div>

	</div>

</section>