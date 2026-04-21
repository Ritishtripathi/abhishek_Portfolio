@extends('website.layouts.app')
@section('content')

  <!-- ================> Page header start here <================== -->
  <section class="page-header bg-color-1">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>About Us</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1">
          <img src="{{ asset('website/images/icon/page-header/1.png') }}" alt="shape-icon">
        </span>

        <span class="page-header__shape-item page-header__shape-item--2">
          <img src="{{ asset('website/images/icon/page-header/2.png') }}" alt="shape-icon">
        </span>

        <span class="page-header__shape-item page-header__shape-item--3">
          <img src="{{ asset('website/images/icon/page-header/3.png') }}" alt="shape-icon">
        </span>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->





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

  <!-- ===============>> Story section start here <<================= -->
  <div class="story padding-top mb-5 bg-color-3">
    <div class="container" data-aos="fade-up" data-aos-duration="800">
      <div class="story__wrapper">
        <div class="story__thumb">
          <div class="story__thumb-inner">
            <img src="https://www.gemxit.au/images/bg/2025/MCT-Banner.png" alt="story-image">
            <div class="story__thumb-playbtn">
              <a href="https://youtu.be/tx5FzwfXD7Q?si=8HUpBUvA7Gfu2G_I" data-fslightbox=""><i
                  class="fa-solid fa-circle-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> Story section end here <<================= -->

  <!-- ================= CERTIFICATIONS SHOWCASE ================= -->
  <section class="certx-section bg-color-2">
    <div class="container">

      <div class="certx-head text-center" data-aos="fade-up" data-aos-duration="1000">
      </div>

      <!-- Featured -->
      <div class="certx-featured" data-aos="zoom-in-up" data-aos-duration="1200">
        <div class="certx-featured-badge" data-aos="flip-left" data-aos-delay="200">
          <img src="{{ asset('website/images/certifications/mct.png') }}" alt="MCT">
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

    <!-- ================= Experience Section Start ================= -->
  <section class="career-section bg-color-3">
    <div class="container">
      <div class="career-wrapper">

        <!-- Heading -->
        <div class="section-heading text-center" data-aos="fade-up" data-aos-duration="1000">
          <h2 class="multicolor-static-text">Technical Skills & Experience</h2>
          <p>19+ years of expertise in Microsoft Technologies, Cloud Solutions, Corporate Training, and Digital
            Transformation.</p>
        </div>

        <div class="row g-5 align-items-start">

          <!-- Left Side Skills -->
          {{-- <div class="col-lg-6">
            <!-- SKILL GRID -->
            <div class="skilltree-wrap">

              <!-- Left Column -->
              <div class="skilltree-group" data-aos="fade-right">
                <h4 class="box-title">Technical Skills</h4>

                <div class="skilltree-tags">
                  <span>Azure Security</span>
                  <span>Cloud Solutions</span>
                  <span>Data Management</span>
                  <span>Power BI</span>
                  <span>Business Analytics</span>
                  <span>Tableau</span>
                  <span>Power Apps</span>
                  <span>Power Platform</span>
                  <span>M365</span>
                  <span>SharePoint</span>
                  <span>MS Teams</span>
                  <span>OneDrive</span>
                  <span>Planner</span>
                  <span>Yammer</span>
                  <span>Delve</span>
                  <span>Sway</span>
                </div>
              </div>

              <!-- Right Column -->
              <div class="skilltree-group mt-3" data-aos="fade-left">
                <h4 class="box-title">Additional Skills</h4>

                <div class="skilltree-tags">
                  <span>ITIL Foundation</span>
                  <span>CSM</span>
                  <span>Agile</span>
                  <span>Scrum</span>
                  <span>Project Management</span>
                  <span>CompTIA Project+</span>
                  <span>COBIT 5</span>
                  <span>JIRA</span>
                  <span>MS Project</span>
                  <span>Visio</span>
                  <span>Excel VBA</span>
                  <span>Google Analytics</span>
                  <span>Linux</span>
                  <span>Windows Server</span>
                  <span>Mac OS</span>
                </div>
              </div>

            </div>

            <!-- Additional Skills -->
            <div class="additional-skills" data-aos="fade-up" data-aos-duration="1200">
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
            </div>

          </div> --}}

          <!-- Right Side Timeline -->
          <div class="col-lg-12">
            <div class="career-timeline">

              <div class="timeline-card active" data-aos="fade-up" data-aos-duration="900">
                <span class="year">Dec 2023 - Present</span>
                <h5>Microsoft Technical Trainer - Community Lead</h5>
                <p></p>
                <p>Mentoring trainers, promoting MCT opportunities, and building strong Microsoft trainer communities.</p>
              </div>

              <div class="timeline-card" data-aos="fade-up" data-aos-duration="1000">
                <span class="year">Aug 2023 - Present</span>
                <h5>Sr. Instructor & Consultant</h5>
                <p>Corporate training & consultancy for overseas clients on Microsoft technologies and cloud platforms.
                </p>
              </div>

              <div class="timeline-card" data-aos="fade-up" data-aos-duration="1100">
                <span class="year">Aug 2019 - Aug 2022</span>
                <h5>Senior Technical Trainer - M365</h5>
                <p>Delivered onboarding, advanced training, technical documentation, labs, and enterprise support
                  programs.</p>
              </div>

              <div class="timeline-card" data-aos="fade-up" data-aos-duration="1200">
                <span class="year">Apr 2016 - Jun 2017</span>
                <h5>Technical Consultant - O365 / SharePoint</h5>
                <p>Appflow Solutions Pvt Ltd</p>
                <p>Managed Office 365, SharePoint administration, automation workflows, migrations, and user adoption.</p>
              </div>

              <div class="timeline-card" data-aos="fade-up" data-aos-duration="1300">
                <span class="year">2010 - 2016</span>
                <h5>Senior Consultant Trainer – Microsoft Technologies</h5>
                <p>Koenig Solutions Ltd</p>
                <p>Provided global training & consultancy on SharePoint, Power BI, Office 365, Azure Security, and more.
                </p>
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
    </div>

  </section>
  <!-- =================  & Experience Section End ================= -->
  

  <!-- ===============>> cta section start here <<================= -->
  <section class="cta cta--style1 padding-top padding-bottom of-hidden bg-color-2">
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