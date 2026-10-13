<?php
/**
 * Politika kolačića.
 * @package ADRIABIT
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<main id="main-content" class="legal-page">
	<section class="legal-hero">
		<div class="legal-shell">
			<p class="legal-eyebrow">KOLAČIĆI</p>
			<h1>Politika<br><span>kolačića.</span></h1>
			<p class="legal-intro">Ovdje objašnjavamo kako AdriaBit koristi kolačiće i kako možete upravljati svojim odabirom.</p>
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
					<strong>Napomena</strong>
					<p>Na stranici ne navodimo analitičke ili marketinške servise koji nisu stvarno uključeni. Popis se ažurira kada se uvede novi servis koji koristi kolačiće ili slične tehnologije.</p>
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
					<p>AdriaBit trenutno koristi sustav za upravljanje privolom koji pamti vaš odabir u pregledniku. Analitički i marketinški servisi ne trebaju se navoditi kao aktivni dok ih stvarno ne uključimo.</p>
					<div class="legal-table">
						<div><strong>Naziv</strong><strong>Svrha</strong><strong>Trajanje</strong></div>
						<div><span>adriabit_cookie_consent_v1</span><span>Pamti odabir postavki kolačića u pregledniku.</span><span>Do brisanja podataka preglednika ili promjene postavki.</span></div>
					</div>
				</section>

				<section id="upravljanje">
					<span>04</span><h2>Upravljanje kolačićima</h2>
					<p>Pri prvom posjetu možete prihvatiti sve opcionalne kategorije, odbiti ih ili otvoriti postavke i odabrati pojedine kategorije. Svoj odabir možete kasnije ponovno otvoriti putem gumba „Postavke kolačića”.</p>
				</section>

				<p class="legal-updated">Politika se ažurira kada se promijene kolačići ili vanjski servisi koje stranica stvarno koristi.</p>
			</article>
		</div>
	</section>
</main>
<?php get_footer(); ?>
