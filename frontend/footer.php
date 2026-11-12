<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
	// From https://stackoverflow.com/a/30810322
	function fallbackCopyTextToClipboard(text) {
		var textArea = document.createElement("textarea");
		textArea.value = text;
		
		// Avoid scrolling to bottom
		textArea.style.top = "0";
		textArea.style.left = "0";
		textArea.style.position = "fixed";

		document.body.appendChild(textArea);
		textArea.focus();
		textArea.select();

		try {
			return document.execCommand('copy');
		} catch (err) {
			console.error('Fallback: Oops, unable to copy', err);
			return false;
		} finally {
			document.body.removeChild(textArea);
		}
	}

	function copyTextToClipboard(text) {
		if (!navigator.clipboard) {
			return Promise.resolve(fallbackCopyTextToClipboard(text));
		}
		return navigator.clipboard.writeText(text).then(function() {
			return true;
		}, function(err) {
			console.error('Async: Could not copy text: ', err);
			return false;
		});
	}

	const copyBtn = document.querySelector('button#copy-button');

	if (copyBtn) {
		let copyFeedbackTimeout;
		copyBtn.setAttribute('aria-live', 'polite');
		copyBtn.addEventListener('click', function(event) {
			copyTextToClipboard(event.currentTarget.dataset.shorturl).then(function(success) {
				window.clearTimeout(copyFeedbackTimeout);
				copyBtn.textContent = success ? 'Copied!' : 'Copy failed';
				copyFeedbackTimeout = window.setTimeout(function() {
					copyBtn.textContent = 'Copy';
				}, 2000);
			});
		});
	}

	const closeShortenedLinkScreenButton = document.querySelector('button#close-shortened-screen');

	if (closeShortenedLinkScreenButton) {
		closeShortenedLinkScreenButton.addEventListener('click', function(event) {
			window.location.href=window.location.href;
		});
	}
</script>

<?php if (enableTurnstile) : ?>
	<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<?php endif; ?>

<!-- Google AdSense - truf.us
<ins class="adsbygoogle"
   	style="display:block"
   	data-ad-client="ca-pub-1377801524509737"
   	data-ad-slot="7920962513"
   	data-ad-format="auto"
   	data-full-width-responsive="true">
</ins>
<script>
     	(adsbygoogle = window.adsbygoogle || []).push({});
</script>
-->
