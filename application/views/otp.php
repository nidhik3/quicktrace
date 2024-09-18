<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	.passcode-wrapper {
		display: flex;
		justify-content: space-between;
		width: auto;
		margin: 0 auto;
	}

	.passcode-wrapper input {
		margin-right: 10px;
		text-align: center;
		font-size: 24px;
	}

	.passcode-wrapper input:last-child {
		margin-right: 0;
	}

	.passcode-wrapper input::-webkit-inner-spin-button,
	.passcode-wrapper input::-webkit-outer-spin-button {
		-webkit-appearance: none;
		appearance: none;
		margin: 0;
	}

	.passcode-wrapper input:focus,
	.passcode-wrapper input.focus {
		border-color: green;
		outline: none;
		box-shadow: none;
	}
</style>
<section class="signin signup">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="signin-from-wrapper">
					<div class="signin-from-inner">
						<h2 class="title">Please verify your mobile number</h2>
						<?php echo $otp; ?>
						<p>We have sent a 4-Digit OTP on <font class="otp_number"><?php echo $phone; ?></font></p>

						<section class="container-fluid">
							<div class="row">
								<div class="col-md-8">
									<div style="margin-left: -15px;" class="form-group">
										<label for="password" class="text-white">Enter 4 Digit Password</label>
										<div class="passcode-wrapper">
											<input id="codeBox1" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)">
											<input id="codeBox2" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)">
											<input id="codeBox3" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)">
											<input id="codeBox4" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)">
										</div>
									</div>
								</div>
							</div>
						</section>

						<button class="pix-btn verify-otp1">Verify</button>
					</div>
					<ul class="animate-ball">
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="signin-banner signup-banner">
		<div class="animate-image-inner">
			<div class="image-one"><img src="media/animated/Mobile-cuate.png" alt="" class="wow pixFadeLeft"></div>
		</div>
	</div>
</section>

<script>
	  var storedOtp = "<?php echo $otp; ?>";
	$(document).ready(function() {
		$(".verify-otp1").click(function() {
			let otp = '';

			$(".codebox").each(function() {
				otp += $(this).val();
			});

			if (otp.length === 4) {
				let data = $.trim(otp);
				console.log(data);

				
						if (otp === storedOtp) {
							alert("Correct OTP");
							window.location = "come"; // Redirect to a success page
						} else {
							alert("Incorrect OTP");
							window.location = "otp"; // Redirect back to the OTP input form
						}
					
			
			} else {
				alert("Please enter all 4 digits of the OTP.");
			}
		});
	})

	function getCodeBoxElement(index) {
		return document.getElementById('codeBox' + index);
	}

	function onKeyUpEvent(index, event) {
		const eventCode = event.which || event.keyCode;
		const currentBox = getCodeBoxElement(index);

		if (currentBox.value.length === 1) {
			if (index < 4) {
				getCodeBoxElement(index + 1).focus();
			} else {
				currentBox.blur();
				console.log('submit code');
			}
		} else if (eventCode === 8 && index > 1) {
			getCodeBoxElement(index - 1).focus();
		}
	}

	function onFocusEvent(index) {
		for (let item = 1; item < index; item++) {
			const currentElement = getCodeBoxElement(item);
			if (!currentElement.value) {
				currentElement.focus();
				break;
			}
		}
	}
</script>
