<?php
/**
 * Cookie consent UI.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function adriabit_cookie_consent_markup() {
	?>
	<div class="cookie-consent" data-cookie-consent hidden>
		<div class="cookie-consent__panel" role="dialog" aria-modal="true" aria-labelledby="cookie-title">
			<button class="cookie-consent__close" type="button" data-cookie-reject aria-label="Zatvori i odbij opcionalne kolačiće">×</button>

			<div class="cookie-consent__first" data-cookie-first>
				<p class="cookie-consent__eyebrow">PRIVATNOST</p>
				<h2 id="cookie-title">Vaša privatnost, vaš izbor.</h2>
				<p>
					Nužni kolačići omogućuju osnovno funkcioniranje stranice. Ostale kategorije
					aktivirat ćemo samo ako ih dopustite.
					<a href="<?php echo esc_url( home_url( '/politika-kolacica/' ) ); ?>">Saznajte više</a>.
				</p>

				<div class="cookie-consent__actions">
					<button type="button" class="cookie-btn cookie-btn--primary" data-cookie-accept>Prihvati sve</button>
					<button type="button" class="cookie-btn cookie-btn--primary" data-cookie-reject>Odbij sve</button>
					<button type="button" class="cookie-btn cookie-btn--settings" data-cookie-settings>Postavke</button>
				</div>
			</div>

			<div class="cookie-consent__settings" data-cookie-settings-panel hidden>
				<p class="cookie-consent__eyebrow">POSTAVKE KOLAČIĆA</p>
				<h2>Odaberite što dopuštate.</h2>

				<div class="cookie-category">
					<div>
						<strong>Nužni</strong>
						<p>Potrebni za osnovno funkcioniranje stranice.</p>
					</div>
					<span class="cookie-always">Uvijek aktivni</span>
				</div>

				<label class="cookie-category">
					<div>
						<strong>Analitički</strong>
						<p>Pomažu razumjeti korištenje stranice. Aktiviraju se samo uz privolu.</p>
					</div>
					<input type="checkbox" data-cookie-category="analytics">
				</label>

				<label class="cookie-category">
					<div>
						<strong>Marketinški</strong>
						<p>Koriste se za marketinške i oglašivačke alate samo ako ih stvarno uvedemo.</p>
					</div>
					<input type="checkbox" data-cookie-category="marketing">
				</label>

				<div class="cookie-consent__actions cookie-consent__actions--settings">
					<button type="button" class="cookie-btn cookie-btn--primary" data-cookie-save>Spremi odabir</button>
					<button type="button" class="cookie-btn cookie-btn--primary" data-cookie-reject>Odbij sve</button>
					<button type="button" class="cookie-btn cookie-btn--primary" data-cookie-accept>Prihvati sve</button>
				</div>
			</div>
		</div>
	</div>

	<button class="cookie-reopen" type="button" data-cookie-reopen aria-label="Postavke kolačića">
		<span>Postavke kolačića</span>
	</button>
	<?php
}
add_action( 'wp_footer', 'adriabit_cookie_consent_markup', 5 );
