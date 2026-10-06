(function () {
	"use strict";

	const header = document.querySelector("[data-site-header]");
	const toggle = document.querySelector("[data-menu-toggle]");
	const mobileNavigation = document.querySelector("[data-mobile-navigation]");

	if (!header) {
		return;
	}

	const isMobileHeader = function () {
		return window.matchMedia("(max-width: 1180px)").matches;
	};

	let lastScrollY = window.scrollY;
	let ticking = false;
	let headerHidden = false;
	let anchorScrollY = window.scrollY;

	const hideAfter = 100;
	const directionThreshold = 48;

	function updateHeader() {
		const currentScrollY = window.scrollY;
		const frameDelta = currentScrollY - lastScrollY;

		header.classList.toggle("is-scrolled", currentScrollY > 20);

		/* On tablet/mobile the header and hamburger stay visible at all times. */
		if (isMobileHeader()) {
			header.classList.remove("is-hidden");
			headerHidden = false;
			anchorScrollY = currentScrollY;
			lastScrollY = currentScrollY;
			ticking = false;
			return;
		}

		if (currentScrollY <= hideAfter) {
			header.classList.remove("is-hidden");
			headerHidden = false;
			anchorScrollY = currentScrollY;
			lastScrollY = currentScrollY;
			ticking = false;
			return;
		}

		const reversed =
			(frameDelta > 0 && currentScrollY < anchorScrollY) ||
			(frameDelta < 0 && currentScrollY > anchorScrollY);

		if (reversed) {
			anchorScrollY = lastScrollY;
		}

		const distanceFromAnchor = currentScrollY - anchorScrollY;

		if (!headerHidden && distanceFromAnchor > directionThreshold) {
			header.classList.add("is-hidden");
			headerHidden = true;
			anchorScrollY = currentScrollY;
		} else if (headerHidden && distanceFromAnchor < -directionThreshold) {
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
	window.addEventListener("scroll", requestHeaderUpdate, { passive: true });

	/* Homepage floating back-to-top button. */
	if (document.querySelector("#pocetna")) {
		const backToTop = document.createElement("button");
		backToTop.className = "back-to-top";
		backToTop.type = "button";
		backToTop.setAttribute("aria-label", "Povratak na vrh");
		backToTop.textContent = "↑";
		document.body.appendChild(backToTop);

		const updateBackToTop = function () {
			backToTop.classList.toggle("is-visible", window.scrollY > 700);
		};

		updateBackToTop();
		window.addEventListener("scroll", updateBackToTop, { passive: true });

		backToTop.addEventListener("click", function () {
			window.scrollTo({
				top: 0,
				behavior: "smooth"
			});
		});
	}

	if (!toggle || !mobileNavigation) {
		return;
	}

	function closeMenu() {
		toggle.classList.remove("is-active");
		mobileNavigation.classList.remove("is-open");
		document.body.classList.remove("menu-open");
		toggle.setAttribute("aria-expanded", "false");
		toggle.setAttribute("aria-label", "Otvori izbornik");
	}

	function openMenu() {
		header.classList.remove("is-hidden");
		toggle.classList.add("is-active");
		mobileNavigation.classList.add("is-open");
		document.body.classList.add("menu-open");
		toggle.setAttribute("aria-expanded", "true");
		toggle.setAttribute("aria-label", "Zatvori izbornik");
	}

	toggle.addEventListener("click", function () {
		const isOpen = toggle.getAttribute("aria-expanded") === "true";
		if (isOpen) {
			closeMenu();
		} else {
			openMenu();
		}
	});

	mobileNavigation.querySelectorAll("a").forEach(function (link) {
		link.addEventListener("click", closeMenu);
	});

	document.addEventListener("keydown", function (event) {
		if (event.key === "Escape") {
			closeMenu();
		}
	});

	window.addEventListener("resize", function () {
		if (window.innerWidth > 1180) {
			closeMenu();
		} else {
			header.classList.remove("is-hidden");
			headerHidden = false;
		}
	});
})();
