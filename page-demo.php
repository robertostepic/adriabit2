<?php
/**
 * Demo page.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="ab-demo-page">

	<style>
		.ab-demo-page {
			background: #f4f9fb;
			color: #071a33;
		}

		.ab-demo-wrap {
			width: min(1400px, calc(100% - 80px));
			margin: 0 auto;
		}

		.ab-demo-hero {
			padding: 135px 0 80px;
			background:
				radial-gradient(circle at 82% 42%, rgba(15,110,140,.16), transparent 26%),
				linear-gradient(120deg, #071a2b 0%, #06192a 55%, #031321 100%);
			color: #fff;
		}

		.ab-demo-kicker {
			margin: 0 0 20px;
			font-size: .72rem;
			font-weight: 700;
			letter-spacing: .24em;
			text-transform: uppercase;
			color: #19c7ea;
		}

		.ab-demo-hero h1 {
			max-width: 850px;
			margin: 0;
			font-size: clamp(3.7rem, 5.8vw, 6.3rem);
			line-height: .94;
			letter-spacing: -.055em;
		}

		.ab-demo-hero h1 span {
			color: #18c6e7;
		}

		.ab-demo-hero p:last-child {
			max-width: 680px;
			margin: 26px 0 0;
			font-size: 1rem;
			line-height: 1.75;
			color: rgba(255,255,255,.66);
		}

		.ab-demo-projects {
			padding: 95px 0 110px;
		}

		.ab-demo-project {
			display: grid;
			grid-template-columns: minmax(0, 1.35fr) minmax(330px, .65fr);
			gap: 70px;
			align-items: center;
			padding: 0 0 95px;
			margin: 0 0 95px;
			border-bottom: 1px solid rgba(7,40,68,.10);
		}

		.ab-demo-project:last-child {
			padding-bottom: 0;
			margin-bottom: 0;
			border-bottom: 0;
		}

		.ab-demo-project--reverse {
			grid-template-columns: minmax(330px, .65fr) minmax(0, 1.35fr);
		}

		.ab-demo-project--reverse .ab-demo-project__copy {
			order: 1;
		}

		.ab-demo-project--reverse .ab-demo-browser {
			order: 2;
		}

		.ab-demo-browser {
			overflow: hidden;
			border: 1px solid rgba(7,40,68,.12);
			border-radius: 18px;
			background: #071a2b;
			box-shadow: 0 25px 60px rgba(7,26,43,.15);
		}

		.ab-demo-browser__bar {
			display: flex;
			align-items: center;
			gap: 7px;
			height: 44px;
			padding: 0 15px;
			background: #0d2237;
		}

		.ab-demo-browser__bar i {
			display: block;
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: rgba(255,255,255,.22);
		}

		.ab-demo-browser img {
			display: block;
			width: 100%;
			height: auto;
		}

		.ab-demo-project__label {
			margin: 0 0 16px;
			font-size: .68rem;
			font-weight: 700;
			letter-spacing: .18em;
			text-transform: uppercase;
			color: #0d9fc5;
		}

		.ab-demo-project h2 {
			margin: 0;
			font-size: clamp(2.7rem, 4vw, 4.3rem);
			line-height: .98;
			letter-spacing: -.05em;
		}

		.ab-demo-project__type {
			margin: 14px 0 0;
			font-size: .78rem;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: .08em;
			color: #7890a2;
		}

		.ab-demo-project__text {
			margin: 24px 0 0;
			font-size: .98rem;
			line-height: 1.75;
			color: #5d7284;
		}

		.ab-demo-project__lead {
			margin-top: 18px;
			font-weight: 700;
			line-height: 1.65;
			color: #23394c;
		}

		.ab-demo-project__link {
			display: inline-flex;
			align-items: center;
			gap: 12px;
			margin-top: 28px;
			padding-bottom: 5px;
			border-bottom: 1px solid #16b9df;
			font-weight: 700;
			color: #078eaf;
			text-decoration: none;
		}

		/* Python Garage */
		.ab-demo-project--garage {
			display: block;
		}

		.ab-demo-project--garage .ab-demo-project__top {
			display: grid;
			grid-template-columns: minmax(0, .75fr) minmax(0, 1.25fr);
			gap: 70px;
			align-items: end;
			margin-bottom: 42px;
		}

		.ab-demo-project--garage .ab-demo-project__copy {
			max-width: 620px;
		}

		.ab-demo-gallery {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 18px;
		}

		.ab-demo-gallery__item {
			overflow: hidden;
			border: 1px solid rgba(7,40,68,.12);
			border-radius: 16px;
			background: #fff;
			box-shadow: 0 18px 45px rgba(7,26,43,.08);
		}

		.ab-demo-gallery__item--wide {
			grid-column: 1 / -1;
		}

		.ab-demo-gallery__item img {
			display: block;
			width: 100%;
			height: auto;
		}

		@media (max-width: 900px) {
			.ab-demo-wrap {
				width: min(100% - 36px, 1400px);
			}

			.ab-demo-project,
			.ab-demo-project--reverse {
				grid-template-columns: 1fr;
				gap: 40px;
			}

			.ab-demo-project--reverse .ab-demo-project__copy,
			.ab-demo-project--reverse .ab-demo-browser {
				order: initial;
			}

			.ab-demo-project--garage .ab-demo-project__top {
				grid-template-columns: 1fr;
				gap: 28px;
			}
		}

		@media (max-width: 640px) {
			.ab-demo-hero {
				padding: 115px 0 65px;
			}

			.ab-demo-projects {
				padding: 65px 0 80px;
			}

			.ab-demo-project {
				padding-bottom: 65px;
				margin-bottom: 65px;
			}

			.ab-demo-gallery {
				grid-template-columns: 1fr;
			}

			.ab-demo-gallery__item--wide {
				grid-column: auto;
			}
		}
	</style>

	<section class="ab-demo-hero">
		<div class="ab-demo-wrap">

			<p class="ab-demo-kicker">Demo projekti</p>

			<h1>
				Primjeri onoga<br>
				što <span>gradimo.</span>
			</h1>

			<p>
				Web stranice, aplikacije i poslovna rješenja kroz konkretne demo projekte.
			</p>

		</div>
	</section>

	<section class="ab-demo-projects">
		<div class="ab-demo-wrap">

			<!-- PROJEKT 01 -->
			<article class="ab-demo-project">

				<div class="ab-demo-browser">
					<div class="ab-demo-browser__bar" aria-hidden="true">
						<i></i><i></i><i></i>
					</div>

					<a
						href="https://wordpress.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/law.webp' ) ); ?>"
							alt="Demo WordPress stranica odvjetničkog ureda Petrić i partneri"
						>
					</a>
				</div>

				<div class="ab-demo-project__copy">
					<p class="ab-demo-project__label">Demo projekt · 01</p>

					<h2>Petrić i partneri</h2>

					<p class="ab-demo-project__type">
						Odvjetnički ured · WordPress
					</p>

					<p class="ab-demo-project__text">
						Poslovna WordPress stranica za odvjetnički ured,
						s fokusom na jasan sadržaj, ozbiljan vizualni identitet
						i jednostavan put do kontakta.
					</p>

					<a
						class="ab-demo-project__link"
						href="https://wordpress.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						Pogledaj demo ↗
					</a>
				</div>

			</article>


			<!-- PROJEKT 02 -->
			<article class="ab-demo-project ab-demo-project--reverse">

				<div class="ab-demo-project__copy">
					<p class="ab-demo-project__label">Demo projekt · 02</p>

					<h2>T&amp;S Digital</h2>

					<p class="ab-demo-project__type">
						Digitalna agencija · Web stranica
					</p>

					<p class="ab-demo-project__text">
						Moderna prezentacijska stranica za digitalnu agenciju,
						s naglaskom na usluge, jasan proces rada i snažan
						vizualni identitet.
					</p>

					<a
						class="ab-demo-project__link"
						href="https://tsdigital.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						Pogledaj demo ↗
					</a>
				</div>

				<div class="ab-demo-browser">
					<div class="ab-demo-browser__bar" aria-hidden="true">
						<i></i><i></i><i></i>
					</div>

					<a
						href="https://tsdigital.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/tsdigital.webp' ) ); ?>"
							alt="Demo stranica digitalne agencije T&S Digital"
						>
					</a>
				</div>

			</article>


			<!-- PROJEKT 03 -->
			<article class="ab-demo-project ab-demo-project--garage">

				<div class="ab-demo-project__top">

					<div class="ab-demo-project__copy">
						<p class="ab-demo-project__label">Demo projekt · 03</p>

						<h2>Python Garage</h2>

						<p class="ab-demo-project__type">
							Desktop aplikacija · Python · Autoservis
						</p>
					</div>

					<div>
						<p class="ab-demo-project__lead">
							Od prvog dolaska vozila do završnog računa —
							cijeli autoservis na jednom mjestu.
						</p>

						<p class="ab-demo-project__text">
							Python Garage je moderna desktop aplikacija za upravljanje
							autoservisima i servisnim radionicama. Povezuje kupce, vozila,
						 termine, radne naloge, mehaničare, rezervne dijelove, račune
							i naplate u jedan pregledan sustav.
						</p>

						<p class="ab-demo-project__text">
							Pratite što je trenutno u radionici, koji su poslovi u tijeku,
							što čeka dijelove ili odobrenje kupca, koja su vozila spremna
							za preuzimanje i koliko je naplaćeno — bez nepovezanih tablica,
							papira i ručnog praćenja.
						</p>

						<p class="ab-demo-project__text">
							Demo verzija je unaprijed popunjena realističnim podacima kako
							biste odmah mogli isprobati kompletan tijek rada: kupce i vozila,
							današnje termine, aktivne popravke, rad mehaničara, skladište
							dijelova, račune, plaćanja, izvještaje i dokumente.
						</p>

						<p class="ab-demo-project__lead">
							Python Garage — manje administracije, bolja kontrola radionice.
						</p>
					</div>

				</div>

				<div class="ab-demo-gallery">

					<div class="ab-demo-gallery__item ab-demo-gallery__item--wide">
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/garage1.webp' ) ); ?>"
							alt="Python Garage dashboard"
							loading="lazy"
						>
					</div>

					<div class="ab-demo-gallery__item">
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/garage2.webp' ) ); ?>"
							alt="Python Garage upravljanje kupcima"
							loading="lazy"
						>
					</div>

					<div class="ab-demo-gallery__item">
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/garage3.webp' ) ); ?>"
							alt="Python Garage radni nalog"
							loading="lazy"
						>
					</div>

					<div class="ab-demo-gallery__item">
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/garage4.webp' ) ); ?>"
							alt="Python Garage skladište dijelova"
							loading="lazy"
						>
					</div>

					<div class="ab-demo-gallery__item">
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/garage5.webp' ) ); ?>"
							alt="Python Garage izvještaji"
							loading="lazy"
						>
					</div>

				</div>

			</article>


			<!-- PROJEKT 04 -->
			<article class="ab-demo-project">

				<div class="ab-demo-browser">
					<div class="ab-demo-browser__bar" aria-hidden="true">
						<i></i><i></i><i></i>
					</div>

					<a
						href="https://mobilerepairshop.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/mobile-repair.webp' ) ); ?>"
							alt="FIXORA Mobile Repair Studio demo stranica"
							loading="lazy"
						>
					</a>
				</div>

				<div class="ab-demo-project__copy">
					<p class="ab-demo-project__label">Demo projekt · 04</p>

					<h2>FIXORA Mobile Repair Studio</h2>

					<p class="ab-demo-project__type">
						Servis mobilnih uređaja · WordPress
					</p>

					<p class="ab-demo-project__text">
						Moderna WordPress stranica za servis mobitela i pametnih uređaja,
						dizajnirana da korisniku odmah pokaže što servis nudi, koliko
						popravak traje i kako može pokrenuti svoj zahtjev.
					</p>

					<p class="ab-demo-project__text">
						Naglasak je na brzoj navigaciji, jasnim uslugama i cijenama,
						praćenju statusa popravka te snažnim pozivima na akciju koji
						korisnika vode od problema do rezervacije servisa bez nepotrebnih koraka.
					</p>

					<p class="ab-demo-project__lead">
						FIXORA — brzo, jasno i profesionalno iskustvo od prvog klika
						do preuzimanja uređaja.
					</p>

					<a
						class="ab-demo-project__link"
						href="https://mobilerepairshop.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						Pogledaj demo ↗
					</a>
				</div>

			</article>


			<!-- PROJEKT 05 -->
			<article class="ab-demo-project ab-demo-project--reverse">

				<div class="ab-demo-project__copy">
					<p class="ab-demo-project__label">Demo projekt · 05</p>

					<h2>BLACKLINE Barber Studio</h2>

					<p class="ab-demo-project__type">
						Barber studio · WordPress · Video &amp; Motion
					</p>

					<p class="ab-demo-project__text">
						Premium WordPress stranica za moderan barber studio,
						osmišljena kao vizualno iskustvo, a ne samo klasična
						prezentacijska stranica.
					</p>

					<p class="ab-demo-project__text">
						Projekt koristi velike tipografske kompozicije, cinematic
						video sadržaj, animacije pri scrollu i pažljivo tempirane
						prijelaze kako bi cijela stranica imala osjećaj modernog
						lifestyle brenda.
					</p>

					<p class="ab-demo-project__text">
						Poseban naglasak stavljen je na spoj videa i animacije
						bez gubitka preglednosti i funkcionalnosti stranice,
						dok je rezervacija termina uvijek jasno dostupna.
					</p>

					<p class="ab-demo-project__lead">
						BLACKLINE — primjer kako web stranica može istovremeno
						prodavati uslugu i graditi snažan identitet brenda.
					</p>

					<a
						class="ab-demo-project__link"
						href="https://barber.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						Pogledaj demo ↗
					</a>
				</div>

				<div class="ab-demo-browser">
					<div class="ab-demo-browser__bar" aria-hidden="true">
						<i></i><i></i><i></i>
					</div>

					<a
						href="https://barber.robipc.org/"
						target="_blank"
						rel="noopener noreferrer"
					>
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/barber.webp' ) ); ?>"
							alt="BLACKLINE Barber Studio demo stranica"
							loading="lazy"
						>
					</a>
				</div>

			</article>

		</div>
	</section>

</main>

<?php get_footer(); ?>
