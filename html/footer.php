
			</main> <!-- Main content -->
		</div><!-- Main -->
		<?php include '../assets/icons/icons.svg'; ?>

		<!-- Txt Wav -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/txt.wav/1.0.5/js/txt.wav.min.js"></script>

		<script>
			// inline loadJS
			function loadJS(e,t){"use strict";var n=window.document.getElementsByTagName("script")[0],o=window.document.createElement("script");return o.src=e,o.async=!0,n.parentNode.insertBefore(o,n),t&&"function"==typeof t&&(o.onload=t),o}
			// then load your JS
			if (sessionStorage.getItem('fonts-loaded')) {
				// fonts cached, add class to document
				document.documentElement.classList.remove('fonts-loading');
			} else {
				// load script with font observing logic
				loadJS('../assets/js/vendor_async/fonts-css-async.js');
			}
		</script>
		<script src="../assets/js/scripts.min.js"></script>
	</body>
</html>