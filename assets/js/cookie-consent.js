(() => {
	'use strict';

	const root = document.querySelector('[data-cookie-consent]');
	if (!root) return;

	const STORAGE_KEY = 'adriabit_cookie_consent_v1';
	const first = root.querySelector('[data-cookie-first]');
	const settings = root.querySelector('[data-cookie-settings-panel]');
	const analytics = root.querySelector('[data-cookie-category="analytics"]');
	const marketing = root.querySelector('[data-cookie-category="marketing"]');
	const reopen = document.querySelector('[data-cookie-reopen]');

	const read = () => {
		try {
			return JSON.parse(localStorage.getItem(STORAGE_KEY));
		} catch (_) {
			return null;
		}
	};

	const emit = (detail) => {
		window.dispatchEvent(new CustomEvent('adriabit:cookie-consent', { detail }));
	};

	const save = (analyticsAllowed, marketingAllowed) => {
		const value = {
			necessary: true,
			analytics: Boolean(analyticsAllowed),
			marketing: Boolean(marketingAllowed),
			updated: new Date().toISOString()
		};

		localStorage.setItem(STORAGE_KEY, JSON.stringify(value));
		root.setAttribute('hidden', '');
		document.documentElement.classList.remove('cookie-consent-open');
		emit(value);
	};

	const show = () => {
	const current = read();

	analytics.checked = Boolean(current?.analytics);
	marketing.checked = Boolean(current?.marketing);

	first.removeAttribute('hidden');
	settings.setAttribute('hidden', '');

	root.removeAttribute('hidden');

	document.documentElement.classList.add('cookie-consent-open');
};

	const showSettings = () => {
	const current = read();

	analytics.checked = Boolean(current?.analytics);
	marketing.checked = Boolean(current?.marketing);

	first.setAttribute('hidden', '');
	settings.removeAttribute('hidden');

	root.removeAttribute('hidden');

	document.documentElement.classList.add('cookie-consent-open');
};

	root.querySelectorAll('[data-cookie-accept]').forEach(btn => {
		btn.addEventListener('click', () => save(true, true));
	});

	root.querySelectorAll('[data-cookie-reject]').forEach(btn => {
		btn.addEventListener('click', () => save(false, false));
	});

	root.querySelector('[data-cookie-settings]')?.addEventListener('click', showSettings);
	root.querySelector('[data-cookie-save]')?.addEventListener('click', () => save(analytics.checked, marketing.checked));
	reopen?.addEventListener('click', showSettings);

	const current = read();
	if (!current) {
		show();
	} else {
		emit(current);
	}
})();
