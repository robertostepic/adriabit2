(() => {
	'use strict';

	const root = document.querySelector('[data-cookie-consent]');

	if (!root) {
		return;
	}

	const STORAGE_KEY = 'adriabit_cookie_notice_v1';

	const reopen = document.querySelector('[data-cookie-reopen]');

	const dismissButtons = root.querySelectorAll(
		'[data-cookie-dismiss]'
	);

	const hasAcknowledged = () => {
		try {
			return localStorage.getItem(STORAGE_KEY) === '1';
		} catch (_) {
			return false;
		}
	};

	const show = () => {
		root.removeAttribute('hidden');

		document.documentElement.classList.add(
			'cookie-consent-open'
		);
	};

	const hide = () => {
		root.setAttribute('hidden', '');

		document.documentElement.classList.remove(
			'cookie-consent-open'
		);
	};

	const acknowledge = () => {
		try {
			localStorage.setItem(
				STORAGE_KEY,
				'1'
			);
		} catch (_) {
			// Local storage may be unavailable.
		}

		hide();
	};

	dismissButtons.forEach((button) => {
		button.addEventListener(
			'click',
			acknowledge
		);
	});

	reopen?.addEventListener(
		'click',
		show
	);

	if (!hasAcknowledged()) {
		show();
	}
})();