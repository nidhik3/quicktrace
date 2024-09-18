<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="page-banner">
    <div class="container">
        <div class="page-title-wrapper">
            <h1 class="page-title">Data Centers</h1>
            <ul class="bradcurmed">
                <li><a href="#" rel="noopener noreferrer">Home</a></li>
                <li>Industries</li>
                <li>Data Centers</li>
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
            <h2 class="sub-title wow pixFadeUp" style="visibility: visible; animation-name: i;font-size:45px;">Data
                Center
            </h2>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <p>Tired of sky-high IT costs? Introducing QwikVirt, the virtualization solution designed for businesses seeking maximum efficiency at minimal expense.</p>

                </div>
            </div>

        </div>




        <h5>Our Unique Value Proposition:</h5>
        <ul class="disc">
            <li>Unmatched Affordability: Experience virtualization without breaking the bank. QwikVirt delivers
                exceptional performance at a fraction of the cost.</li>
            <li>Rapid Deployment: Get up and running in no time with our user-friendly interface and streamlined setup
                process.</li>
            <li>Scalability: Effortlessly adapt to changing workloads with our flexible and scalable platform.</li>
            <li>Robust Performance: Enjoy high performance and reliability without the hefty price tag.</li>
            <li>Consolidate Resources: Run multiple virtual machines on a single physical server, maximizing hardware
                utilization and reducing costs.</li>
            <li>Accelerate Deployment: Provision new virtual servers in minutes, not hours, boosting agility and
                responsiveness.</li>
            <li>Enhance Flexibility: Scale resources up or down to meet fluctuating demands, optimizing your IT budget.
            </li>
            <li>Improve Disaster Recovery: Create virtual backups and restore operations quickly in case of emergencies.
            </li>
            <li>Centralized Management: Gain complete control over your IT infrastructure through a unified dashboard
            </li>

        </ul>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-center">
                <img src="assets/img/data-center.png" alt="" style="width:100%">
            </div>


        </div>


    </div>
</section>