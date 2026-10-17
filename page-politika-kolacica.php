<?php
/**
 * Politika kolačića.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="legal-page">

	<section class="legal-hero">
		<div class="legal-shell">

			<p class="legal-eyebrow">KOLAČIĆI</p>

			<h1>
				Politika<br>
				<span>kolačića.</span>
			</h1>

			<p class="legal-intro">
				Ovdje objašnjavamo koje kolačiće i slične tehnologije
				ova web stranica trenutno koristi te kako njima možete
				upravljati.
			</p>

		</div>
	</section>

	<section class="legal-content">
		<div class="legal-shell legal-layout">

			<aside class="legal-nav">

				<p>SADRŽAJ</p>

				<a href="#sto-su">
					01 — Što su kolačići
				</a>

				<a href="#trenutno">
					02 — Što trenutno koristimo
				</a>

				<a href="#lokalna-pohrana">
					03 — Lokalna pohrana
				</a>

				<a href="#wordpress">
					04 — WordPress tehnički podaci
				</a>

				<a href="#upravljanje">
					05 — Upravljanje
				</a>

				<a href="#buduce">
					06 — Buduće promjene
				</a>

			</aside>

			<article class="legal-article">

				<section id="sto-su">
					<span>01</span>

					<h2>Što su kolačići</h2>

					<p>
						Kolačići su male tekstualne datoteke koje web
						stranica može pohraniti u preglednik korisnika.
					</p>

					<p>
						Sličnu svrhu može imati i lokalna pohrana
						preglednika (localStorage), koja omogućuje
						spremanje jednostavnih postavki na uređaju korisnika.
					</p>
				</section>

				<section id="trenutno">
					<span>02</span>

					<h2>Što trenutno koristimo</h2>

					<p>
						U trenutnoj verziji teme ne koristimo
						Google Analytics, Meta Pixel ni druge analitičke
						ili marketinške alate koji bi se aktivirali radi
						praćenja posjetitelja ili oglašavanja.
					</p>

					<p>
						Zbog toga od javnih posjetitelja trenutačno ne
						tražimo privolu za analitičke ili marketinške
						kolačiće.
					</p>
				</section>

				<section id="lokalna-pohrana">
					<span>03</span>

					<h2>Lokalna pohrana preglednika</h2>

					<p>
						Za pamćenje da ste pročitali obavijest o
						kolačićima koristimo lokalnu pohranu preglednika.
						Ova postavka ne služi analitici, profiliranju ni
						oglašavanju.
					</p>

					<div class="legal-table">

						<div>
							<strong>Naziv</strong>
							<strong>Svrha</strong>
							<strong>Trajanje</strong>
						</div>

						<div>
							<span>adriabit_cookie_notice_v1</span>
							<span>
								Pamti da je korisnik zatvorio
								obavijest o kolačićima.
							</span>
							<span>
								Do brisanja podataka preglednika.
							</span>
						</div>

					</div>
				</section>

				<section id="wordpress">
					<span>04</span>

					<h2>WordPress tehnički podaci</h2>

					<p>
						WordPress može koristiti tehničke kolačiće u
						određenim situacijama, primjerice za prijavljene
						administratore ili funkcije koje zahtijevaju
						autentikaciju.
					</p>

					<p>
						Takvi kolačići služe tehničkom funkcioniranju
						sustava i ne koriste se za oglašavanje.
					</p>
				</section>

				<section id="upravljanje">
					<span>05</span>

					<h2>Upravljanje kolačićima i lokalnom pohranom</h2>

					<p>
						Kolačiće i podatke lokalne pohrane možete izbrisati
						putem postavki svojeg preglednika.
					</p>

					<p>
						Brisanjem lokalne pohrane ponovno će se prikazati
						naša obavijest o kolačićima.
					</p>
				</section>

				<section id="buduce">
					<span>06</span>

					<h2>Ako uvedemo analitiku ili marketing</h2>

					<p>
						Ako u budućnosti uvedemo analitičke, marketinške
						ili druge alate koji nisu tehnički nužni,
						odgovarajući alati neće se aktivirati prije
						valjane privole korisnika.
					</p>

					<p>
						Prije takve promjene ažurirat ćemo ovu politiku
						i mehanizam upravljanja privolama.
					</p>
				</section>

				<p class="legal-updated">
					Posljednje ažuriranje: 17. listopada 2026.
				</p>

			</article>

		</div>
	</section>

</main>

<?php get_footer(); ?>