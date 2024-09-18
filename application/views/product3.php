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
</style>

<section class="page-banner">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title">Qwik Virt</h1>
			<ul class="bradcurmed">
				<li><a href="#" rel="noopener noreferrer">Home</a></li>
				<li>Industries</li>
				<li>Qwik Virt</li>
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
			<h2 class="sub-title wow pixFadeUp" style="visibility: visible; animation-name: i;font-size:45px;">Qwik
				Virt</h2>
		</div>
		<p> Qwik Virt is a key component of Qwik Box that enables the deployment of multiple network services on a
			single hardware platform. KVM (Kernel-based Virtual Machine) is a popular open-source Qwik Virt technology
			that turns the SVB into a hypervisor, allowing it to run multiple virtual machines (VMs). </p>
		<h5 class="mt-5">Qwik Virt Components and Concepts</h5>
		<!-- Tabs -->

		<style>
			.tabs {
				display: flex;
				cursor: pointer;
			}

			.tab {
				padding: 10px 20px;
				background: #37A693;
				border: 1px solid #ccc;
				color: white;
				flex: 1;
				text-align: center;
			}

			.tab.active {
				background: #e9f0f8;
				border-top: 2px solid #007bff;
				color: black;
			}

			.tab-content {

				padding: 20px;
				display: none;
			}

			.tab-content.active {
				display: block;
			}


			
		</style>

		<section class="mt-4 mb-4">
			<div class="tabs">
				<div class="tab active" onclick="openTab('tab1')">Hypervisor</div>
				<div class="tab" onclick="openTab('tab2')">Virtual Machines (VMs)</div>
				<div class="tab" onclick="openTab('tab3')">Virtual Network Functions (VNFs)</div>
			</div>

			<div id="tab1" class="tab-content active">
				  <ul class="disc">
					<li>SVB’s VOS is a software layer that sits between the hardware and the virtual machines (VMs). It
						abstracts and manages the hardware resources, allowing multiple VMs to share the same physical
						hardware.</li>
					<li><b>KVM (Kernel-based Virtual Machine):</b> KVM is integrated in to SVB’s VOS, making it highly
						efficient and capable of leveraging the full power of modern hardware. It supports hardware
						acceleration through technologies like Intel VT-x and AMD-V.</li>
				</ul>
			</div>
			<div id="tab2" class="tab-content">
				  <ul class="disc">
					<li>VMs are isolated instances that run on top of VOS. Each VM can has its own operating system and
						applications, behaving like an independent physical server.</li>
					<li>In the SVB environment, different network functions (such as firewalls, routers, sdwan) are
						implemented as VNFs (Virtual Network Functions) running inside these VMs.</li>
				</ul>
			</div>
			<div id="tab3" class="tab-content">
				  <ul class="disc">
					<li>VNFs are software implementations of network functions that run on VMs. This allows network
						services to be decoupled from dedicated hardware, leading to more flexibility and reduced costs.
					</li>
					<li>Examples include virtual firewalls, virtual routers, and virtual load balancers.</li>
				</ul>
			</div>
		</section>

		<script>
			function openTab(tabId) {
				const tabs = document.querySelectorAll('.tab');
				const contents = document.querySelectorAll('.tab-content');

				tabs.forEach(tab => {
					tab.classList.remove('active');
				});

				contents.forEach(content => {
					content.classList.remove('active');
				});

				document.querySelector(`.tab[onclick="openTab('${tabId}')"]`).classList.add('active');
				document.getElementById(tabId).classList.add('active');
			}
		</script>


		<!-- tabs end -->

		<section class="pb-5">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-3 text-center">
						<img src="assets/img/virt1.png" alt="" style="height:200px;">
					</div><div class="col-md-3 text-center">
						<img src="assets/img/virt2.png" alt="" style="height:200px;">
					</div><div class="col-md-3 text-center">
						<img src="assets/img/virt3.png" alt="" style="height:200px;">
					</div>
				</div>
			</div>
		</section>


		<h5>Key Qwik Virt Functionalities</h5>
		<ol type="1">
			<li>Resource Allocation and Management
				  <ul class="disc">
					<li>VOS manages the allocation of resources like CPU, memory, storage, and network bandwidth to VMs.
						It ensures that each VNF gets the resources it needs while maintaining isolation between VMs.
					</li>
					<li>Resource allocation can be dynamic, allowing for adjustments based on demand (e.g., scaling
						resources up or down).</li>
				</ul>
			</li>
			<li> Isolation and Security
				  <ul class="disc">
					<li>VOS provide strong isolation, ensuring that the operations of one VNF do not affect others. This
						is crucial for security and stability, especially in multi-tenant environments.</li>
					<li>Supporing SELinux and sVirt, enhances security by isolating VMs from each other and from the
						host system.</li>
				</ul>
			</li>
			<li>Snapshots and Cloning-Roadmap
				  <ul class="disc">
					<li>Snapshots allow capturing the state of a VM at a specific point in time, which is useful for
						backup and recovery.</li>
					<li>Cloning VMs enables the quick deployment of new VNFs by duplicating existing ones.</li>
				</ul>
			</li>
			<li>Networking
				  <ul class="disc">
					<li>VOS supports complex networking configurations, including virtual switches and network bridges,
						to connect VMs to each other and to external networks.</li>
					<li>Features like SR-IOV (Single Root I/O Qwik Virt) provide high-performance network I/O by
						allowing VMs to bypass the hypervisor for certain network operations.</li>
				</ul>
			</li>
			<li> Storage
				  <ul class="disc">
					<li>VOS supports storage backends, such as local disks, network-attached storage (NAS), and storage
						area networks (SAN). It supports advanced storage features like thin provisioning, which
						allocates storage space only as needed.</li>
				</ul>
			</li>
			<li>Performance and Scalability
				  <ul class="disc">
					<li>VOS is designed to take advantage of modern multi-core processors and large memory
						configurations, offering high performance and scalability for VNFs.</li>
					<li>It also supports NUMA (Non-Uniform Memory Access) for optimizing memory access in multi-socket
						systems</li>
				</ul>
			</li>
		</ol>
		<h5>Management and Orchestration</h5>
		<p>Effective management and orchestration are critical for running and maintaining a virtualized environment.
			This includes:</p>
		  <ul class="disc">
			<li><b>Orchestrator for</b> providing features like VM provisioning, resource management, and monitoring.
			</li>
			<li><b>Service Orchestration: </b>Atomate the deployment and management of VNFs, handling tasks like service
				chaining and scaling.</li>
		</ul>
	</div>
</section>