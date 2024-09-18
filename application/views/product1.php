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
            <h1 class="page-title">Qwik Connect</h1>
            <ul class="bradcurmed">
                <li><a href="#" rel="noopener noreferrer">Home</a></li>
                <li>Products</li>
                <li>Qwik Connect</li>
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
            <h2 class="sub-title wow pixFadeUp" style="font-size: 45px;">Qwik Connect</h2>
        </div>
        <h6 class="sub-section-title">NGN Firewall and Analytics</h6>
        <p class="main-content">
            Qwik Connect revolutionizes network connectivity by optimizing traffic routing and enhancing application
            performance across distributed locations. Next-Generation Firewall (NGFW) ensures robust security with
            advanced threat detection and prevention capabilities, safeguarding networks against evolving cyber threats.
            Analytics solutions provide actionable insights into network performance, user behavior, and security
            posture, enabling informed decision-making and proactive network management.
        </p>
        <ul class="disc">
            <li>Dynamic Path Selection: Automatically selects the network path based on real-time conditions such as
                latency, packet loss, and bandwidth availability.</li>
            <li>Traffic Steering: Directs traffic over optimal paths, ensuring high performance for critical
                applications and services.</li>
            <li>Application-Based Routing: Prioritizes traffic based on application type, allowing for routing policies
                to optimize performance.</li>
            <li>Centralized Management: Provides a single interface for configuring, monitoring, and managing the entire
                network, simplifying administration and troubleshooting.</li>
            <li>Zero-touch Provisioning: Enables automatic deployment and configuration of Qwik Connect devices,
                reducing deployment time and complexity.</li>
            <li class="mb-3">Visibility and Analytics: Offers detailed insights into network performance, application
                usage, and user activity through comprehensive analytics and reporting tools.</li>
            <p class="mb-3"><b>Quality of Service (QoS): </b></p>
            <li>Hybrid WAN Support: Supports a variety of connectivity options including Internet Leased Line (ILL),
                MPLS, Broadband, LTE, and satellite, enabling organizations to leverage cost-effective alternatives
                without compromising performance.</li>
            <li>Cloud Connectivity: Facilitates direct and optimized connectivity to cloud services and applications,
                improving performance and user experience.</li>
        </ul>

        <!-- Second Offer -->
        <h6 class="sub-section-title">SSE & Next Generation Firewall</h6>
        <ul class="disc">
            <li>Zero Trust Network Access</li>
            <li>GeoIP Blocking: Integrates with GeoIP databases to block traffic based on geographic locations, helping
                to mitigate threats from specific regions.</li>
            <li>CASB</li>
            <li>Stateful Packet Filtering</li>
            <li>Packet Filtering Rules: Administrators can create rules to allow, deny, or redirect traffic based on
                various criteria, including source/destination IP addresses, ports, protocols, and interfaces.</li>
            <li>Network Address Translation (NAT) & Port Forwarding</li>
            <li>Advanced Filtering Options: Offers advanced filtering options, including source and destination port
                ranges, ICMP types, TCP flags, and interface-specific rules.</li>
            <li>VPN Passthrough: Supports VPN passthrough for protocols like IPsec, PPTP, and L2TP, allowing VPN traffic
                to pass through the firewall without interruption.</li>
            <li>Packet Capture: Provides packet capture capabilities for troubleshooting and analyzing network traffic,
                including filtering options to capture specific packets based on criteria.</li>
            <li>Dynamic DNS: Supports Dynamic DNS services, allowing the firewall to maintain connectivity to services
                with dynamic IP addresses by updating DNS records automatically.</li>
        </ul>

        <!-- Third Offer -->
        <h6 class="sub-section-title">Analytics</h6>
        <ul class="disc">
            <li>Performance Monitoring: Real-time monitoring metrics (latency, packet loss, jitter). Continuous
                assessment of bandwidth utilization and link quality across the Qwik Connect.</li>
            <li>Application Visibility: Identification and categorization of application traffic patterns and usage.
                Application performance and response times.</li>
            <li>User Experience Monitoring: Analysis of application response times and session quality. Monitoring user
                behavior and experience across different locations and devices.</li>
            <li>Security Analytics: Detection and analysis of security threats, anomalies, and vulnerabilities.
                Correlation of security events with network traffic patterns to identify potential risks.</li>
            <li>Traffic Optimization: Optimization of traffic routing and path selection based on real-time conditions.
                Identification of congestion points and alternative paths for efficient traffic steering.</li>
            <li>Capacity Planning: Forecasting of bandwidth requirements and network capacity based on historical data
                and trends. Planning for resource allocation and scalability to accommodate future growth.</li>
            <li>Compliance and Reporting: Generation of reports and dashboards for visibility into network performance
                and compliance. Tracking of key performance indicators (KPIs) and adherence to SLAs and security
                policies.</li>
            <li>User Analytics: Profiling of user behavior, preferences, and access patterns. Monitoring user activities
                and application usage to optimize network performance and resource allocation.</li>
            <li>Dynamic DNS: Supports Dynamic DNS services, allowing the firewall to maintain connectivity to services
                with dynamic IP addresses by updating DNS records automatically.</li>
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


