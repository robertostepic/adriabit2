(function () {
	"use strict";

	document.documentElement.classList.add("js");

	function startPage() {
		/*
		 * Browser prvo mora nacrtati početno stanje.
		 * Tek nakon dva framea aktiviramo entrance animacije.
		 */
		requestAnimationFrame(function () {
			requestAnimationFrame(function () {
				document.body.classList.add("is-loaded");
			});
		});
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", startPage);
	} else {
		startPage();
	}
})();