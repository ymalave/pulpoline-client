
	<footer id="footer"><!--Footer-->
	</footer>
		
	

  
    <script src="<?= ASSETS?>js/jquery.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
		const items = document.querySelectorAll("[data-carousel-item]");
		const indicators = document.querySelectorAll("[data-carousel-slide-to]");
		let currentIndex = 0;

		function showItem(index) {
			items.forEach((item, i) => {
				item.classList.toggle("hidden", i !== index);
			});
			indicators.forEach((indicator, i) => {
				indicator.setAttribute("aria-current", i === index ? "true" : "false");
			});
		}

		function nextItem() {
			currentIndex = (currentIndex + 1) % items.length;
			showItem(currentIndex);
		}

		function prevItem() {
			currentIndex = (currentIndex - 1 + items.length) % items.length;
			showItem(currentIndex);
		}

		// Event listeners for next and previous buttons
		document.querySelector("[data-carousel-next]").addEventListener("click", nextItem);
		document.querySelector("[data-carousel-prev]").addEventListener("click", prevItem);

		// Event listeners for indicators
		indicators.forEach((indicator, index) => {
			indicator.addEventListener("click", () => {
				currentIndex = index;
				showItem(currentIndex);
			});
		});

		// Show the first item initially
		showItem(currentIndex);
	});
	</script>
</body>
</html>