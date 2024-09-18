<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Qwiktrace | All in one solutions</title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/img/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/img/fav/favicon-16x16.png">
  <link rel="mask-icon" href="<?php echo base_url(); ?>/assets/img/fav/safari-pinned-tab.svg" color="#fa7070">
  <meta name="msapplication-TileColor" content="#fa7070">
  <meta name="theme-color" content="#fa7070">

  <link rel="stylesheet" href="<?php echo base_url(); ?>/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/dependencies/fontawesome/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/dependencies/swiper/css/swiper.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/dependencies/wow/css/animate.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/app.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <script src="<?php echo base_url(); ?>/dependencies/jquery/jquery.min.js"></script>
</head>

<style>

/* Style the main menu */
ul.site-main-menu {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex; /* Use flexbox to align items horizontally */
  white-space: nowrap; /* Prevent line breaks */
}

/* Dropdown menu */
ul.dropdown1-menu {
  display: none;
  position: absolute;
  background-color: white;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  z-index: 1;
  padding: 0!important;
}

ul.dropdown1-menu li a{
  display: block;
  margin-bottom: -39px!important;
}

ul.dropdown1-menu li a {
  color: black; /* Set text color to black */
}


/* Show the dropdown menu on hover */
li.dropdown1:hover .dropdown1-menu {
  display: block;
  padding: 0;
  margin: 0;
}


/* Change the color of dropdown links to green on hover */
ul.dropdown1-menu li a:hover {
  color: #37A693!important;
}
</style>



<body id="home-version-1" class="home-color-two" data-style="default">
  <a href="#main_content" data-type="section-switch" class="return-to-top"><i class="fas fa-chevron-down"></i></a>
  <div class="page-loader">
    <div class="loader">
      <div class="blobs">
        <div class="blob-center"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
          <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
            <feBlend in="SourceGraphic" in2="goo" />
          </filter>
        </defs>
      </svg>
    </div>
  </div>
  <div id="main_content">
    <header class="site-header header-two header_trans-fixed " data-top="992">
      <div class="container">
        <div class="header-inner">
          <div class="site-mobile-logo">
            <a href="#" class="logo">
              <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="main-logo">
              <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="sticky-logo"></a>
          </div>
          <div class="toggle-menu"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span></div>
          <nav class="site-nav nav-dark">
            <div class="close-menu"><span>Close</span> <i class="ei ei-icon_close"></i></div>
            <div class="site-logo"><a href="#" class="logo">
                <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="main-logo">
                <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="sticky-logo"></a></div>
            <div class="menu-wrapper" data-top="992">
              <ul class="site-main-menu">
                <li>
                  <a href="<?php echo base_url(); ?>">Home</a>

                </li>
                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                <!-- <li>
                  <a href="<?php echo base_url(); ?>product">Products</a>

                </li> -->

                <li class="dropdown1">
      <a href="<?php echo base_url(); ?>product">Products <i class="fa fa-chevron-down"></i></a>
      <ul class="dropdown1-menu">
        <li class="py-4"><a href="<?php echo base_url(); ?>product1"style="color:black;">Qwik Connect</a></li>
        <li class="py-4"><a href="<?php echo base_url(); ?>product2"style="color:black;">Qwik Box</a></li>
        <li class=" pt-4 pb-5"><a href="<?php echo base_url(); ?>product3"style="color:black;">Qwik Virt</a></li>
      </ul>
    </li>

                <!-- <li>
                  <a href="<?php echo base_url(); ?>/pricing">Industries</a>
                </li> -->

                <li class="dropdown1">
      <a href="<?php echo base_url(); ?>#">Industries <i class="fa fa-chevron-down"></i></a>
      <ul class="dropdown1-menu">
        <li class="px-2 py-4"><a href="<?php echo base_url(); ?>industry1"style="color:black;">Education</a></li>
        <li class="px-2 py-4"><a href="<?php echo base_url(); ?>industry2"style="color:black;">Incubators</a></li>
        <li class="px-2 py-4"><a href="<?php echo base_url(); ?>industry3"style="color:black;">ISP's</a></li>
        <li class="px-2 pt-4 pb-5"><a href="<?php echo base_url(); ?>industry4"style="color:black;">Data Centers</a></li>
      </ul>
    </li>
                <li>
                  <a href="<?php echo base_url(); ?>blog">Blogs</a>

                </li>
                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
              </ul>
              <div class="nav-right"><a href="<?php echo base_url(); ?>Signup" class="nav-btn">Free Demo</a></div>
            </div>
          </nav>
        </div>
      </div>
    </header>