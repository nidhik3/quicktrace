<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	/* Container styling */
	.c1 {
		/* max-width: 1200px; */
		margin: 0 auto;
		padding: 40px 20px;
		background: linear-gradient(135deg, #f0f9ff 0%, #c2e9fb 100%);
		border-radius: 15px;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
	}

	.featured-two {
		background: linear-gradient(120deg, #f0f4f8, #ffffff);
		padding: 50px 0;
	}

	/* Section title */
	.section-title {
		margin-bottom: 40px;
	}

	.sub-title {
		font-size: 45px;
		color: #1A406D;
		font-weight: bold;
		animation: fadeIn 1.5s ease-in-out;
	}

	/* Sub section titles */
	.sub-section-title {
		font-size: 22px;
		color: #1A406D;
		font-weight: bold;
		margin-top: 40px;
		animation: fadeIn 2s ease-in-out;
	}

	/* Main paragraph content */
	.main-content {
		font-size: 16px;
		color: #333;
		line-height: 1.8;
		animation: fadeInUp 2.5s ease-in-out;
	}

	/* List styling */
	.disc {
		margin-top: 20px;
		margin-bottom: 40px;
		padding-left: 20px;
		list-style-type: disc;
		animation: fadeInUp 3s ease-in-out;
	}

	.disc li {
		margin-bottom: 15px;
		line-height: 1.8;
		font-size: 16px;
	}

	/* Fade-in animation keyframes */
	@keyframes fadeIn {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@keyframes fadeInUp {
		0% {
			opacity: 0;
			transform: translateY(20px);
		}

		100% {
			opacity: 1;
			transform: translateY(0);
		}
	}
</style>


<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">Education</h1>
			<ul class="bradcurmed">
				<li><a href="#" rel="noopener noreferrer">Home</a></li>
				<li>Industries</li>
				<li>Education</li>
			</ul>
		</div>
	</div><svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
		<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt"
			stroke-linejoin="miter" opacity="0.051" fill="none"
			d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
	</svg>
	<ul class="animate-ball">
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
	</ul>
</section>

<section class="featured-two">
	<div class="container c1">
		<div class="section-title text-center">
			<h2 class="sub-title wow pixFadeUp" style="font-size: 45px;">Education</h2>
		</div>
		<h6 class="sub-section-title">Qwik Box-Software</h6>

		<ul class="disc">
			<li>It is a software-based solution supporting multiple applications.</li>
			<li>Type 1 Hypervisor</li>
			<li> Hardware Abstraction for underlying resources.</li>
			<li>
				<p class="mb-3"><b>Application Management: </b></p>
			</li>
			<ul style="list-style: decimal-leading-zero;">
				<li>Create</li>
				<li>Delete</li>
				<li>Start/Stop</li>
				<li>Pause/Resume</li>
			</ul>
			<li>Management Interface : Provides a management interface for administrators
				to configure, monitor, and manage application and host resources.</li>
			<li class="mb-3">Web-based console and API for automation and integration with management
				tools.</li>
			<li>Supporting operating systems, including Linux, Windows,BSD,Fortios,etc.</li>

		</ul>

		<!-- Second Offer -->
		<h6 class="sub-section-title  text-center">Qwik Box – Empowering Education Networks
		</h6>
		<p class="mb-3 text-center"><b>An Application-Driven Solution for Seamless Learning.</b></p>
		<ul>
			<li>
				<div class="row d-flex justify-content-around">
					<!-- <div class="row d-flex justify-content-around" style="border:2px solid rgba(34, 0, 255, 0.466) ;border-radius: 200px;"> -->
					<div class="col-md-3 text-center">
						<img src="assets/image/empowering1.png" alt="">
						<p>Accelerate Digital Education</p>
					</div>
					<div class="col-md-3 text-center">
						<img src="assets/image/empowering2.png" alt="">
						<p>Reduce Costs</p>
					</div>
					<div class="col-md-3 text-center">
						<img src="assets/image/empowering3.png" alt="">
						<p>Ensure Continuous Exams</p>
					</div>
				</div>
			</li>
		</ul>

		<!-- Third Offer -->
		<h6 class="sub-section-title">Challenges Faced by Educators: </h6>
		<div class="row d-flex">
			<div class="col-md-6">
				<ul class="disc">
					<li> Poor Classroom experience.</li>
					<li> Complex to operate </li>
					<li>Very high cost </li>
					<li>Internet connectivity issues</li>
					<li>Bandwidth limitations</li>
					<li>Packet loss and latency </li>
					<li>Content upload problems</li>
					<li>Video and audio quality issues</li>

				</ul>
			</div>
			<div class="col-md-5 d-flex align-items-center">
				<img src="assets/image/challenges.png" alt="">
			</div>
		</div>
		<ul class="disc">
			<p><b>Qwik Box Solution</b></p>
			<li>
				Qwik Box offers a comprehensive, on-premises & cloud based solution that overcomes these challenges
			</li>
		</ul>

	
		<!-- -------- -->
		<h6 class="sub-section-title">Key Features </h6>

		<ul class="disc">
			<li><b>Application-Driven Networking:</b> Prioritizes critical educational applications.
			</li>
			<li><b>On-Premises Deployment:</b> No reliance on external internet.</li>
			<li><b>Integrated Services:</b> Delivers LMS and other essential tools.</li>
			<li><b>Qwik Connect SD-WAN:</b> Connects campuses efficiently</li>
			<li><b>Reliable Connectivity:</b> Ensures consistent network performance.</li>
			<li><b>Optimized Bandwidth:</b> Prioritizes educational applications.</li>
			<li><b>Reduced Latency:</b> Minimizes delays for real-time interactions.</li>
			<li><b>Improved Content Delivery:</b> Ensures smooth video and audio streaming.</li>
			<li><b>Enhanced User Experience:</b> Provides a seamless learning environment.</li>
			<li>Zero-touch provisioning in minutes, not days</li>
			<li>Complete visibility from single pane of glass</li>


		</ul>


		<section class="pb-5">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-3 text-center">
						<img src="assets/img/sdwan1.png" alt="" style="height:200px;">
					</div>
					<div class="col-md-3 text-center">
						<img src="assets/img/sdwan2.png" alt="" style="height:200px;">
					</div>

				</div>
			</div>
		</section>

	</div>
</section>