<section style="background-color:#f5fffd;">
    <div class="container green">
        <div class="row text-center pt-5">
            <div class="col-md-12">
                <h1 class="sub-title wow pixFadeUp" style="visibility: visible; animation-name: i;">Solutions and
                    Features</h1>
            </div>
        </div>

        <div class="container mt-4">
            <table class="mt-5">
                <tr>
                    <th style="width:50%;">QOS</th>
                    <th>ADMINISTRATION</th>
                </tr>
                <tr>
                    <td>Subscriber wise</td>
                    <td>Role-based administration</td>
                </tr>
                <tr>
                    <td>Group wise</td>
                    <td>Multiple administrators and user levels per interface</td>
                </tr>
                <tr>
                    <td>Application based</td>
                    <td>Upgrades & changes via Web UI Department / Franchise / Operator Management</td>
                </tr>
                <tr>
                    <td>Real time Dynamic Bandwidth</td>
                    <td>Config log with rollbacks</td>
                </tr>
                <tr>
                    <td>Destination Based IP address/Pool</td>
                    <td>Backup/Restore configuration</td>
                </tr>
            </table>


            <table class="mt-5">
                <tr>
                    <th style="width:50%;">DASHBOARD MANAGEMENT</th>
                    <th>STANDARDS COMPLIANCE</th>
                </tr>
                <tr>
                    <td>Basic/All User Statistics/Full User Statistics</td>
                    <td>802.1D Bridging & Spanning Tree Protocol/802.1Q VLAN Tagging</td>
                </tr>
                <tr>
                    <td>Real time/Historical Bandwidth Graph for External/Internal interfaces</td>
                    <td>802.1p QOS/COS</td>
                </tr>

                <tr>
                    <td>Service level status</td>
                    <td>802.1X Port-based Network Access Control (PNAC)</td>
                </tr>
                <tr>
                    <td>Smart Monitoring Tools</td>
                    <td>802.1ah PBB (MAC in MAC)</td>
                </tr>
                <tr>
                    <td>Hardware monitoring</td>
                    <td>802.3ab 1000 BASE-T, 802.3z Gigabit Ethernet</td>
                </tr>
            </table>

            <table class="mt-5">
                <tr>
                    <th style="width:50%;">LOGS</th>
                    <th>EXTERNAL RADIUS SUPPORT</th>
                </tr>
                <tr>
                    <td>Authentication Subscriber</td>
                    <td>Primary/Secondary Radius support</td>
                </tr>
                <tr>
                    <td>NAT Connection tracking logs</td>
                    <td>Separate Authentication/Accounting Radius Support</td>
                </tr>
                <tr>
                    <td>URL Connection tracking logs</td>
                    <td>Separate Radius based on Service (IPoE/PPPoE) on same interface Support</td>
                </tr>
                <tr>
                    <td>Per session logging support</td>
                    <td>Post-paid/Prepaid Service support</td>
                </tr>
                <tr>
                    <td>Data transfer reporting (By user, package & IP address)</td>
                </tr>
                <tr>
                    <td>Log Local/Syslog</td>
                    <td></td>
                </tr>
            </table>


            <table>
                <h3 class="mt-3 mb-3">Hardware</h3>
                <tr>
                    <th style="width:50%;">CHARACTERISTICS</th>
                    <th>DESCRIPTIONS</th>
                </tr>
                <tr>
                    <td>Ethernet interfaces</td>
                    <td>6*1 GB Copper RJ45 , 2*10 GB SFP+</td>
                </tr>
                <tr>
                    <td>CPU</td>
                    <td>4 core</td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td>8GB DDR4</td>
                </tr>
                <tr>
                    <td>Internal storage</td>
                    <td>120 GB SSD</td>
                </tr>
                <tr>
                    <td>WIFI</td>
                    <td>802.11ac, 2x2 MIMO</td>
                </tr>
                <tr>
                    <td>USB </td>
                    <td>2* USB3.0</td>
                </tr>
                <tr>
                    <td>Bluetooth</td>
                    <td>Low-energy Bluetooth</td>
                </tr>
                <tr>
                    <td>TPM</td>
                    <td>Trusted Platform Module 2.0</td>
                </tr>
            </table>

            <div class="mission mt-5 mb-5">
                <img src="assets/img/sdwan.png">
            </div>
            <table>
                <h3 class="mt-3 mb-3">VNF Application</h3>
                <tr>
                    <th style="width:50%;">APPLICATION</th>
                    <th>VENDOR</th>
                </tr>
                <tr>
                    <td> Firewall</td>
                    <td>Cisco, Fortinet, Juniper, Palo AltoNetworks</td>
                </tr>
            </table>

            <table>
                <h3 class="mt-3 mb-3">SUBSCRIBER MANAGEMENT</h3>
                <tr>
                    <td> PAP / CHAP</td>
                </tr>
                <tr>
                    <td> IPoE / PPPoE / MAC / Captive Portal / VLAN Type Local / Radius Authentication</td>
                </tr>
                <tr>
                    <td> Authentication based on Service and security</td>
                </tr>
                <tr>
                    <td> Local/Radius - Pool/Authentication</td>
                </tr>
                <tr>
                    <td> Static IP via Radius and Local authentication</td>
                </tr>
                <tr>
                    <td> Access based on Time and Date time restriction ( Portal )</td>
                </tr>
                <tr>
                    <td> Data transfer based Quota allocation per Rate-limit per QoS</td>
                </tr>
                <tr>
                    <td> Schedule based Rate-limit and burst</td>
                </tr>
                <tr>
                    <td> Real time QoS User / Group Policy update ( User Only )</td>
                </tr>
                <tr>
                    <td> User Disconnect / Session and Change of authorization through Standard CoA/DAE</td>
                </tr>
                <tr>
                    <td> Per Subscriber Online Traffic Monitor Accounting/Session /Graph</td>
                </tr>
                <tr>
                    <td> Error Handling Redirect to Expired / Disabled / unauthorized / No Money Page for Subscribers
                    </td>
                </tr>
                <tr>
                    <td> Limited / Unlimited / Fair Usage Support</td>
                </tr>
            </table>

         
        </div>
    </div>

