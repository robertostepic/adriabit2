<?php
/**
 * Cookie notice UI.
 *
 * @package ADRIABIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function adriabit_cookie_consent_markup() {
	?>

	<div
		class="cookie-consent"
		data-cookie-consent
		hidden
	>

		<div
			class="cookie-consent__panel"
			role="dialog"
			aria-modal="true"
			aria-labelledby="cookie-title"
		>

			<button
				class="cookie-consent__close"
				type="button"
				data-cookie-dismiss
				aria-label="Zatvori obavijest o kolačićima"
			>
				×
			</button>

			<div class="cookie-consent__first">

				<p class="cookie-consent__eyebrow">
					KOLAČIĆI
				</p>

				<h2 id="cookie-title">
					Kolačići na ovoj stranici.
				</h2>

				<p>
					Trenutno ne koristimo analitičke ni marketinške
					kolačiće.

					Koristimo samo tehničke postavke potrebne za
					funkcioniranje stranice i lokalnu pohranu kojom
					pamtimo da ste pročitali ovu obavijest.

					<a href="<?php echo esc_url( home_url( '/politika-kolacica/' ) ); ?>">
						Politika kolačića
					</a>.
				</p>

				<div class="cookie-consent__actions">

					<button
						type="button"
						class="cookie-btn cookie-btn--primary"
						data-cookie-dismiss
					>
						U redu
					</button>

				</div>

			</div>

		</div>

	</div>

	<button
		class="cookie-reopen"
		type="button"
		data-cookie-reopen
		aria-label="Informacije o kolačićima"
	>
		<span>Kolačići</span>
	</button>

	<?php
}

add_action(
	'wp_footer',
	'adriabit_cookie_consent_markup',
	5
);