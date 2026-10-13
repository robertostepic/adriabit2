<?php
/**
 * ADRIABIT selected projects.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="projekti" class="home-work">

	<div class="container">

		<div class="home-work__intro">

			<div>
				<p class="eyebrow">
					Naši radovi
				</p>

				<h2>
					Pogledajte kako to izgleda
					<span>u praksi.</span>
				</h2>
			</div>

			<p class="home-work__intro-copy">
				Nekoliko demo projekata kroz koje pokazujemo različite vrste
				web stranica i aplikacija koje možemo izraditi.
			</p>

		</div>

		<div class="home-work__grid">

			<article class="home-work__card">

				<a
					class="home-work__image"
					href="<?php echo esc_url( home_url( '/demo/' ) ); ?>"
					aria-label="Pogledajte demo projekt Petrić i partneri"
				>
					<img
						src="<?php echo esc_url( get_theme_file_uri( '/assets/images/law.webp' ) ); ?>"
						alt="Demo web stranica odvjetničkog ureda Petrić i partneri"
						loading="lazy"
					>
				</a>

				<div class="home-work__card-copy">
					<p class="home-work__meta">Demo projekt · Web stranica</p>

					<h3>Petrić i partneri</h3>

					<p>
						WordPress stranica za odvjetnički ured, napravljena tako da
						posjetitelj brzo pronađe važne informacije i jednostavno dođe do kontakta.
					</p>
				</div>

			</article>

			<article class="home-work__card">

				<a
					class="home-work__image"
					href="<?php echo esc_url( home_url( '/demo/' ) ); ?>"
					aria-label="Pogledajte demo projekt Python Garage"
				>
					<img
						src="<?php echo esc_url( get_theme_file_uri( '/assets/images/garage1.webp' ) ); ?>"
						alt="Python Garage desktop aplikacija za upravljanje autoservisom"
						loading="lazy"
					>
				</a>

				<div class="home-work__card-copy">
					<p class="home-work__meta">Demo projekt · Poslovna aplikacija</p>

					<h3>Python Garage</h3>

					<p>
						Desktop aplikacija za autoservis koja na jednom mjestu povezuje
						kupce, vozila, radne naloge, skladište, račune i naplate.
					</p>
				</div>

			</article>

			<article class="home-work__card">

				<a
					class="home-work__image"
					href="<?php echo esc_url( home_url( '/demo/' ) ); ?>"
					aria-label="Pogledajte demo projekt BLACKLINE Barber Studio"
				>
					<img
						src="<?php echo esc_url( get_theme_file_uri( '/assets/images/barber.webp' ) ); ?>"
						alt="BLACKLINE Barber Studio demo WordPress stranica"
						loading="lazy"
					>
				</a>

				<div class="home-work__card-copy">
					<p class="home-work__meta">Demo projekt · Web stranica</p>

					<h3>BLACKLINE Barber Studio</h3>

					<p>
						WordPress stranica za barber studio s velikim video sadržajem,
						animacijama i jasnim putem do rezervacije termina.
					</p>
				</div>

			</article>

		</div>

		<div class="home-work__actions">
			<a
				class="ab-button ab-button--primary"
				href="<?php echo esc_url( home_url( '/demo/' ) ); ?>"
			>
				Pogledajte sve projekte
				<span aria-hidden="true">→</span>
			</a>
		</div>

	</div>

</section>
