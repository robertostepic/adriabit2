(function () {
	"use strict";

	const reducedMotion = window.matchMedia(
		"(prefers-reduced-motion: reduce)"
	).matches;

	const targets = document.querySelectorAll(
		".ab-services__headline, " +
		".ab-stats, " +
		".ab-services__description, " +
		".ab-service-nav, " +
		".ab-process__title, " +
		".ab-process__copy, " +
		".ab-process__graphic"
	);

	if (!targets.length) {
		return;
	}

	if (reducedMotion || !("IntersectionObserver" in window)) {
		targets.forEach(function (target) {
			target.classList.add("is-visible");
		});

		return;
	}

	const observer = new IntersectionObserver(
		function (entries) {
			entries.forEach(function (entry) {
				if (!entry.isIntersecting) {
					return;
				}

				entry.target.classList.add("is-visible");
				observer.unobserve(entry.target);
			});
		},
		{
			threshold: 0.16,
			rootMargin: "0px 0px -8% 0px"
		}
	);

	targets.forEach(function (target) {
		observer.observe(target);
	});
})();