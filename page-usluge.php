<?php
/**
 * Usluge page.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="services-page">

	<section class="services-hero">
		<div class="container--wide services-hero__inner">

			<div class="services-hero__content">
				<p class="services-kicker">Usluge</p>

				<h1>
					Digitalna rješenja<br>
					koja imaju <span>svrhu.</span>
				</h1>

				<p class="services-hero__text">
					Od fokusirane landing stranice do poslovne aplikacije —
					gradimo rješenja koja su jasna korisnicima, brza u radu
					i prilagođena stvarnim poslovnim potrebama.
				</p>

				<a
					class="services-button"
					href="<?php echo esc_url( home_url( '/pokrenimo-projekt/' ) ); ?>"
				>
					Pokrenimo projekt
					<span aria-hidden="true">→</span>
				</a>
			</div>

			<div class="services-hero__decoration" aria-hidden="true">
				<span class="services-hero__ring services-hero__ring--one"></span>
				<span class="services-hero__ring services-hero__ring--two"></span>
				<span class="services-hero__dot"></span>
			</div>

		</div>
	</section>


	<section class="services-offer">
		<div class="container--wide">

			<header class="services-section-heading">
				<p class="services-kicker">Što radimo</p>

				<div class="services-section-heading__grid">
					<h2>
						Šest područja.<br>
						Jedan partner.
					</h2>

					<p>
						Od web stranice do poslovne aplikacije.
						Odabiremo tehnologiju prema projektu,
						a ne projekt prema tehnologiji.
					</p>
				</div>
			</header>


			<div class="services-grid">

				<article class="service-card">
					<div class="service-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<rect x="3" y="4" width="18" height="16" rx="2"></rect>
							<path d="M3 9h18"></path>
							<path d="M7 6.5h.01M10 6.5h.01"></path>
						</svg>
					</div>

					<span class="service-card__number">01</span>

					<h3>Landing stranice</h3>

					<p>
						Fokusirane stranice za jednu uslugu, proizvod ili kampanju.
						Jasna poruka, brzo učitavanje i dobar prikaz na svim uređajima.
					</p>
				</article>


				<article class="service-card">
					<div class="service-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<circle cx="12" cy="12" r="9"></circle>
							<path d="M8 8.5 10.3 15 12 10.8 13.8 15 16 8.5"></path>
						</svg>
					</div>

					<span class="service-card__number">02</span>

					<h3>WordPress stranice</h3>

					<p>
						Poslovne WordPress stranice prilagođene vašem brendu,
						sadržaju i načinu rada — bez generičkog izgleda.
					</p>
				</article>


				<article class="service-card">
					<div class="service-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<path d="M4 7h16l-1.5 9H6z"></path>
							<path d="M8 7V5a4 4 0 0 1 8 0v2"></path>
							<circle cx="9" cy="19" r="1"></circle>
							<circle cx="17" cy="19" r="1"></circle>
						</svg>
					</div>

					<span class="service-card__number">03</span>

					<h3>eCommerce rješenja</h3>

					<p>
						Web trgovine s jasnim putem kupnje, jednostavnim upravljanjem
						proizvodima i preglednim procesom narudžbe.
					</p>
				</article>


				<article class="service-card">
					<div class="service-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<path d="M8 7 3 12l5 5"></path>
							<path d="m16 7 5 5-5 5"></path>
							<path d="m14 4-4 16"></path>
						</svg>
					</div>

					<span class="service-card__number">04</span>

					<h3>Web aplikacije</h3>

					<p>
						Interni alati, evidencije, portali i prilagođene aplikacije
						koje pojednostavljuju konkretne poslovne procese.
					</p>
				</article>


				<article class="service-card">
					<div class="service-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<rect x="3" y="4" width="18" height="13" rx="2"></rect>
							<path d="M8 21h8M12 17v4"></path>
						</svg>
					</div>

					<span class="service-card__number">05</span>

					<h3>Desktop aplikacije</h3>

					<p>
						Desktop softver za poslovanje kada lokalni rad,
						specifičan workflow ili Windows okruženje imaju više smisla.
					</p>
				</article>


				<article class="service-card">
					<div class="service-card__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<rect x="7" y="2.5" width="10" height="19" rx="2"></rect>
							<path d="M10 5h4"></path>
							<path d="M11 18.5h2"></path>
						</svg>
					</div>

					<span class="service-card__number">06</span>

					<h3>Mobilne aplikacije</h3>

					<p>
						Mobilna rješenja za korisnike, zaposlenike i procese
						kojima je potreban jednostavan pristup informacijama u pokretu.
					</p>
				</article>

			</div>

		</div>
	</section>


	<section class="services-process">
		<div class="container--wide">

			<header class="services-process__header">
				<p class="services-kicker">Kako radimo</p>

				<h2>
					Jasan proces <span>od ideje do realizacije.</span>
				</h2>

				<p>
					Bez nepotrebne komplikacije. Jasno definiramo što radimo,
					gdje smo i što slijedi.
				</p>
			</header>


			<div class="process-list">

				<article class="process-step">
					<div class="process-step__marker" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<path d="M4 5h16v11H8l-4 4z"></path>
						</svg>
					</div>

					<div class="process-step__card">
						<span>01</span>
						<div>
							<h3>Razgovor i zahtjevi</h3>
							<p>
								Definiramo što trebate, cilj projekta,
								prioritete i osnovni opseg.
							</p>
						</div>
					</div>
				</article>


				<article class="process-step">
					<div class="process-step__marker" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<path d="m4 16 10-10 4 4-10 10H4z"></path>
							<path d="m12 8 4 4"></path>
						</svg>
					</div>

					<div class="process-step__card">
						<span>02</span>
						<div>
							<h3>Plan i dizajn</h3>
							<p>
								Dogovaramo strukturu, sadržaj, funkcionalnosti
								i vizualni smjer rješenja.
							</p>
						</div>
					</div>
				</article>


				<article class="process-step">
					<div class="process-step__marker" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<path d="M8 7 3 12l5 5"></path>
							<path d="m16 7 5 5-5 5"></path>
							<path d="m14 4-4 16"></path>
						</svg>
					</div>

					<div class="process-step__card">
						<span>03</span>
						<div>
							<h3>Razvoj</h3>
							<p>
								Gradimo dogovoreno rješenje i kroz rad
								jasno pokazujemo napredak projekta.
							</p>
						</div>
					</div>
				</article>


				<article class="process-step">
					<div class="process-step__marker" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<path d="m5 12 4 4L19 6"></path>
							<circle cx="12" cy="12" r="9"></circle>
						</svg>
					</div>

					<div class="process-step__card">
						<span>04</span>
						<div>
							<h3>Testiranje</h3>
							<p>
								Provjeravamo funkcionalnost, responsive prikaz,
								brzinu i završne detalje.
							</p>
						</div>
					</div>
				</article>


				<article class="process-step">
					<div class="process-step__marker" aria-hidden="true">
						<svg viewBox="0 0 24 24">
							<path d="M14 4c3 1 5 4 6 7l-5 5-7-7z"></path>
							<path d="m8 9-4 1-2 4 6 2"></path>
							<path d="m15 16-1 4-4 2-2-6"></path>
						</svg>
					</div>

					<div class="process-step__card">
						<span>05</span>
						<div>
							<h3>Realizacija</h3>
							<p>
								Objavljujemo i predajemo gotovo rješenje
								te prolazimo sve što vam je potrebno za daljnji rad.
							</p>
						</div>
					</div>
				</article>

			</div>

		</div>
	</section>


	<section class="services-cta">
		<div class="container--wide services-cta__inner">

			<p class="services-kicker">Imate ideju?</p>

			<h2>Recite nam što želite riješiti.</h2>

			<p>
				Objasnite nam što trebate.
				Zajedno ćemo pronaći odgovarajuće rješenje.
			</p>

			<a
				class="services-button services-button--light"
				href="<?php echo esc_url( home_url( '/pokrenimo-projekt/' ) ); ?>"
			>
				Pokrenimo projekt
				<span aria-hidden="true">→</span>
			</a>

		</div>
	</section>

</main>

<?php
get_footer();