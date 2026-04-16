<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>Abhishek Kumar | Certified MCT Trainer</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name"
    content="Torkbiz - Professional Multipurpose HTML Template for Business Consulting & Financial Services">
  <meta name="author" content="thetork">
  <meta name="keywords" content="Torkbiz, corporate business, consultancy agencies">
  <meta name="description"
    content="Torkbiz provides a professional online platform to showcase your products, services, and expertise.
      From captivating visuals to seamless navigation, Torkbiz ensures an engaging user experience that leaves a lasting impression.
      Whether you're looking to attract new clients, expand your reach, or establish your brand presence,
      Torkbiz is the perfect choice for crafting a modern business website that stands out in today's competitive landscape.">

  <!-- OG meta data -->
  <meta property="og:title"
    content="Torkbiz - Professional Multipurpose HTML Template for Business Consulting & Financial Services">
  <meta property="og:site_name" content="Torkbiz">
  <meta property="og:url" content="">
  <meta property="og:description" content="">
  <meta property="og:type" content="">
  <meta property="og:image" content="">

  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('website/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website/css/lightcase.css') }}">
  <link rel="stylesheet" href="{{ asset('website/css/swiper-bundle.min.css') }}">
=
  <!-- main css for template -->
  <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
</head>

<body>
  <div class="custom-cursor">
    <div class="cursor-dot"></div>
    <div class="cursor-ring"></div>
  </div>
  <!-- ===============>> Preloader start here <<================= -->
  {{-- <div class="preloader">
    <img src="{{ asset('website/images/logo/preloader.png') }}" alt="preloader icon">
  </div> --}}
  <!-- ===============>> Preloader end here <<================= -->

  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch d-none">
    <span class="dark-btn" id="btnSwitch"><img src="assets/images/icon/moon.svg" alt="lightdark-switch"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->

  <!-- ===============>> Header section start here <<================= -->
  <header class="header-section bg-color-3">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="#">
              <img class="dark" style="height: 50px;" src="{{ asset('website/images/logo/logo.png') }}" alt="logo">
            </a>
          </div>
          <div class="menu-area">
            <ul class="menu menu--style1">
              <li>
                <a href="{{ route('home') }}">Homes </a>
              </li>
              <li>
                <a href="#0">Expertise</a>
                <ul class="submenu">
                  <li><a href="">Business Consulting</a></li>
                  <li><a href="{{ route('training') }}">Skill Training</a></li>
                </ul>
              </li>
              <li>
                <a href="{{ route('about') }}">About Us</a>
              </li>

              <li>
                <a href="{{ route('contact') }}">Contact Us</a>
              </li>
            </ul>

          </div>
          <div class="header-action">
            <div class="menu-area">
             <!-- toggle icons -->
              <div class="header-bar d-lg-none header-bar--style1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ===============>> Header section end here <<================= -->