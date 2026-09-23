(function () {
	"use strict";

	const hero = document.querySelector("[data-hero]");

	if (!hero) {
		return;
	}

	const copy = hero.querySelector(".ab-hero__copy");
	const visual = hero.querySelector("[data-hero-visual]");
	const laptop = hero.querySelector("[data-laptop]");
	const dots = hero.querySelector(".ab-hero__dots");
	const ribbon = hero.querySelector(".ab-hero__ribbon");
	const glow = hero.querySelector(".ab-hero__glow");

	const statusCard = hero.querySelector("[data-status-card]");
	const signature = hero.querySelector(".ab-signature");
	const scrollCue = hero.querySelector(".ab-scroll");

	const portalSteps = hero.querySelectorAll(
		".ab-project-steps > div"
	);

	const reducedMotion = window.matchMedia(
		"(prefers-reduced-motion: reduce)"
	).matches;


	/* =====================================================
	   PORTAL ENTRANCE
	   ===================================================== */

	if (!reducedMotion) {

		portalSteps.forEach(function (step, index) {

			step.style.opacity = "0";
			step.style.transform = "translateY(8px)";

			window.setTimeout(function () {

				step.style.transition =
					"opacity 450ms ease, " +
					"transform 550ms cubic-bezier(.16, 1, .3, 1)";

				step.style.opacity = "1";
				step.style.transform = "translateY(0)";

			}, 700 + index * 100);

		});

	}


	/* =====================================================
	   GSAP
	   ===================================================== */

	if (
		reducedMotion ||
		typeof window.gsap === "undefined" ||
		typeof window.ScrollTrigger === "undefined"
	) {
		return;
	}

	const gsap = window.gsap;
	const ScrollTrigger = window.ScrollTrigger;

	gsap.registerPlugin(ScrollTrigger);


	/* =====================================================
	   HERO SCROLL
	   
	   ONE continuous transition.
	   NO pin.
	   NO pause.
	   NO separate phases.
	   ===================================================== */

	const heroTimeline = gsap.timeline({
		scrollTrigger: {
			trigger: hero,

			/*
			 * Animation begins immediately when scrolling.
			 */
			start: "top top",

			/*
			 * Widened from 260px: at that distance, a single
			 * trackpad flick covers the whole range in one
			 * jump, so the parallax "snapped" instead of
			 * playing out. 500px gives it room to read as a
			 * transition during normal scroll speeds.
			 */
			end: "+=500",

			/*
			 * Slightly higher smoothing to match the longer
			 * range. Page itself still never stops scrolling.
			 */
			scrub: 0.5,

			invalidateOnRefresh: true,

			/*
			 * Hand transform/opacity on the ambient glow +
			 * ribbon elements fully over to GSAP while
			 * scrubbing, so the CSS keyframe loop isn't
			 * writing to the same properties at the same time.
			 */
			onEnter: function () {
				hero.classList.add("is-scrubbing");
			},
			onLeave: function () {
				hero.classList.remove("is-scrubbing");
			},
			onEnterBack: function () {
				hero.classList.add("is-scrubbing");
			},
			onLeaveBack: function () {
				hero.classList.remove("is-scrubbing");
			}
		}
	});


	/* LEFT CONTENT */

	if (copy) {

		heroTimeline.to(
			copy,
			{
				y: -30,
				x: -18,
				scale: 0.975,

				/*
				 * Do not completely remove the text.
				 */
				opacity: 0.28,

				ease: "none"
			},
			0
		);

	}


	/* LAPTOP AREA */

	if (visual) {

		heroTimeline.to(
			visual,
			{
				xPercent: -7,
				yPercent: 1,
				scale: 1.075,
				ease: "none"
			},
			0
		);

	}


	if (laptop) {

		heroTimeline.to(
			laptop,
			{
				rotationZ: 0,
				rotationY: 0,
				rotationX: 0,
				scale: 1.015,
				ease: "none"
			},
			0
		);

	}


	/* STATUS CARD */

	if (statusCard) {

		heroTimeline.to(
			statusCard,
			{
				x: 20,
				y: -12,
				opacity: 0.45,
				ease: "none"
			},
			0
		);

	}


	/* SIGNATURE */

	if (signature) {

		heroTimeline.to(
			signature,
			{
				y: 15,
				opacity: 0.35,
				ease: "none"
			},
			0
		);

	}


	/* SCROLL INDICATOR */

	if (scrollCue) {

		heroTimeline.to(
			scrollCue,
			{
				y: 12,
				opacity: 0,
				ease: "none"
			},
			0
		);

	}


	/* BACKGROUND */

	if (dots) {

		heroTimeline.to(
			dots,
			{
				xPercent: -3,
				yPercent: -2,
				scale: 1.04,
				opacity: 0.30,
				ease: "none"
			},
			0
		);

	}


	if (ribbon) {

		heroTimeline.to(
			ribbon,
			{
				xPercent: -5,
				yPercent: -3,
				scale: 1.07,
				opacity: 0.44,
				ease: "none"
			},
			0
		);

	}


	if (glow) {

		heroTimeline.to(
			glow,
			{
				scale: 1.08,
				opacity: 0.30,
				ease: "none"
			},
			0
		);

	}


	/* =====================================================
	   SERVICES
	   ===================================================== */

	const services = document.querySelector(".ab-services");

	if (services) {

		const title = services.querySelector(
			".ab-services__headline"
		);

		const stats = services.querySelectorAll(
			".ab-stats > div"
		);

		const description = services.querySelector(
			".ab-services__description"
		);

		const items = services.querySelectorAll(
			".ab-service-item"
		);


		if (title) {

			gsap.fromTo(
				title,
				{
					y: 28,
					opacity: 0
				},
				{
					y: 0,
					opacity: 1,
					duration: 0.65,
					ease: "power2.out",

					scrollTrigger: {
						trigger: title,
						start: "top 90%",
						once: true
					}
				}
			);

		}


		if (stats.length) {

			gsap.fromTo(
				stats,
				{
					y: 20,
					opacity: 0
				},
				{
					y: 0,
					opacity: 1,
					duration: 0.55,
					stagger: 0.06,
					ease: "power2.out",

					scrollTrigger: {
						trigger: stats[0],
						start: "top 92%",
						once: true
					}
				}
			);

		}


		if (description) {

			gsap.fromTo(
				description,
				{
					y: 20,
					opacity: 0
				},
				{
					y: 0,
					opacity: 1,
					duration: 0.55,
					ease: "power2.out",

					scrollTrigger: {
						trigger: description,
						start: "top 92%",
						once: true
					}
				}
			);

		}


		if (items.length) {

			gsap.fromTo(
				items,
				{
					y: 20,
					opacity: 0
				},
				{
					y: 0,
					opacity: 1,
					duration: 0.55,
					stagger: 0.05,
					ease: "power2.out",

					scrollTrigger: {
						trigger: items[0],
						start: "top 92%",
						once: true
					}
				}
			);

		}

	}


	/* =====================================================
	   PROCESS
	   ===================================================== */

	const processSection = document.querySelector(".ab-process");

	if (processSection) {

		const processElements = [
			processSection.querySelector(".ab-process__title"),
			processSection.querySelector(".ab-process__copy"),
			processSection.querySelector(".ab-process__graphic")
		].filter(Boolean);

		if (processElements.length) {

			gsap.fromTo(
				processElements,
				{
					y: 24,
					opacity: 0
				},
				{
					y: 0,
					opacity: 1,
					duration: 0.65,
					stagger: 0.08,
					ease: "power2.out",

					scrollTrigger: {
						trigger: processSection,
						start: "top 84%",
						once: true
					}
				}
			);

		}

	}


	/* =====================================================
	   REFRESH
	   ===================================================== */

	window.addEventListener("load", function () {
		ScrollTrigger.refresh();
	});

})();