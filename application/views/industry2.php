<div?php
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

		.img-ar li {
			margin-top: 10px;
			margin-bottom: 10px;
			padding-left: 20px;
			list-style-type: none;
			animation: fadeInUp 3s ease-in-out;
		}

		.img-ar li img {
			height: 35px;
			padding-right: 10px;
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
				<h1 class="page-title">Incubators</h1>
				<ul class="bradcurmed">
					<li><a href="#" rel="noopener noreferrer">Home</a></li>
					<li>Industries</li>
					<li>Incubators</li>
				</ul>
			</div>
		</div><svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
			<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
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
		<div class="container">
			<div class="section-title text-center">
				<h2 class="sub-title wow pixFadeUp" style="visibility: visible; animation-name: i;font-size:45px;">Incubators</h2>

				<!-- <p>Qwiktrace partners with Incubators and provides Infrastructure services on monthly subscription model.</p> -->
			</div>


			<h6 class="sub-section-title">Problem Statement</h6>
		<div class="row d-flex">
			<div class="col-md-7">
				<p>Organizations face high operational costs and inefficiency due to managing multiple vendors and
					diverse
					hardware/software components without a unified management platform.
				</p>
				<ul class="disc">
					<li>Complexity in managing multiple vendors.</li>
					<li>Diverse hardware and software components.</li>
					<li>Lack of a unified management platform.</li>
					<li>Inefficiency in overseeing all devices. </li>
					<li>Increased operational costs.</li>
					<li>Need for a streamlined management process.</li>
					<li>Requirement for a comprehensive dashboard for efficient device management.
					</li>
			</div>

			<div class="col-md-5">
				<img src="assets/image/problem-statement.png" alt="">
			</div>

			</ul>
		</div>
		
		<h6 class="sub-section-title">Solution- <span style="color: rgb(81, 81, 81);">Our Approach</span></h6>
		<div class="row d-flex">
			<div class="col-md-7">
				<p>Introducing the All-in-One Qwik Box Solution</p>
				<ul class="disc">
					<li>With our All-in-One Qwik Box Solution, device management has never been easier. Open the box, and step into a simpler, more efficient world.
					</li>
					<li><b>Single Management Console:</b> Manage all devices from one place.
					</li>
					<li><b>Unified Hardware:</b> Use a single piece of hardware for device management.
					</li>
					<li><b>Simplified Dashboard:</b> Easily monitor and control devices through a streamlined dashboard.
					</li>
					<li><b>Cloud & On-Premises Compatibility:</b> Seamlessly manage devices in both environments.
					</li>
					<li><b>Increased Efficiency:</b> Reduce complexity & cost & improving device management efficiency.
					</li>
			</div>

			<div class="col-md-5">
				<img src="assets/image/solution.png" alt="">
			</div>

			</ul>
		</div>
		


			<h5 class="sub-section-title">Qwik Virt - Empowering Incubator, Empowering Innovation</h5>
			<p>Qwik Trace's partnership with incubators offers a cost-effective, scalable, and managed infrastructure solution that empowers incubators to better support their startups and foster innovation.
			</p>

			<h5>Qwik Virt Benefits</h5>
			<ul class="disc">
				<li>Cost-Effective: Eliminate expensive cloud subscriptions, freeing up funds for other incubator initiatives.
				</li>
				<li>Enhanced Control and Security: Maintain full control over data and resources, ensuring compliance and minimizing security risks.
				</li>
				<li>Local Entrepreneurship Boost: Empower local startups with affordable infrastructure, fostering innovation.
				</li>
				<li>Superior Performance: Benefit from low-latency connectivity for real-time applications, ensuring faster response times.
				</li>
				<li>Robust Security: Implement enhanced security measures like physical access controls and network isolation to protect data.
				</li>
				<li>Dedicated Support: Receive local technical support and maintenance for faster response times and personalized assistance.
				</li>
				<li>Hardware Startup Advantage: Provide a hands-on experience for hardware startups within the incubator.</li>
			</ul>

			<h5>Qwik Virt - Benefits for Startups</h5>
			<div class="row">
				<div class="col-md-5">
					<ul class="disc">
						<li>Access to essential infrastructure resources.
						</li>
						<li>Reduced startup costs.
						</li>
						<li>Improved performance and reliability.
						</li>
						<li>Scalability to accommodate growth.
						</li>
						<li>Less dependencies on cloud service provider
						</li>
						<li>Easy to setup & maintain there own infra
						</li>

					</ul>

				</div>
				<div class="col-md-6 d-flex align-items-center">
					<img src="assets/image/incubator.png" alt="">
				</div>
			</div>


			<style>
				.container {
					width: 100%;
					/* Adjust the width as per the container's width */
					margin: 0 auto;
				}

				table {
					width: 100%;
					border-collapse: collapse;
					font-family: 'Segoe UI', sans-serif;
					background-color: #ffffff;
					/* Clean white background */
					border-radius: 8px;
					overflow: hidden;
					box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
					/* Light shadow for subtle depth */
				}

				th,
				td {
					padding: 12px 16px;
					text-align: left;
					color: #333;

				}

				th {
					background-color: #37a693c7;
					;
					color: white;
					font-weight: bold;
					text-transform: uppercase;
					letter-spacing: 0.05em;
				}

				tr:nth-child(odd) {
					background-color: #dce6f1;
					color: #333;
					/* Dark text for contrast */
				}

				tr:nth-child(even) {
					background-color: #e9f0f8;
					/* Lighter blue for even rows */
					color: #333;
					/* Consistent text color */
				}
			</style>
			<table>
				<tr>
					<th>Sl no.</th>
					<th>Description</th>
					<th>Responsibility of QT</th>
					<th>Responsibility of Incubators</th>
					<th>Remarks</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>Space for installing the hardware</td>
					<td></td>
					<td>Incubator</td>
					<td></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Providing internet connectivity</td>
					<td></td>
					<td>Incubator</td>
					<td></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Purchase of HW namely rack, switch and server</td>
					<td>QT</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Installation and commissioning of HW</td>
					<td>QT</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Support and maintained of the platform</td>
					<td>QT</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Onboarding of Startups</td>
					<td></td>
					<td>Incubators</td>
					<td></td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Providing training to Startups for the virtual machines</td>
					<td>QT</td>
					<td></td>
					<td>Minimum of 5 virtual machines per statrup</td>
				</tr>
			</table>

			<h5 class="pt-5">Mini Computation Module: </h5>
			<ul class="disc">
				<li>Hardware components: 1 rack, 2 servers, 2 switches.</li>
				<li>Capacity: Supports a minimum of 3 startups with 5 virtual machines each.</li>
			</ul>

			<h5>Software Applications: </h5>
			<ul class="disc">
				<li>Operating systems: Windows and Linux.</li>
				<li>Database management systems.</li>
				<li>Network security solutions (firewalls). </li>
			</ul>


		</div>

	</section>