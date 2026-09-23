<?php
/**
 * Politika kolačića.
 * @package ADRIABIT
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<main class="legal-page">
	<section class="legal-hero">
		<div class="legal-shell">
			<p class="legal-eyebrow">KOLAČIĆI</p>
			<h1>Politika<br><span>kolačića.</span></h1>
			<p class="legal-intro">Ova stranica bit će usklađena s kolačićima i vanjskim servisima koje AdriaBit stvarno koristi na produkcijskoj web stranici.</p>
		</div>
	</section>

	<section class="legal-content">
		<div class="legal-shell legal-layout">
			<aside class="legal-nav">
				<p>SADRŽAJ</p>
				<a href="#sto-su">01 — Što su kolačići</a>
				<a href="#vrste">02 — Vrste kolačića</a>
				<a href="#trenutno">03 — Trenutno stanje</a>
				<a href="#upravljanje">04 — Upravljanje</a>
			</aside>

			<article class="legal-article">
				<div class="legal-warning">
					<strong>Radna verzija</strong>
					<p>Nećemo izmišljati Google Analytics, Meta Pixel ili druge servise. Tablicu kolačića završavamo tek kada odlučimo koje servise stvarno ugrađujemo.</p>
				</div>

				<section id="sto-su">
					<span>01</span><h2>Što su kolačići</h2>
					<p>Kolačići su male tekstualne datoteke koje web stranica može spremiti u preglednik korisnika. Mogu služiti različitim funkcijama, uključujući tehničko funkcioniranje stranice, pamćenje postavki ili, kada se koriste odgovarajući servisi, analitiku i marketing.</p>
				</section>

				<section id="vrste">
					<span>02</span><h2>Vrste kolačića</h2>
					<p>Tehnički nužni kolačići koriste se kada su potrebni za funkciju koju korisnik traži. Ostale kategorije mogu uključivati funkcionalne, analitičke i marketinške kolačiće, ovisno o stvarno ugrađenim alatima i njihovoj namjeni.</p>
				</section>

				<section id="trenutno">
					<span>03</span><h2>Koje kolačiće AdriaBit koristi</h2>
					<p>Popis ćemo generirati prema stvarnom produkcijskom setupu. Prije toga ne navodimo servise niti kolačiće koji možda uopće neće biti instalirani.</p>
					<div class="legal-table">
						<div><strong>Naziv</strong><strong>Svrha</strong><strong>Trajanje</strong></div>
						<div><span>Bit će uneseno nakon produkcijskog audita.</span><span>—</span><span>—</span></div>
					</div>
				</section>

				<section id="upravljanje">
					<span>04</span><h2>Upravljanje kolačićima</h2>
					<p>Kada uvedemo sustav privole, korisnik će moći odabrati dopuštene kategorije koje nisu nužne te kasnije promijeniti svoj izbor. Tehnička implementacija mora odgovarati stvarnim skriptama na stranici, a ne samo prikazivati banner.</p>
				</section>

				<p class="legal-updated">Radna verzija dokumenta — završava se zajedno s implementacijom cookie consent sustava.</p>
			</article>
		</div>
	</section>
</main>
<?php get_footer(); ?>
