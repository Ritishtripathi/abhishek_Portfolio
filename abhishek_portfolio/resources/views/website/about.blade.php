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





  <!-- ===============>> Story section start here <<================= -->
  <div class="story padding-top bg-color-3">
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

  <!-- ===============>> About section start here <<================= -->
  <section class="about about--style1 bg-color-2">
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
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="19">19</span>+
                        Years
                      </h3>
                      <p>Experience</p>
                    </div>
                  </div>
                  <div class="floating-content__bottom-right">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="25">25K</span>K+
                      </h3>
                      <p>Satisfied Trainee</p>
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
                  <span class="sub-title">Professional Summary</span>
                  <h2>Transforming Learning<span> Through Technology</span></h2>
                </div>
                <p class="mb-0">
                  Microsoft Certified Trainer & Community Lead with 20+ years of experience in empowering businesses
                  through Microsoft 365, Azure, Security, Power Platform, SharePoint, Teams, Cybersecurity, and Agile
                  solutions. Delivering business-ready strategies that drive growth, productivity, and digital
                  transformation.
                </p>
                <p class="mb-0">
                  I specialize in helping organizations modernize their workplace, strengthen security, and adopt cloud
                  technologies with confidence. From corporate training and consulting to mentoring professionals and
                  leading communities, my focus is to create practical solutions that deliver measurable business impact.
                </p>
                <a href="#" class="trk-btn trk-btn--border trk-btn--primary1 mt-25">Explore My Journey</a>
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
  <!-- ==================== Core Competencies ==================== -->
  <section class="about-core-sec bg-color-4">
    <div class="container">
      <div class="about-head text-center" data-aos="fade-up">
        <span class="sub-title">Core Competencies</span>
        <h2>Skills That Drive Results</h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="100">
          <div class="about-card">
            <h5>EdTech Solutions</h5>
            <p>Enhancing learning experiences through smart educational technologies and Microsoft Certified Educator
              practices.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="200">
          <div class="about-card">
            <h5>Cloud Computing</h5>
            <p>Expert in Microsoft Azure security, cloud infrastructure, and secure enterprise solutions.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="300">
          <div class="about-card">
            <h5>Business Intelligence</h5>
            <p>Advanced analytics, dashboards, and decision-making solutions using Power BI & Tableau.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ==================== Certifications ==================== -->
  <section class="about-cert-sec bg-color-2">
    <div class="container">
      <div class="about-head text-center" data-aos="fade-up">
        <span class="sub-title">Certifications</span>
        <h2>Professional Credentials</h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="100">
          <div class="about-card">
            <h5>MCSA</h5>
            <p>Core expertise in IT systems, networking, and Microsoft environments.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="200">
          <div class="about-card">
            <h5>MCSE</h5>
            <p>Advanced capabilities in managing enterprise Microsoft technologies.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="300">
          <div class="about-card">
            <h5>MCE</h5>
            <p>Specialized in integrating Microsoft tools into education systems.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="300">
          <div class="about-card">
            <h5>MTA</h5>
            <p>Strong foundational technology knowledge.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-delay="300">
          <div class="about-card">
            <h5>MOE</h5>
            <p>High-level proficiency in Microsoft Office tools.</p>
          </div>
        </div>


      </div>
    </div>
  </section>


  <!-- ==================== Achievements ==================== -->
  <section class="about-achieve-sec bg-color-4">
    <div class="container">
      <div class="about-head text-center" data-aos="fade-up">
        <span class="sub-title">Achievements</span>
        <h2>Impact & Recognition</h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
          <div class="about-card">
            <h5>Regional Projects</h5>
            <p>Successfully led multiple regional projects integrating Microsoft technologies into education systems.</p>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
          <div class="about-card">
            <h5>Training Excellence</h5>
            <p>Recognized for training excellence with strong adoption rates of Microsoft solutions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==================== CTA ==================== -->
  <section class="cta-section bg-color-4 padding-top padding-bottom">
    <div class="container text-center">
      <span class="sub-title">Let's Connect</span>

      <h2>Ready To Build The Future?</h2>
      <p>
        Whether you need training, consultancy, or Microsoft solutions,
        let’s create meaningful transformation together.
      </p>
      <a href="{{ route('contact') }}" class="cta-about-btn cta-about-btn--primary1">Contact Now</a>
    </div>
  </section>
  <!-- ===============>> feature section start here <<================= -->
  <section class="feature bg-color-4">
    <div class="container">
      <div class="feature__wrapper">
        <div class="row g-5 align-items-center justify-content-between">

          <!-- Left Content -->
          <div class="col-md-6 col-lg-5">
            <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
              <div class="feature__content-inner">

                <div class="section-header">
                  <h2 class="mb-15"><span>What I Deliver</span> Expertise & Solutions</h2>
                  <p class="mb-0">
                    Helping businesses modernize operations, strengthen security, and accelerate growth through Microsoft
                    technologies, cloud transformation, and professional training.
                  </p>
                </div>

                <div class="feature__nav">
                  <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab" role="tablist">

                    <div class="nav-link active" id="feat-pills-one-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-one">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Microsoft 365, SharePoint, Teams, and Power Platform solutions for modern workplaces.</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" id="feat-pills-two-tab" data-bs-toggle="pill" data-bs-target="#feat-pills-two">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Azure cloud, security, governance, and scalable infrastructure for business growth.</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" id="feat-pills-three-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-three">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Corporate training, certification guidance, and hands-on workshops for teams &
                              professionals.</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" id="feat-pills-four-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-four">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Digital transformation strategies focused on productivity, automation, and measurable
                              results.</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- Right Images -->
          <div class="col-md-6 col-lg-6">
            <div class="feature__thumb" data-aos="fade-left" data-aos-duration="800">
              <div class="feature__thumb-inner">

                <div class="tab-content" id="feat-pills-tabContent">

                  <!-- Tab 1 -->
                  <div class="tab-pane fade show active" id="feat-pills-one">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/1.png') }}" alt="Modern Workplace">

                      <div class="floating-content__left-top floating-content__left-top--style2">
                        <div class="floating-content__item text-center p-20">
                          <h4>20+</h4>
                          <p class="style2">Years Experience</p>
                        </div>
                      </div>

                      <div class="floating-content__bottom-right floating-content__bottom-right--style2">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3>500+</h3>
                          <p class="ms-3 style2">Projects & Sessions</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab 2 -->
                  <div class="tab-pane fade" id="feat-pills-two">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/2.png') }}" alt="Cloud Security">

                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <h4>Azure</h4>
                          <p class="style2">Cloud Expert</p>
                        </div>
                      </div>

                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3>99%</h3>
                          <p class="ms-3 style2">Reliable Solutions</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab 3 -->
                  <div class="tab-pane fade" id="feat-pills-three">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/3.png') }}" alt="Training">

                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <h4>1000+</h4>
                          <p class="style2">Learners Guided</p>
                        </div>
                      </div>

                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3>Live</h3>
                          <p class="ms-3 style2">Workshops & Coaching</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab 4 -->
                  <div class="tab-pane fade" id="feat-pills-four">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/4.png') }}" alt="Digital Growth">

                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <h4>Growth</h4>
                          <p class="style2">Business Focused</p>
                        </div>
                      </div>

                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3>24/7</h3>
                          <p class="ms-3 style2">Support Mindset</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div><!-- tab-content -->

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Shapes -->
    <div class="feature__shape">
      <span class="feature__shape-item feature__shape-item--1">
        <img src="{{ asset('website/images/about/shape/1.png') }}" alt="shape-icon">
      </span>
      <span class="feature__shape-item feature__shape-item--2">
        <img src="{{ asset('website/images/about/shape/2.png') }}" alt="shape-icon">
      </span>
      <span class="feature__shape-item feature__shape-item--3">
        <img src="{{ asset('website/images/about/shape/3.png') }}" alt="shape-icon">
      </span>
      <span class="feature__shape-item feature__shape-item--4">
        <img src="{{ asset('website/images/about/shape/4.png') }}" alt="shape-icon">
      </span>
    </div>
  </section>
  <!-- ===============>> feature section end here <<================= -->


@endsection