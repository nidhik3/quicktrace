<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="signin signup mt-5">
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-7">
				<form action="<?php echo site_url('signup/send_otp'); ?>" method="post">
				<div class="signin-from-wrapper">
					<div class="signin-from-inner">
						<h2 class="title">Signup for Free Demo!</h2>
						<br />
						
							<div class="row">
								<div class="col-sm-12">
									<input type="text" name="first_name" placeholder="Name" class="fname required">
								</div>
								</div>
								
								<div class="row">
								<div class="col-sm-12">
									<input type="text" name="company_name" placeholder="Company Name" class="lname required">
								</div>
								</div>
								<div class="row">
								<div class="col-sm-12">
									<input type="text" name="city_name" placeholder="City Name" class="lname required">
								</div>
								</div>

				

							<div class="row">
								<div class="col-sm-12">
									<input type="email" name="email" placeholder="Email" class="email required">
								</div>

							</div>
							<div class="row">
								<div class="col-sm-12">
									<input name="phone" onkeypress="return isNumber(event)" type="phone" placeholder="Phone Number" class="number required">
								</div>
							</div>


							<div class="row">
								<div class="col-12">
                                  
									<button type="submit" class="pix-btn signup_btn">Sign Up</button>
                                
								</div>
							</div>
						
						<!-- <p>Already have an account? <a href="signin">Sign in</a> now.</p> -->

					</div>
					<ul class="animate-ball">
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
					</ul>
				</div>
				</form>
				
			</div>
		</div>
	</div>
	<div class="signin-banner signup-banner">
		<div class="animate-image-inner">
			<div class="image-one"><img src="media/animated/signup.png" alt="" class="wow pixFadeLeft"></div>
			<div class="image-two"><img src="media/animated/signup2.png" alt="" class="wow pixFadeRight"></div>
		</div>
	</div>
</section>

<script>
	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}

	function getFormData($form) {
		var unindexed_array = $form.serializeArray();
		var indexed_array = {};

		$.map(unindexed_array, function(n, i) {
			indexed_array[n['name']] = n['value'];
		});

		return indexed_array;
	}

	
</script>
