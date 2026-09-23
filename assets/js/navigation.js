(function () {
	"use strict";

	const header = document.querySelector("[data-site-header]");
	const toggle = document.querySelector("[data-menu-toggle]");
	const mobileNavigation = document.querySelector(
		"[data-mobile-navigation]"
	);

	if (!header) {
		return;
	}

	let lastScrollY = window.scrollY;
	let ticking = false;
	let headerHidden = false;

	/*
	 * anchorScrollY is the scroll position of the most recent
	 * local direction change (or state change). Hiding/showing
	 * is judged against distance from THIS point, not against
	 * a single event's delta — that's what gives trackpad
	 * momentum scrolling (which reverses by a few px constantly
	 * as it decelerates) room to settle instead of re-triggering
	 * the header transition on every micro-reversal.
	 */
	let anchorScrollY = window.scrollY;

	const hideAfter = 100;
	const directionThreshold = 48;


	function updateHeader() {

		const currentScrollY = window.scrollY;
		const frameDelta = currentScrollY - lastScrollY;

		/*
		 * Background after leaving the very top.
		 */

		header.classList.toggle(
			"is-scrolled",
			currentScrollY > 20
		);


		/*
		 * Always show header at top of page.
		 */

		if (currentScrollY <= hideAfter) {

			header.classList.remove("is-hidden");
			headerHidden = false;
			anchorScrollY = currentScrollY;

			lastScrollY = currentScrollY;
			ticking = false;

			return;
		}


		/*
		 * A reversal (even a tiny one) resets the anchor so we
		 * always measure sustained distance from the most
		 * recent turning point, not from wherever the pointer
		 * happened to be several frames ago.
		 */

		const reversed =
			(frameDelta > 0 && currentScrollY < anchorScrollY) ||
			(frameDelta < 0 && currentScrollY > anchorScrollY);

		if (reversed) {
			anchorScrollY = lastScrollY;
		}

		const distanceFromAnchor = currentScrollY - anchorScrollY;


		/*
		 * Scrolling down:
		 * only hide once the user has committed to a real
		 * downward scroll, not a single noisy frame.
		 */

		if (!headerHidden && distanceFromAnchor > directionThreshold) {

			header.classList.add("is-hidden");
			headerHidden = true;
			anchorScrollY = currentScrollY;

		}


		/*
		 * Scrolling up:
		 * same commitment required before bringing it back.
		 */

		else if (headerHidden && distanceFromAnchor < -directionThreshold) {

			header.classList.remove("is-hidden");
			headerHidden = false;
			anchorScrollY = currentScrollY;

		}


		lastScrollY = currentScrollY;
		ticking = false;
	}


	function requestHeaderUpdate() {

		if (ticking) {
			return;
		}

		ticking = true;

		window.requestAnimationFrame(updateHeader);
	}


	updateHeader();


	window.addEventListener(
		"scroll",
		requestHeaderUpdate,
		{
			passive: true
		}
	);


	/* =====================================================
	   MOBILE MENU
	   ===================================================== */

	if (!toggle || !mobileNavigation) {
		return;
	}


	function closeMenu() {

		toggle.classList.remove("is-active");
		mobileNavigation.classList.remove("is-open");
		document.body.classList.remove("menu-open");

		toggle.setAttribute(
			"aria-expanded",
			"false"
		);

		toggle.setAttribute(
			"aria-label",
			"Otvori izbornik"
		);

	}


	function openMenu() {

		/*
		 * Header must be visible while menu is open.
		 */

		header.classList.remove("is-hidden");

		toggle.classList.add("is-active");
		mobileNavigation.classList.add("is-open");
		document.body.classList.add("menu-open");

		toggle.setAttribute(
			"aria-expanded",
			"true"
		);

		toggle.setAttribute(
			"aria-label",
			"Zatvori izbornik"
		);

	}


	toggle.addEventListener(
		"click",
		function () {

			const isOpen =
				toggle.getAttribute("aria-expanded") === "true";

			if (isOpen) {
				closeMenu();
			} else {
				openMenu();
			}

		}
	);


	mobileNavigation
		.querySelectorAll("a")
		.forEach(function (link) {

			link.addEventListener(
				"click",
				closeMenu
			);

		});


	document.addEventListener(
		"keydown",
		function (event) {

			if (event.key === "Escape") {
				closeMenu();
			}

		}
	);


	window.addEventListener(
		"resize",
		function () {

			if (window.innerWidth > 1180) {
				closeMenu();
			}

		}
	);

})();