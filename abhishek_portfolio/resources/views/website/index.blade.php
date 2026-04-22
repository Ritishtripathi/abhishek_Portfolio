@extends('website.layouts.app')
@section('content')

  <!-- ===============>> Banner section start here <<================= -->
  <section class="banner banner--style1  bg--cover section-tech-bg"
    style="background-image: url('{{ asset('website/images/bg/4.png') }}')">
    <div class="container">
      <div class="banner__wrapper">
        <div class="row gy-5 gx-4">
          <!-- ===== GLASS ORBIT PREMIUM HERO ===== -->
          <div class="col-lg-5 col-md-5">
            <div class="banner__thumb galaxy-hero-wrap">

              <!-- Background Blur Lights -->
              <span class="light-ball ball-1"></span>
              <span class="light-ball ball-2"></span>
              <span class="light-ball ball-3"></span>

              <!-- Orbit Rings -->
              <div class="orbit-system">
                <span class="orbit orbit-1"></span>
                <span class="orbit orbit-2"></span>
                <span class="orbit orbit-3"></span>

                <!-- Moving Planets -->
                <span class="planet p1"><i class="fa-solid fa-cloud"></i></span>
                <span class="planet p2"><i class="fa-solid fa-shield-halved"></i></span>
                <span class="planet p3"><i class="fa-solid fa-chart-column"></i></span>
                <span class="planet p4"><i class="fa-solid fa-robot"></i></span>
              </div>

              <!-- Glass Card -->
              <div class="glass-profile-card">
                <div class="shine-line"></div>
                <img src="{{ asset('website/images/bg/abhishek (2).png') }}" alt="Profile">
              </div>

            </div>
          </div>
          <div class="col-lg-7 col-md-7">
            <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
              <h1 class="banner__content-heading">
                Abhishek Kumar
              </h1>

              <p class="name-subheader">
                (Modern Workplace Technical Consultant | Trainer)
              </p>
              <p class="banner__content-subtitle">MCT | MTA | MCSA | MCSE |
                MCE | MTA | Copilot | Azure Admin | Power BI |
                Tableau Power Apps | Power Platform
                | Azure Security | Identity Security & Governance <br> Microsoft Defender | Microsoft Intune | Azure Data
                |
                M365 Admin | SharePoint | Teams Admin Cyber
                Security | CompTIA | ISO | ITIL | Scrum Agile</p>
              <div class="banner__content-btngroup" data-aos="fade-right" data-aos-duration="1000">
                <!-- From Uiverse.io by andrew-demchenk0 -->
                <button class="button-cv-dwn" type="button">
                  <span class="button-cv-dwn__text">View CV</span>
                  <span class="button-cv-dwn__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35"
                      id="bdd05811-e15d-428c-bb53-8661459f9307" data-name="Layer 2" class="svg">
                      <path
                        d="M17.5,22.131a1.249,1.249,0,0,1-1.25-1.25V2.187a1.25,1.25,0,0,1,2.5,0V20.881A1.25,1.25,0,0,1,17.5,22.131Z">
                      </path>
                      <path
                        d="M17.5,22.693a3.189,3.189,0,0,1-2.262-.936L8.487,15.006a1.249,1.249,0,0,1,1.767-1.767l6.751,6.751a.7.7,0,0,0,.99,0l6.751-6.751a1.25,1.25,0,0,1,1.768,1.767l-6.752,6.751A3.191,3.191,0,0,1,17.5,22.693Z">
                      </path>
                      <path
                        d="M31.436,34.063H3.564A3.318,3.318,0,0,1,.25,30.749V22.011a1.25,1.25,0,0,1,2.5,0v8.738a.815.815,0,0,0,.814.814H31.436a.815.815,0,0,0,.814-.814V22.011a1.25,1.25,0,1,1,2.5,0v8.738A3.318,3.318,0,0,1,31.436,34.063Z">
                      </path>
                    </svg></span>
                </button>
                <button href="#"
                  onclick="Calendly.initPopupWidget({url: 'https://calendly.com/abhiit-abhishek/30min'});return false;"
                  class="btn-home-book-train">Book a Session <i class="fa-solid fa-calendar-check"></i>
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="banner__shape">
      <span class="banner__shape-item banner__shape-item--1">
        <img src="{{ asset('website/images/banner/shape/1.png') }}" alt="shape icon">
      </span>
      <span class="banner__shape-item banner__shape-item--2">
        <img src="{{ asset('website/images/banner/shape/2.png') }}" alt="shape icon">
      </span>
      <span class="banner__shape-item banner__shape-item--3">
        <img src="{{ asset('website/images/banner/shape/3.png') }}" alt="shape icon">
      </span>
      <span class="banner__shape-item banner__shape-item--4">
        <img src="{{ asset('website/images/banner/shape/4.png') }}" alt="shape icon">
      </span>
      <span class="banner__shape-item banner__shape-item--5">
        <img src="{{ asset('website/images/banner/shape/5.png') }}" alt="shape icon">
      </span>
    </div>

  </section>
  <!-- ===============>> Banner section end here <<================= -->

  <!-- ================= CERTIFICATIONS GRID SECTION ================= -->
  <section class="certx2-section bg-color-2" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">

      <!-- FEATURED BLOCK -->
      <div class="certx2-featured" data-aos="zoom-in-up" data-aos-duration="1000">

        <div class="certx2-featured-badge" data-aos="flip-left" data-aos-delay="200">
          <img src="{{ asset('website/images/certifications/mctnew.png') }}">
        </div>

        <div class="certx2-featured-content" data-aos="fade-left" data-aos-delay="300">
          <span class="certx2-mini">Featured Credential</span>

          <h3 class="certificate-linear-heading">
            Microsoft Certified Trainer (MCT)
            <span class="certx-sub">100+ Global Credentials</span>
          </h3>

          <p>
            Industry-recognized Microsoft, Azure, Security, Cloud & Productivity certifications.
          </p>
        </div>

      </div>

      <!-- GRID LOGOS -->
      <div class="certx2-grid" data-aos="fade-right" data-aos-delay="400">
        <!-- ROW 1 -->
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/gwr.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/mcse.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/mce.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/mta.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/exampassed1.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/exampassed2.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/msexcel.png') }}"></div>

        <!-- ROW 2 -->
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/msoffice.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ms100.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ms101.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/md101.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ms300.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/az.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/aa.png') }}"></div>

        <!-- ROW 3 -->
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/powerbi.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/learn100.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ea.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ppfc.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ta.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ccse.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/de.png') }}"></div>

        <!-- ROW 4 -->
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/mcaip.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/s500sr.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ase.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/sa.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/soa.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/iaaa.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/ipa.png') }}"></div>


        <!-- ROW 5 -->
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/aeda.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/xcd.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/miet.png') }}"></div>
        <div class="certx2-card"><img src="{{ asset('website/images/certifications/mcmie.png') }}"></div>
      </div>
    </div>
  </section>
  <!-- ================= CERTIFICATIONS SHOWCASE ================= -->
  <section class="certx-section bg-color-2">
    <div class="container">

      <div class="certx-head text-center" data-aos="fade-up" data-aos-duration="1000">
      </div>

      <!-- Featured -->
      <div class="certx-featured" data-aos="zoom-in-up" data-aos-duration="1200">
        <div class="certx-featured-badge" data-aos="flip-left" data-aos-delay="200">
          <img src="{{ asset('website/images/certifications/mctnew.png') }}" alt="MCT">
        </div>

        <div class="certx-featured-content" data-aos="fade-left" data-aos-delay="300">
          <span class="certx-mini">Featured Credential</span>
          <h3 class="certificate-linear-heading">
            Microsoft Certified Trainer (MCT)
            <span class="certx-sub">100+ Global Credentials</span>
          </h3>
          <p>
            Industry-recognized Microsoft, Azure, Security, Cloud & Productivity certifications earned through continuous
            learning and excellence.
          </p>
        </div>
      </div>

      <!-- Auto Slider -->
      <div class="certx-slider-wrap" data-aos="fade-up" data-aos-duration="1000">

        <div class="certx-slider-track">

          <div class="certx-slide" data-aos="fade-right"><img src="{{ asset('website/images/certifications/aa.png') }}">
          </div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="50"><img
              src="{{ asset('website/images/certifications/az.png') }}"></div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="100"><img
              src="{{ asset('website/images/certifications/azsecurity.png') }}"></div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="150"><img
              src="{{ asset('website/images/certifications/mce.png') }}"></div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="200"><img
              src="{{ asset('website/images/certifications/mcse.png') }}"></div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="250"><img
              src="{{ asset('website/images/certifications/mct.png') }}"></div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="300"><img
              src="{{ asset('website/images/certifications/mie.png') }}"></div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="350"><img
              src="{{ asset('website/images/certifications/mta.png') }}"></div>
          <div class="certx-slide" data-aos="fade-right" data-aos-delay="400"><img
              src="{{ asset('website/images/certifications/powebi.png') }}"></div>

          <!-- duplicate -->
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/aa.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/az.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/azsecurity.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/mce.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/mcse.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/mct.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/mie.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/mta.png') }}"></div>
          <div class="certx-slide"><img src="{{ asset('website/images/certifications/powebi.png') }}"></div>

        </div>

      </div>

    </div>
  </section>

  <!-- ================= MODERN SKILLS MATRIX ================= -->
  <section class="skillmatrix-section bg-color-3">
    <div class="container">

      <div class="section-heading text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
        {{-- <span class="sub-title">Professional Expertise</span> --}}
        <h2 class="certificate-linear-heading">Skills & Technologies</h2>
        <p>
          Advanced knowledge across Microsoft ecosystem, cloud solutions, analytics, productivity and management tools.
        </p>
      </div>

      <div class="row g-4">

        <!-- Technical -->
        <div class="col-lg-7">
          <div class="skillmatrix-box" data-aos="fade-right" data-aos-duration="1200">

            <div class="skillmatrix-label">Technical Skills</div>

            <div class="skillmatrix-grid">

              <div class="skillmatrix-card" data-aos="zoom-in"><img src="{{ asset('website/images/skills/azure.png') }}">
              </div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="50"><img
                  src="{{ asset('website/images/skills/powerbi.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="100"><img
                  src="{{ asset('website/images/skills/powerapps.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="150"><img
                  src="{{ asset('website/images/skills/powerplatform.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="200"><img
                  src="{{ asset('website/images/skills/m365.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="250"><img
                  src="{{ asset('website/images/skills/sharepoint.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="300"><img
                  src="{{ asset('website/images/skills/teams.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="350"><img
                  src="{{ asset('website/images/skills/tableau.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="400"><img
                  src="{{ asset('website/images/skills/security.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="450"><img
                  src="{{ asset('website/images/skills/onedrive.png') }}"></div>

             <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="50"><img
                  src="{{ asset('website/images/skills/agile.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="100"><img
                  src="{{ asset('website/images/skills/scrum.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="150"><img
                  src="{{ asset('website/images/skills/jira.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="200"><img
                  src="{{ asset('website/images/skills/project.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="250"><img
                  src="{{ asset('website/images/skills/visio.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="300"><img
                  src="{{ asset('website/images/skills/excel.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="350"><img
                  src="{{ asset('website/images/skills/googleanalytics.png') }}"></div>

            </div>

          </div>
        </div>

        <!-- Additional -->
        <div class="col-lg-5">
          <div class="skillmatrix-box" data-aos="fade-left" data-aos-duration="1200">

            <div class="skillmatrix-label">Additional Skills</div>

            <div class="skillmatrix-grid">
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="50"><img
                  src="{{ asset('website/images/skills/csm.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="100"><img
                  src="{{ asset('website/images/skills/smc.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="150"><img
                  src="{{ asset('website/images/skills/sdc.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="200"><img
                  src="{{ asset('website/images/skills/i4.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="250"><img
                  src="{{ asset('website/images/skills/gaiopm.png') }}"></div>
              <div class="skillmatrix-card" data-aos="zoom-in" data-aos-delay="300"><img
                  src="{{ asset('website/images/skills/acs.png') }}"></div>
             
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ===============>> About section start here <<================= -->
  <section class="about about--style1 section-tech-bg">
    <div class="container">
      <div class="about__wrapper">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5">
            <div class="about__thumb" data-aos="fade-right" data-aos-duration="800">
              <div class="about__thumb-inner">
                <div class="about__thumb-image floating-content">
                  <img class="dark" src="{{ asset('website/images/bg/6.png') }}" alt="about-image">
                  <div class="floating-content__top-left">
                    <div class="floating-content__item">
                      <h3 class="multicolor-static-text"> <span class="purecounter" data-purecounter-start="0"
                          data-purecounter-end="19">18</span>+
                        Years
                      </h3>
                      <p>Experience</p>
                    </div>
                  </div>
                  <div class="floating-content__bottom-right">
                    <div class="floating-content__item">
                      <h3 class="multicolor-static-text"> <span class="purecounter" data-purecounter-start="0"
                          data-purecounter-end="25">20K</span>K+
                      </h3>
                      <p>Professionals Trained</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="about__content" data-aos="fade-left" data-aos-duration="800">
              <div class="about__content-inner">
                <div class="section-header section-header--max18 mb-1">
                  <h2><span></span> <span class="multicolor-static-text"> About Me</span></h2>
                </div>
                <p class="mb-0">
                  I am a seasoned leader with over 15 years of expertise in technology consultancy, training, and
                  educational innovation. I bring a wealth of experience in driving digital transformation and
                  operational efficiency across diverse sectors. My career is marked by a deep specialization in Microsoft
                  technologies, including Azure, Power Platform, M365, SharePoint, and Teams, as well as advanced data
                  analytics with Power BI and Tableau.

                </p>
                <p class="mb-0">
                  I have a proven track record of leading teams to success, fostering a culture of continuous learning and
                  development, and integrating cutting-edge technology solutions to enhance productivity and learning
                  outcomes. My extensive certifications, including MCSE, MCSA, ITIL, and CSM, underscore my commitment to
                  excellence and professional growth.
                  {{-- Passionate about empowering organizations and individuals through technology, I strive to create
                  innovative solutions that meet the evolving needs of the digital landscape. My leadership style is
                  collaborative and results-driven, focused on delivering value and achieving strategic goals. --}}
                </p>
                <a href="{{ route('about') }}" class="trk-btn trk-btn--border trk-btn--primary1 mt-25">Explore My
                  Journey</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about__shape about__shape--style1">
      <span class="about__shape-item"><img src="{{ asset('website/images/about/2.png') }}" alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> About section start here <<================= -->

  <!-- ===============>> partner section start here <<================= -->
  <div class="partner partner--gradient">
    <div class="container">
      <div class="partner__wrapper">
        <div class="partner__slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://prod.mct.pvue2.com/assets/icons/MCTBadges.png" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://logodix.com/logo/2182047.jpg" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://solutionsreview.com/cloud-platforms/files/2019/06/oie_OkC1XJtADIPw.png"
                    alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://miro.medium.com/1*T59fnCvp71WqNeuytWGorA.png" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img
                    src="https://www.cyberyami.com/_next/image?url=https%3A%2F%2Fcyberyami-mern-bucket-prod-new.s3.ap-south-1.amazonaws.com%2FOqM6r_dvxdt7HG1TTIfF7.png&w=3840&q=75"
                    alt="partner logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> partner section end here <<================= -->

  <!-- ================= Experience Section Start ================= -->
  <section class="career-section experience-tech-bg" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
      <div class="career-wrapper">

        <!-- Heading -->
        <div class="section-heading text-center" data-aos="fade-up" data-aos-duration="1000">
          <h2 class="multicolor-static-text">Technical Skills & Experience</h2>
          <p>19+ years of expertise in Microsoft Technologies, Cloud Solutions, Corporate Training, and Digital
            Transformation.</p>
        </div>

        <div class="row">
          <!-- Additional Skills -->
          {{-- <div class="additional-skills" data-aos="fade-up" data-aos-duration="1200">
            <h4 class="box-title">Certifications</h4>

            <div class="skill-tags">
              <span>MCSA</span>
              <span>MCSE</span>
              <span>MCE</span>
              <span>MTA</span>
              <span>MOE</span>
              <span>MCT</span>
              <span>Azure Administrator</span>
              <span>M365 Enterprise Admin</span>
              <span>M365 Security</span>
              <span>Security Analyst</span>
            </div>
          </div> --}}
          <div class="col-lg-12">

            <div class="career-timeline">

              <!-- CARD -->
              <div class="timeline-card active" data-aos="fade-up" data-aos-delay="100">
                <span class="year">Dec 2023 - Present</span>
                <h5>Microsoft Technical Trainer - Community Lead</h5>
                <p>Mentoring trainers, promoting MCT opportunities, and building strong Microsoft trainer communities.</p>

                <div class="company-logo">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg">
                </div>
              </div>

              <!-- CARD -->
              <div class="timeline-card" data-aos="fade-up" data-aos-delay="200">
                <span class="year">Aug 2023 - Present</span>
                <h5>Sr. Instructor & Consultant</h5>
                <p>Corporate training & consultancy for overseas clients on Microsoft technologies and cloud platforms.
                </p>

                <div class="company-logo">
                  <img src="https://cdn-icons-png.flaticon.com/512/5968/5968672.png">
                </div>
              </div>

              <!-- CARD -->
              <div class="timeline-card" data-aos="fade-up" data-aos-delay="300">
                <span class="year">Aug 2019 - Aug 2022</span>
                <h5>Senior Technical Trainer - M365</h5>
                <p>Delivered onboarding, advanced training, documentation, labs, and enterprise support programs.</p>

                <div class="company-logo">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlOIxVal60vyjzPESlFT9sahbivSXv-WGWTg&s">
                </div>
              </div>

              <!-- CARD -->
              <div class="timeline-card" data-aos="fade-up" data-aos-delay="400">
                <span class="year">Apr 2016 - Jun 2017</span>
                <h5>Technical Consultant - O365 / SharePoint</h5>
                <p>Managed Office 365, SharePoint, workflows, migrations, and adoption.</p>

                <div class="company-logo">
                  <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png">
                </div>
              </div>

              <!-- CARD -->
              <div class="timeline-card" data-aos="fade-up" data-aos-delay="500">
                <span class="year">2010 - 2016</span>
                <h5>Senior Consultant Trainer – Microsoft Technologies</h5>
                <p>Provided global training & consultancy on SharePoint, Power BI, Azure Security.</p>

                <div class="company-logo">
                  <img src="https://cdn-icons-png.flaticon.com/512/5968/5968672.png">
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ================= Experience Section End ================= -->

  <!-- ===============>> feature section start here <<================= -->
  <section class="feature bg-color-2">
    <div class="container">
      <div class="feature__wrapper">
        <div class="section-heading text-center" data-aos="fade-up" data-aos-duration="1000">
          <h2 class="mb-15">
            <span class="multicolor-static-text">What I Deliver Expertise & Solutions</span>
          </h2>
          <p class="mb-0">
            Transforming learners into certified professionals and organizations into future-ready teams through
            Microsoft technologies, cloud solutions, AI adoption, and enterprise training.
          </p>
        </div>
        <div class="row g-5 align-items-center justify-content-between">

          <!-- Left Content -->
          <div class="col-md-4 col-lg-4">
            <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
              <div class="feature__content-inner">
                <!-- Nav Tabs -->
                <div class="feature__nav">
                  <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab" role="tablist">

                    <div class="nav-link active" data-bs-toggle="pill" data-bs-target="#feat-pills-one">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">Corporate Technical Training – Microsoft 365, Azure, Power BI,
                              Cybersecurity, AI Tools &
                              Productivity Solutions.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#feat-pills-two">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">Microsoft Azure & Cloud Upskilling – Azure fundamentals,
                              administration, security &
                              implementation training.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#feat-pills-three">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">AI & Copilot Readiness Programs – Copilot, ChatGPT & workflow
                              automation for smarter
                              teams.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#feat-pills-four">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">Data Analytics Training – Power BI, Excel Automation, Tableau,
                              SQL & dashboard reporting.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- Right Content -->
          <div class="col-md-4 col-lg-4">
            <div class="feature__thumb" data-aos="fade-left" data-aos-duration="800">
              <div class="feature__thumb-inner">

                <div class="tab-content">

                  <!-- 1 -->
                  <div class="tab-pane fade show active" id="feat-pills-one">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/1.png') }}" alt="">
                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <h4>20+</h4>
                          <p class="style2">Years Experience</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item d-flex align-items-center">
                          <h3>500+</h3>
                          <p class="ms-3 style2">Sessions Delivered</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 2 -->
                  <div class="tab-pane fade" id="feat-pills-two">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/2.png') }}" alt="">
                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <h4>Azure</h4>
                          <p class="style2">Cloud Expert</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item d-flex align-items-center">
                          <h3>99%</h3>
                          <p class="ms-3 style2">Reliable Solutions</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 3 -->
                  <div class="tab-pane fade" id="feat-pills-three">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/3.png') }}" alt="">
                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <h4>AI</h4>
                          <p class="style2">Future Ready</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item d-flex align-items-center">
                          <h3>Copilot</h3>
                          <p class="ms-3 style2">Automation Skills</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 4 -->
                  <div class="tab-pane fade" id="feat-pills-four">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/4.png') }}" alt="">
                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <h4>Power BI</h4>
                          <p class="style2">Analytics Expert</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item d-flex align-items-center">
                          <h3>Dashboards</h3>
                          <p class="ms-3 style2">Smart Decisions</p>
                        </div>
                      </div>
                    </div>
                  </div>



                </div><!-- tab-content -->

              </div>
            </div>
          </div>
          <!-- Left Content -->
          <div class="col-md-4 col-lg-4">
            <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
              <div class="feature__content-inner">
                <!-- Nav Tabs -->
                <div class="feature__nav">
                  <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab" role="tablist">


                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#feat-pills-five">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">Power Platform Solutions – Power Apps, Power Automate, Virtual
                              Agents & low-code
                              transformation.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#feat-pills-six">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">IT Certification Preparation – Microsoft, Azure, MCT pathway,
                              career growth & interview
                              readiness.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#feat-pills-seven">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">LMS & EdTech Enablement – Virtual classrooms, assessments,
                              learning journeys & engagement
                              models.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#feat-pills-eight">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <p class="features-content-p">Leadership & Soft Skills Development – Communication,
                              presentation, TTT & workplace
                              excellence.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> feature section end here <<================= -->

  <!-- ===============>> Service section start here <<================= -->
  <section class="service padding-top padding-bottom bg-color-3">
    <div class="section-header section-header--max50">
      <h2 class="mb-15 mt-minus-10"><span class="multicolor-static-text">What I Provide</span></h2>
      <p>I offer professional IT services, training, and digital solutions to help businesses grow, innovate, and succeed
        in the modern digital world.</p>
    </div>

    <div class="container">
      <div class="service__wrapper">
        <div class="row g-4 align-items-center">

          <!-- Service 1 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="service__item" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__thumb mb-30">
                  <div class="service__thumb-inner">
                    <i class="fas fa-cloud fa-3x"></i>
                  </div>
                </div>
                <div class="service__content">
                  <h5 class="mb-15">Microsoft Azure & Cloud Solutions</h5>
                  <p class="mb-0">Designing and deploying secure, scalable cloud solutions to help businesses move to the
                    cloud efficiently.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Service 2 -->
          <div class="col-sm-6 col-lg-4">
            <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__thumb mb-30">
                  <div class="service__thumb-inner">
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                  </div>
                </div>
                <div class="service__content">
                  <h5 class="mb-15">Corporate IT Training</h5>
                  <p class="mb-0">Delivering hands-on training in Microsoft technologies, cloud, cybersecurity, and data
                    analytics.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Service 3 -->
          <div class="col-sm-6 col-lg-4">
            <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__thumb mb-30">
                  <div class="service__thumb-inner">
                    <i class="fas fa-code fa-3x"></i>
                  </div>
                </div>
                <div class="service__content">
                  <h5 class="mb-15">Web & App Development</h5>
                  <p class="mb-0">Building modern, responsive websites and applications tailored to your business needs.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Service 4 -->
          <div class="col-sm-6 col-lg-4">
            <div class="service__item" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__thumb mb-30">
                  <div class="service__thumb-inner">
                    <i class="fas fa-shield-alt fa-3x"></i>
                  </div>
                </div>
                <div class="service__content">
                  <h5 class="mb-15">Cyber Security Solutions</h5>
                  <p class="mb-0">Protecting your digital assets with advanced security strategies and identity management
                    solutions.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Service 5 -->
          <div class="col-sm-6 col-lg-4">
            <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
              <div class="service__item-inner text-center">
                <div class="service__thumb mb-30">
                  <div class="service__thumb-inner">
                    <i class="fas fa-bullhorn fa-3x"></i>
                  </div>
                </div>
                <div class="service__content">
                  <h5 class="mb-15">Digital Marketing & SEO</h5>
                  <p class="mb-0">Boosting your online presence through SEO, social media, and result-driven digital
                    marketing strategies.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Service 6 -->
          <div class="col-sm-6 col-lg-4">
            <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
              <div class="service__item-inner text-center">
                <div class="service__thumb mb-30">
                  <div class="service__thumb-inner">
                    <i class="fas fa-chart-line fa-3x"></i>
                  </div>
                </div>
                <div class="service__content">
                  <h5 class="mb-15">Power Platform & Data Analytics</h5>
                  <p class="mb-0">Creating business insights using Power BI, Tableau, and automation with Power Apps &
                    Power Platform.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Shape Fix -->
    <div class="service__shape">
      <span class="service__shape-item">
        <img src="{{ asset('website/images/about/2.png') }}" alt="shape-icon">
      </span>
    </div>
  </section>
  <!-- ===============>> Service section end here <<================= -->

  <!-- ===============>> Testimonial section start here <<================= -->
  <section class="testimonial padding-top padding-bottom section-tech-bg">
    <div class="container">
      <div class="section-header d-md-flex align-items-center justify-content-between">
        <div class="section-header__content">
          <h2 class="mb-15 mt-minus-10"><span>What People</span> <span class="multicolor-static-text">Say About Me</span>
          </h2>
          <p class="mb-0">
            Feedback from professionals, clients, and learners who have worked with me across training, consulting, and
            digital transformation projects.
          </p>
        </div>
        <div class="section-header__action">
          <div class="swiper-nav swiper-nav--style1">
            <button class="swiper-nav__btn testimonial__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="swiper-nav__btn testimonial__slider-next active"><i
                class="fa-solid fa-angle-right"></i></button>
          </div>
        </div>
      </div>

      <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="testimonial__slider swiper">
          <div class="swiper-wrapper">

            <!-- Testimonial 1 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      Abhishek has an exceptional ability to simplify complex Microsoft technologies. His Azure and
                      Security training sessions were highly practical and helped our team implement solutions with
                      confidence.
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-designation">
                          <h6>Rahul Sharma</h6>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      We collaborated with Abhishek on a Microsoft 365 deployment project, and the results were
                      outstanding. Productivity improved significantly, and the transition was smooth and secure.
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-designation">
                          <h6>Priya Verma</h6>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      His expertise in Power Platform and data analytics helped us automate processes and gain better
                      insights into our business. Highly recommended for any digital transformation initiative.
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-designation">
                          <h6>Amit Singh</h6>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      Abhishek is not just a trainer but a true mentor. His sessions on cybersecurity and identity
                      governance gave us real-world insights that we could immediately apply.
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-designation">
                          <h6>Sneha Gupta</h6>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial 5 -->
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <p class="mb-0">
                      Working with Abhishek on cloud and modern workplace solutions was a game-changer for our
                      organization. His strategic approach and technical depth truly stand out.
                    </p>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-designation">
                          <h6>Vikas Mishra</h6>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Testimonial section end here <<================= -->


  <!-- ===============>> cta section start here <<================= -->
  <section class="cta cta--style1 padding-top padding-bottom of-hidden bg-color-3">
    <div class="container">
      <div class="cta__wrapper">
        <div class="row gx-4">
          <div class="col-md-5">
            <div class="cta__thumb">
              <img src="{{ asset('website/images/cta/1.png') }}" alt="cta-thumb">
            </div>
          </div>
          <div class="col-md-7">
            <div class="cta__content">
              <div class="cta__content-inner" data-aos="fade-left" data-aos-duration="1000">
                <h2>Let's Work Together on <span>Innovative Ideas</span></h2>
                <p>From web & app development to cloud, security, and Microsoft technologies —
                  let’s collaborate and create something impactful together.</p>
                <form class="cta-form form-subscribe" action="#">
                  <div class="input-group">
                    <input type="email" class="form-control form-control--style1" placeholder="Email Address">
                    <button class="trk-btn cta-btn trk-btn--primary2" type="submit">Submit</button>
                    <span class="input-group-btn">
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cta__shape">
      <span class="cta__shape-item cta__shape-item--1">
        <img src="{{ asset('website/images/cta/2.png') }}" alt="shape icon">
      </span>
      <span class="cta__shape-item cta__shape-item--2">
        <img src="{{ asset('website/images/cta/3.png') }}" alt="shape icon">
      </span>
      <span class="cta__shape-item cta__shape-item--3">
        <img src="{{ asset('website/images/cta/4.png') }}" alt="shape icon">
      </span>
    </div>
  </section>
  <!-- ===============>> cta section start here <<================= -->
@endsection