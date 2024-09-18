<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>

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

.section-title h2 {
    font-size: 50px;
    color: #1A406D;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    animation: fadeInDown 1s ease-in-out;
}

.intro-text, .highlight {
    font-size: 18px;
    line-height: 1.7;
    color: #333;
    margin-bottom: 20px;
}

.feature-list, .benefits-list {
    margin-left: 20px;
    list-style-type: disc;
}

.feature-list li {
    padding: 10px 0;
    transition: color 0.3s ease;
}

.feature-list li:hover {
    color: #1A406D;
}

.row.images img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}



@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* .product-parameters img {
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
} */


				.container {
					width: 100%;
					/* Adjust the width as per the container's width */
					margin: 0 auto;
				}

				table {
					width: 80%;
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
            .config{
               text-align: center;
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
<section class="page-banner">
   <div class="container">
      <div class="page-title-wrapper">
         <h1 class="page-title">Qwik Box</h1>
         <ul class="bradcurmed">
            <li><a href="#" rel="noopener noreferrer">Home</a></li>
            <li>Industries</li>
            <li>Qwik Box</li>
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
         <h2 class="sub-title wow pixFadeUp" style="visibility: visible; animation-name: i;font-size:45px;">Qwik Box</h2>
      </div>
      <p class="intro-text">Qwik Box is a software-based solution running on commodity hardware. By virtualizing network functions such
         as routing, firewalling, and VPN, SVB offers flexibility, scalability, and cost-efficiency...
      </p>

      <ul class="disc feature-list">
         <li>Virtualizes network functions on commodity hardware</li>
         <li>Provides flexibility, scalability, and cost-efficiency</li>
         <li>QT 1-2-3: complete ICTaaS solution</li>
         <li>Diverse connectivity and zero-touch deployment</li>
         <li>Costs under $50 per site per month</li>
         <li>Self-managed, co-managed, fully managed with 24/7 support</li>
         <li>A framework to deploy – ISP in a Box, ICTaaS, Secure SD-WAN</li>
         <li>Open source, hosted, managed</li>
         <li>Automation & Scale Speed, flexibility, zero-touch, policy-driven</li>
         <li>Security, role-based access, threat mitigation</li>
         <li>Assurance & Analytics, Monitoring and Reporting</li>
      </ul>

      <p class="highlight">QT 1-2-3 is a complete ICTaaS solution...</p>

      <div class="row images mt-5 mb-5">
         <div class="col-md-6 sm-12">
            <img src="assets/img/img1.png" alt="Image 1">
         </div>
         <div class="col-md-6 sm-12">
            <img src="assets/img/features.jpg" alt="Image 2">
         </div>
      </div>

      <h6>Benefits</h6>
      <ol class="disc benefits-list">
         <li>Disaggregation & Lowered costs</li>
         <li>Simplification & Scale</li>
         <li>Real-time Visibility</li>
         <li>Flexibility & Control</li>
         <li>Agility & Automation</li>
         <li>Easier to Manage</li>
      </ol>

      <h6>Qwik Box-Software</h6>
      <ul class="disc">
         <li>Software-based solution supporting multiple applications</li>
         <li>Type 1 Hypervisor</li>
         <li>Hardware Abstraction for underlying resources</li>
         <li>Application Management:
            <ul>
               <li>Create</li>
               <li>Delete</li>
               <li>Start/Stop</li>
               <li>Pause/Resume</li>
            </ul>
         </li>
         <li>Management Interface for administrators</li>
         <li>Web-based console and API for automation</li>
         <li>Supports Linux, Windows, BSD, etc.</li>
      </ul>

      <div class="product-parameters mt-5 mb-5">
         <h6>Product Parameters:</h6>
         <div class="row d-flex justify-content-center pt-3">


         
			<table>
				<tr>
					<th>Configurations/Parameter</th>
					<th>Four network soft routing form </th>
					
				</tr>
				<tr>
					<td class="config"><img src="assets/img/pp1.png" alt=""></td>
					<td>Intel 12th Gen Alder Lake-N N100/N200/13-N305</td>
					
				</tr>
            <tr>
					<td class="config"><img src="assets/img/pp2.png" alt=""></td>
					<td>On board 8G/16G LPDDR5 4800MHz optional</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp3.png" alt=""></td>
					<td>1 * M.2 2242 SATA/NGFF/NVMe (PCIe3.0 x2) protocol</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp4.png" alt=""></td>
					<td>Intel UHD Graphics N100(24EU) / N200(32EU)/13-N305(32EU)</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp5.png" alt=""></td>
					<td>1 * HDMI2.0 (4096 x 2160@60Hz), 1 Type-C (4096 x 2160@60Hz)
               </td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp6.png" alt=""></td>
					<td>4 * Intel i226-V(2.5G Network card)</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp7.png" alt=""></td>
					<td>2 * USB3.1 Gen2 10Gbps(USB-A). 1 USB3.1 Gen2 10Gbps(USB-C)</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp8.png" alt=""></td>
					<td>NONE</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp9.png" alt=""></td>
					<td>Realtek ACL897 pitch 2.1 2-in-1 audio interface</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp10.png" alt=""></td>
					<td>Dual copper tube fin heat dissipation PMW four wire temperature controlled silent ball fan</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp11.png" alt=""></td>
					<td>75.4mm 75.4mm 52.5mm</td>
					
				</tr>		<tr>
					<td class="config"><img src="assets/img/pp12.png" alt=""></td>
					<td>AMI EFI BIOS supports auto power-on, wake on lan, and PXE</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp13.png" alt=""></td>
					<td>DC-IN 12-19V wide voltage (Type-C interface) PD 55W or above charger 100-240VAC, 50/60Hz</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp14.png" alt=""></td>
					<td>-10-75 °C 10%-90% relative humidity</td>
					
				</tr>
			<tr>
					<td class="config"><img src="assets/img/pp15.png" alt=""></td>
					<td>Windows11、Ubuntu、Linux etc OS</td>
					
				</tr>
		
			
			</table>



           
         </div>
      </div>

      <h6>Qwik Box-Hardware</h6>
      <ul class="disc">
         <li>Technical Specifications Summary:</li>
         <li>CPU: Intel 4, 8, or 16 core</li>
         <li>Networking Ports: 6 x 1G copper, 2 x 10G SFP+</li>
         <li>USB Ports: 2x USB 3.0 type A</li>
         <li>Storage: M.2 SATA SSD (120GB or 240GB)</li>
         <li>Memory: DDR4/DDR5 with ECC support</li>
         <li>Operating System: YCN Hypervisor</li>
         <li>Mounting: Wall, rack, or desktop</li>
      </ul>
   </div>
</section>
