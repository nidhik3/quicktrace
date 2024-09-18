<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">ISP's</h1>
			<ul class="bradcurmed">
				<li><a href="#" rel="noopener noreferrer">Home</a></li>
				<li>Industries</li>
				<li>ISP's</li>
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


<section class="featured-two">
	<div class="container c1">
		<div class="section-title text-center">
			<h2 class="sub-title wow pixFadeUp" style="visibility: visible; animation-name: i;font-size:45px;">ISP's
			</h2>

			<p>A framework to deploy – ISP in a Box, ICTaaS and Secure SD-WAN </p>
		</div>

		<h5>Virtualized Network Functions</h5>
		<ul class="disc">
			<li> Enhance cost and operational efficiency with virtualized network solutions.</li>
			<li> Scalable Solutions : Meet increasing demand with flexible deployment options xxxxxand dynamic resource
				allocation.</li>
		</ul>
		<h5>Components</h5>
		<ul class="disc">
			<li> vBRAS : Manages PPPoE and IPoE sessions, integrates with RADIUS servers.</li>
			<li> vDHCP : Dynamically assigns IP addresses, manages leases.</li>
			<li>vDNS : Domain name resolution, DNS caching, DNSSEC support.</li>
			<li>vAAA : Authentication, authorization, accounting for user management.</li>
		</ul>
		<h5>Virtualized Network Functions</h5>
		<ul class="disc">
			<li> Cost Efficiency : Lower CAPEX and OPEX through Qwik Virt.</li>
			<li> Scalability : Elastic resource allocation to handle peak loads.</li>
			<li>Enhanced User Experience : Reduced latency and faster response times.</li>
			<li>Security : Built-in security features like firewalls and encryption.</li>
		</ul>

		<!-- <div class="row d-flex justify-content-center">
			<div class="col-md-4 text-center">
				<img src="assets/img/isps.png" alt="">
			</div>
		</div> -->

		<div class="mt-5 mb-5 mission">
			<div class="row d-flex justify-content-center">
				<div class="col-md-10">
					<img src="assets/img/qwik1.png">
				</div>
			</div>

		</div>


		<section>
			<div class="container">
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
						<td>Cost Efficiency</td>
						<td>
							<ul class="disc">
								<li>Reduced Capital Expenditure (CAPEX): Leveraging open-source VNFs significantly
									lowers initial investment costs.</li>
								<li>Reduced Operational Expenditure (OPEX): Qwik Virt reduces the need for physical
									hardware, leading to lower maintenance and power costs.</li>
								<li>Pay-as-you-grow Model: Ability to scale resources as needed without upfront
									over-provisioning.</li>
							</ul>

						</td>
					</tr>
					<tr>
						<td>Scalability</td>
						<td>
							<ul class="disc">
								<li>Elastic Scalability: Easily scale up or down based on demand without significant
									delays or investments.</li>
								<li>Dynamic Resource Allocation: VNFs can be dynamically allocated to handle peak loads
									and optimized during off-peak times</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Flexibility</td>
						<td>
							<ul class="disc">
								<li>Rapid Deployment: New services and updates can be deployed Qwikly and efficiently
									without hardware dependencies.</li>
								<li>Customizable Solutions: Ability to tailor services to specific needs of the ISP and
									its customers.</li>
								<li>Multi-Tenancy: Supports multiple customers on the same infrastructure with isolated
									and secure environments.</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td>Enhanced User Experience</td>
						<td>
							<ul class="disc">
								<li>Improved Performance: Reduced latency and faster response times due to edge
									processing.</li>
								<li>Reliability and Uptime: High availability and redundancy features ensure consistent
									service delivery.</li>
								<li>Quality of Service (QoS): Enhanced traffic management and QoS policies ensure
									optimal user experience</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Enhanced Security</td>
						<td>
							<ul class="disc">
								<li>Integrated Security Features: Built-in security mechanisms such as firewalling.</li>
								<li>Regular Updates and Patches: Easier to keep the system updated with the latest
									security patches and features.</li>
								<li>Compliance: Ensures adherence to regulatory requirements and standards</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Network Management</td>
						<td>
							<ul class="disc">
								<li>Centralized Orchestration: Single pane of glass for managing, monitoring, and
									orchestrating all network functions.</li>
								<li>Automation: Automates routine tasks such as provisioning, scaling, and updates,
									reducing manual intervention and errors.</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Management</td>
						<td>
							<ul class="disc">
								<li>Edge Optimisation: Fine tuned for low latency and high performance.</li>
								<li>Lifecycle Automation: Deploys , Scales , Updates and decommission VM's
									automatically.</li>
								<li>Service Performance : Monitors VM performance and health.</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Inbuilt Qwik Connect Controller</td>
						<td>
							<ul class="disc">
								<li>Centralized Control: Manages WAN connection from a single interface.</li>
								<li>Dynamic Path Solutions: Optimizes paths in real-time.</li>
								<li>Enhanced Security: Provides end-to-end encryption and secure transmission.</li>
								<li>Traffic Managemnt: Prioritizes critical applications and manages bandwidth.</li>
								<li>Policy Enforcement: Consistent policy implementation across locations.</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td>Additional Features</td>
						<td>
							<ul class="disc">
								<li>Real-time Analytics: Insights into network performance.</li>
								<li>Proactive Alerts:Automated issues detection.</li>
								<li>Scalability: Supports growing netwoek demands.</li>
								<li>Interoperability: Compitable with various VM;s , VNF;s and equipments.</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Benefits</td>
						<td>
							<ul class="disc">
								<li>Operational Efficiency: Simplifies management reduces complexities. </li>
								<li>Improved Performance: Optimizes resources reduces latency.</li>
								<li>Enhanced Security: Ensure Secure Operations</li>
								<li>Costs Savings : Reduces physical infrastructure needs lowers costs</li>
							</ul>
						</td>
					</tr>
				</table>

			</div>
		</section>
		<div class="mt-5 mb-5 mission">
			<div class="row d-flex justify-content-center">
				<div class="col-md-10">
					<img src="assets/img/qwik2.png">
				</div>
			</div>
		</div>

	</div>
</section>