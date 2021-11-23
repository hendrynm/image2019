<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="form-group">
	<div class="g-recaptcha"
		 data-sitekey="6LeQDkoaAAAAALl7UononAxSfcJE3250ToFETRCq" data-callback="removeFakeCaptcha"></div>
	<input type="checkbox" class="captcha-fake-field" tabindex="-1" required
		   style="visibility: hidden">
</div>

<script>
	window.removeFakeCaptcha = function() {
		document.querySelector('.captcha-fake-field').remove();
	}
</script>
