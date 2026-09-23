(function () {
	"use strict";

	const items = document.querySelectorAll(".ab-service-item");

	items.forEach(function (item) {
		item.addEventListener("click", function (event) {
			event.preventDefault();

			items.forEach(function (current) {
				current.classList.remove("is-active");

				const arrow = current.querySelector(
					".ab-service-item__arrow"
				);

				if (arrow) {
					arrow.remove();
				}
			});

			item.classList.add("is-active");

			if (!item.querySelector(".ab-service-item__arrow")) {
				const arrow = document.createElement("span");

				arrow.className = "ab-service-item__arrow";
				arrow.textContent = "→";

				item.appendChild(arrow);
			}
		});
	});
})();