<?php
/**
 * ADRIABIT Homepage Hero.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="ab-hero" data-hero>

	<div class="ab-hero__background" aria-hidden="true">
		<div class="ab-hero__glow"></div>
		<div class="ab-hero__dots"></div>

		<div class="ab-hero__ribbon">
			<span class="ab-ribbon ab-ribbon--back"></span>
			<span class="ab-ribbon ab-ribbon--front"></span>
		</div>
	</div>

	<div class="container--wide ab-hero__inner">

		<div class="ab-hero__copy">

			<p class="ab-kicker" data-hero-reveal>
				Digitalna rješenja za stvarni rast
			</p>

			<h1 class="ab-hero__title">

				<span class="ab-title-mask">
					<span>Web i aplikacije</span>
				</span>

				<span class="ab-title-mask ab-title-mask--accent">
					<span>koje rade za</span>
				</span>

				<span class="ab-title-mask">
					<span><em>vaš</em> posao.</span>
				</span>

			</h1>

			<p class="ab-hero__lead" data-hero-reveal>
				Razvijamo web stranice, aplikacije i digitalne
				alate koji vam štede vrijeme, povezuju procese
				i donose stvarne rezultate.
			</p>

			<div class="ab-hero__actions" data-hero-reveal>

				<a
					class="ab-button ab-button--primary"
					href="<?php echo esc_url( home_url( '/pokrenimo-projekt/' ) ); ?>"
				>
					Pokrenimo projekt
					<span aria-hidden="true">→</span>
				</a>

				<a
					class="ab-button ab-button--outline"
					href="<?php echo esc_url( home_url( '/demo/' ) ); ?>"
				>
					Pogledaj demo
				</a>

			</div>

			<div class="ab-benefits" data-hero-reveal>

				<div class="ab-benefit">
					<div class="ab-benefit__icon" aria-hidden="true">
						<svg viewBox="0 0 32 32">
							<path d="M6 8.5h20v13H14l-6 4v-4H6z"/>
							<circle cx="11" cy="15" r="1"/>
							<circle cx="16" cy="15" r="1"/>
							<circle cx="21" cy="15" r="1"/>
						</svg>
					</div>

					<span>Direktna<br>komunikacija</span>
				</div>

				<div class="ab-benefit">
					<div class="ab-benefit__icon" aria-hidden="true">
						<svg viewBox="0 0 32 32">
							<path d="M16 4l9 4v7c0 6-3.8 10.3-9 13-5.2-2.7-9-7-9-13V8z"/>
							<path d="M12 16l3 3 6-7"/>
						</svg>
					</div>

					<span>Transparentan<br>proces</span>
				</div>

				<div class="ab-benefit">
					<div class="ab-benefit__icon" aria-hidden="true">
						<svg viewBox="0 0 32 32">
							<path d="M6 25V18h4v7M14 25V12h4v13M22 25V6h4v19"/>
						</svg>
					</div>

					<span>Rješenja<br>s rezultatima</span>
				</div>

			</div>

		</div>


		<div class="ab-hero__visual" data-hero-visual>

			<div class="ab-visual__halo" aria-hidden="true"></div>

			<div class="ab-laptop" data-laptop>

				<div class="ab-laptop__screen">

					<div class="ab-portal">

						<aside class="ab-portal__sidebar">

							<div class="ab-portal__logo">
								<span>A</span>
								<strong>ADRIABIT</strong>
							</div>

							<nav>
								<span class="is-active">Pregled</span>
								<span>Zadaci</span>
								<span>Datoteke</span>
								<span>Komentari</span>
								<span>Faze projekta</span>
								<span>Postavke</span>
							</nav>

						</aside>

						<div class="ab-portal__main">

							<div class="ab-portal__top">
								<span>Projekt AB-0024</span>
								<small>Klijent</small>
							</div>

							<h2>Website Redesign</h2>

							<p class="ab-portal__intro">
								Pratite napredak vašeg projekta u stvarnom vremenu.
							</p>

							<div class="ab-project-steps">

								<div class="is-complete">
									<i>✓</i>
									<span>Otkriće</span>
								</div>

								<div class="is-complete">
									<i>✓</i>
									<span>Dizajn</span>
								</div>

								<div class="is-current">
									<i>✓</i>
									<span>Razvoj</span>
								</div>

								<div>
									<i></i>
									<span>Testiranje</span>
								</div>

								<div>
									<i></i>
									<span>Lansiranje</span>
								</div>

							</div>

							<div class="ab-portal__cards">

								<div class="ab-portal-card">

									<strong>Zadnja objava</strong>

									<p>
										Razvoj početne stranice je završen.
										U tijeku je optimizacija za mobilne uređaje.
									</p>

									<small>12. ruj. 2026.</small>

								</div>

								<div class="ab-portal-card">

									<strong>Datoteke</strong>

									<ul>
										<li>homepage-v2.fig</li>
										<li>logo-assets.zip</li>
										<li>sadržaj-draft.docx</li>
									</ul>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="ab-laptop__base"></div>
				<div class="ab-laptop__foot"></div>

			</div>


			<div class="ab-status-card" data-status-card>
				<span></span>
				<p>Uvijek znate<br>gdje smo.</p>
			</div>

			<div class="ab-signature" aria-hidden="true">
				<span>Ideje. Kod. Rezultati.</span>
				<i></i>
			</div>

		</div>

	</div>

	<a class="ab-scroll" href="#sto-radimo">
		<span class="ab-scroll__mouse">
			<i></i>
		</span>
		<span>Skrolajte dalje</span>
	</a>

</section>