</section>

<section>

    <style>
        table {
            width: 100%;  
            border-collapse: collapse;
        }

        th,
        td {
            /* border: 1px solid grey; */
            padding: 8px;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f5fffd;
            /* Light green background */
            color: #37A693;
        }
    </style>


    <div class="container mt-5 mb-5">
        <div class="row">
            <h2 class="margs">Device Specifications</h2>

            <table>
                <tr>
                    <th>Platform Series</th>
                    <th>Target Deployment</th>
                    <th>Aggregate Performance</th>
                    <th>Interfaces</th>
                    <th>WiFi & Bluetooth</th>
                    <th>RAM</th>
                </tr>
                <tr>
                    <td>QT 100</td>
                    <td>Small Branch </td>
                    <td>Up to 10 Mbps</td>
                    <td>(6 x 1G) + (2x 10G SFP+) </td>
                    <td>802.11ac, 2x2 MIMO, max. phy rate: 866.7 Mbps & Bluetooth</td>
                    <td>8G</td>
                </tr>
                <tr>
                    <td>QT 200</td>
                    <td>Medium Size Branch</td>
                    <td>Up to 10 Mbps</td>
                    <td>(6 x 1G) + (2x 10G SFP+)</td>
                    <td>802.11ac, 2x2 MIMO, max. phy rate: 866.7 Mbps & Bluetooth</td>
                    <td>16G</td>
                </tr>
                <tr>
                    <td>QT 300</td>
                    <td>Large Branch, HQ</td>
                    <td>Up to 100 Mbps</td>
                    <td>(6 x 1G) + (2x 10G SFP+) </td>
                    <td>802.11ac, 2x2 MIMO, max. phy rate: 866.7 Mbps & Bluetooth</td>
                    <td>32G</td>
                </tr>
                <tr>
                    <td>QT 400</td>
                    <td>DC Edge </td>
                    <td>Up to 100 Mbps</td>
                    <td>(4 x 1G) + (2x 10G SFP+) </td>
                    <td>*Available expansion cards to add additional 1G or 10G interface, or WiFi capabilities</td>
                    <td>up to 64GB in standard configuration, upgradable to 128GB with custom upgrade</td>
                </tr>
            </table>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5 mb-5 mission">
        <h2 class="mb-4 mt-5">Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 pt-4  custom-shadow"
                    style="border:0.5px solid white; border-radius:10px;background-color:#3ba69a; height:55vh; margin-top:78px; ">
                    <div class="card-body" style="height: 369px;">
                        <h5 class="card-title">Managed Qwik Connect Services</h5>

                        <p class="card-text" style="color:white;">We provide a comprehensive Software-Defined Wide Area
                            Network (Qwik Connect) solution, ensuring seamless connectivity, optimized network
                            performance, and enhanced application delivery.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 py-2 custom-shadow"
                    style="border:0.5px solid white; border-radius:10px;background-color:#F19872;">
                    <div class="card-body">
                        <h5 class="card-title">Managed ICTaaS</h5>

                        <p class="card-text" style="color:white;">The QwikTrace solution is intended for small and
                            medium-sized enterprises that traditionally, have deployed firewalls, routers collaboration,
                            & independent WAN optimization platforms at their branch locations. QwikTrace has combined
                            all the above plus Qwik Connect functionality into one easy-to-deploy and manageable
                            platform, that serves as Virtual Office in a Box enabling ISPs, MSPs, & system integrators
                            to offer managed ICT SaaS.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 pt-4 custom-shadow"
                    style="border:0.5px solid white; border-radius:10px;background-color:#3ba69a;height:55vh; margin-top:78px;">
                    <div class="card-body" style="height: 369px;">
                        <h5 class="card-title">Managed Hardware</h5>

                        <p class="card-text" style="color:white;">We offer end-to-end hardware management services. From
                            procurement and installation to maintenance and upgrades, we ensure your hardware
                            infrastructure is always up-to-date and running smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>