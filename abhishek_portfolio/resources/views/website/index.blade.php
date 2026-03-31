@extends('website.layouts.app')
@section('content')
  <!-- ===============>> Banner section start here <<================= -->
  <section class="banner banner--style1  bg--cover bg-color-3"
    style="background-image: url('{{ asset('website/images/bg/4.png') }}')">
    <div class="container">
      <div class="banner__wrapper">
        <div class="row gy-5 gx-4">
          <div class="col-lg-6 col-md-6">
            <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
              <h1 class="banner__content-heading">Hi, I'm Abhishek Kumar</h1>
              <p class="banner__content-moto">
                Modern Workplace Consultant, Microsoft Certified Trainer (MCT), and Founder of SpireTec Solutions &
                SpireWeb. We help businesses grow with cloud technologies, secure systems, and innovative digital
                solutions.
              </p>
              <div class="banner__content-btngroup">
                <a href="www.spiretecsolutions.com" class="trk-btn trk-btn--border trk-btn--primary1 trk-btn--arrow">Let's
                  Start Today
                  <span><i class="fa-solid fa-arrow-right"></i></span> </a>
                <a href="https://youtu.be/H1HbW4Lv_Hc?si=VVzWpUrIvHJ7t_S7" class="playbtn" data-fslightbox="">
                  <span class="playbtn__thumb"><i class="fa-solid fa-play"></i></span>
                  <span class="playbtn__content">Watch Video</span>
                </a>
              </div>
              <div class="banner__content-social">
                <p>Follow Us</p>
                <ul class="social">
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1 active"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="social__item">
                    <a href="signin.html" class="social__link social__link--style1"><i class="fab fa-twitter"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="banner__thumb">
              <img src="{{ asset('website/images/bg/5.png') }}" alt="banner-thumb">
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





  <!-- ===============>> partner section start here <<================= -->
  <div class="partner partner--gradient">
    <div class="container">
      <div class="partner__wrapper">
        <div class="partner__slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://prod.mct.pvue2.com/assets/icons/MCTBadges.png" style="height: 30px;" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://logodix.com/logo/2182047.jpg" style="height: 30px;" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://solutionsreview.com/cloud-platforms/files/2019/06/oie_OkC1XJtADIPw.png" style="height: 30px;" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://miro.medium.com/1*T59fnCvp71WqNeuytWGorA.png" style="height: 30px;" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://www.cyberyami.com/_next/image?url=https%3A%2F%2Fcyberyami-mern-bucket-prod-new.s3.ap-south-1.amazonaws.com%2FOqM6r_dvxdt7HG1TTIfF7.png&w=3840&q=75" style="height: 30px;" alt="partner logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> partner section end here <<================= -->





  <!-- ===============>> About section start here <<================= -->
  <section class="about about--style1 bg-color-2">
    <div class="container">
      <div class="about__wrapper">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <div class="about__thumb" data-aos="fade-right" data-aos-duration="800">
              <div class="about__thumb-inner">
                <div class="about__thumb-image floating-content">
                  <img class="dark" src="{{ asset('website/images/bg/6.png') }}" alt="about-image">
                  <div class="floating-content__top-left">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="10">10</span>
                        Years
                      </h3>
                      <p>Consulting Experience</p>
                    </div>
                  </div>
                  <div class="floating-content__bottom-right">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="25">25K</span>K+
                      </h3>
                      <p>Satisfied Students</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__content" data-aos="fade-left" data-aos-duration="800">
              <div class="about__content-inner">
                <div class="section-header section-header--max18 mb-1">
                  <h2>Know More About Me & <span>What I Do</span></h2>
                </div>
                <p class="mb-0">
                  Hello! I'm Abhishek Kumar, a Modern Workplace Consultant and Microsoft Certified Trainer (MCT) with a
                  passion for transforming businesses through technology. I specialize in cloud solutions, cybersecurity,
                  and digital transformation using Microsoft technologies.
                </p>
                <p class="mb-0">
                  As the founder of SpireTec Solutions and SpireWeb, We help organizations and individuals grow by
                  providing professional IT training, web development, and digital services. My goal is to deliver
                  practical, result-driven solutions that enhance productivity, security, and innovation.
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




  <!-- ===============>> feature section start here <<================= -->
  <section class="feature bg-color-4">
    <div class="container">
      <div class="feature__wrapper">
        <div class="row g-5 align-items-center justify-content-between">
          <div class="col-md-6 col-lg-5">
            <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
              <div class="feature__content-inner">
                <div class="section-header">
                  <h2 class="mb-15"><span>What I Offer</span> My Expertise & Services</h2>
                  <p class="mb-0">
                    Delivering modern IT solutions, professional training, and business-focused digital services to help
                    organizations grow, secure, and scale in today’s competitive world.
                  </p>
                </div>

                <div class="feature__nav">
                  <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <div class="nav-link active" id="feat-pills-one-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-one" role="tab" aria-controls="feat-pills-one" aria-selected="true">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Expert guidance in Microsoft technologies, cloud solutions, and modern workplace
                              transformation.</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nav-link" id="feat-pills-two-tab" data-bs-toggle="pill" data-bs-target="#feat-pills-two"
                      role="tab" aria-controls="feat-pills-two" aria-selected="false">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Professional training sessions designed for real-world skills and career growth.</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="nav-link" id="feat-pills-three-tab" data-bs-toggle="pill"
                      data-bs-target="#feat-pills-three" role="tab" aria-controls="feat-pills-three"
                      aria-selected="false">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Custom IT solutions including web development, app development, and digital marketing.
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nav-link" id="feat-pills-four-tab" data-bs-toggle="pill" data-bs-target="#feat-pills-four"
                      role="tab" aria-controls="feat-pills-four" aria-selected="false">
                      <div class="feature__item">
                        <div class="feature__item-inner">
                          <div class="feature__item-content">
                            <h6>Secure, scalable, and result-driven strategies for business success.</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="feature__thumb" data-aos="fade-left" data-aos-duration="800">
              <div class="feature__thumb-inner">
                <div class="tab-content" id="feat-pills-tabContent">
                  <div class="tab-pane fade show active" id="feat-pills-one" role="tabpanel"
                    aria-labelledby="feat-pills-one-tab" tabindex="0">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/1.png') }}" alt="Feature image">
                      <div class="floating-content__left-top floating-content__left-top--style2">
                        <div class="floating-content__item text-center p-20">
                          <img class="mb-15" src="{{ asset('website/images/feature/5.png') }}" alt="rating">
                          <p class="style2">Success Rate</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right floating-content__bottom-right--style2">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="24">25K</span>/7
                          </h3>
                          <p class="ms-3 style2">Online service</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="feat-pills-two" role="tabpanel" aria-labelledby="feat-pills-two-tab"
                    tabindex="0">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/2.png') }}" alt="Feature image">
                      <div class="floating-content__left-top">
                        <div class="floating-content__item  text-center p-20">
                          <img class="mb-15" src="{{ asset('website/images/feature/5.png') }}" alt="rating">
                          <p class="style2">Success Rate</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="24">25K</span>/7
                          </h3>
                          <p class="ms-3 style2">Online service</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="feat-pills-three" role="tabpanel" aria-labelledby="feat-pills-three-tab"
                    tabindex="0">
                    <div class="feature__image floating-content">
                      <img src="{{ asset('website/images/feature/3.png') }}" alt="Feature image">
                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <img class="mb-15" src="{{ asset('website/images/feature/5.png') }}" alt="rating">
                          <p class="style2">Success Rate</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="24">25K</span>/7
                          </h3>
                          <p class="ms-3 style2">Online service</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="feat-pills-four" role="tabpanel" aria-labelledby="feat-pills-four-tab"
                    tabindex="0">
                    <div class="feature__image floating-content">

                      <img src="{{ asset('website/images/feature/4.png') }}" alt="Feature image">
                      <div class="floating-content__left-top">
                        <div class="floating-content__item text-center p-20">
                          <img class="mb-15" src="{{ asset('website/images/feature/5.png') }}" alt="rating">
                          <p class="style2">Success Rate</p>
                        </div>
                      </div>
                      <div class="floating-content__bottom-right">
                        <div class="floating-content__item floating-content__item--style2 d-flex align-items-center">
                          <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="24">25K</span>/7
                          </h3>
                          <p class="ms-3 style2">Online service</p>
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




  <!-- ===============>> Service section start here <<================= -->
  <section class="service padding-top padding-bottom bg-color-2">
    <div class="section-header section-header--max50">
      <h2 class="mb-15 mt-minus-10"><span>My Services</span> What I Provide</h2>
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
                    <img class="dark" src="{{ asset('website/images/service/1.png') }}" alt="service-icon">
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
                    <img class="dark" src="{{ asset('website/images/service/2.png') }}" alt="service-icon">
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
                    <img class="dark" src="{{ asset('website/images/service/3.png') }}" alt="service-icon">
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
                    <img class="dark" src="{{ asset('website/images/service/4.png') }}" alt="service-icon">
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
                    <img class="dark" src="{{ asset('website/images/service/5.png') }}" alt="service-icon">
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
                    <img class="dark" src="{{ asset('website/images/service/6.png') }}" alt="service-icon">
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


  <!-- ===============>> Pricing section start here <<================= -->
  <section class="pricing padding-top padding-bottom bg-color-4">
    <div class="section-header section-header--max50">
      <h2 class="mb-15 mt-minus-10"><span>Plans</span> Training & Services</h2>
      <p>Flexible training and IT service plans designed to help individuals and businesses grow with modern technologies.
      </p>
    </div>

    <div class="container">
      <div class="pricing__wrapper">
        <div class="row g-4 align-items-center">

          <!-- Basic Plan -->
          <div class="col-md-6 col-lg-4">
            <div class="pricing__item" data-aos="fade-right" data-aos-duration="1000">
              <div class="pricing__item-inner">
                <div class="pricing__item-content">

                  <div class="pricing__item-top">
                    <h6 class="mb-15">Starter</h6>
                    <h3 class="mb-25">₹4,999<span>/Course</span></h3>
                  </div>

                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Basic IT Training Access
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Recorded Sessions
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Certificate of Completion
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Email Support
                      </li>
                    </ul>
                  </div>

                  <div class="pricing__item-bottom">
                    <a href="#" class="trk-btn trk-btn--outline">Get Started</a>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- Standard Plan -->
          <div class="col-md-6 col-lg-4">
            <div class="pricing__item" data-aos="fade-up" data-aos-duration="1000">
              <div class="pricing__item-inner active">
                <div class="pricing__item-content">

                  <div class="pricing__item-top">
                    <h6 class="mb-15">Professional</h6>
                    <h3 class="mb-25">₹9,999<span>/Course</span></h3>
                  </div>

                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Live Interactive Classes
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Unlimited Learning Access
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Hands-on Practical Projects
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        24/7 Support
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Career Guidance
                      </li>
                    </ul>
                  </div>

                  <div class="pricing__item-bottom">
                    <a href="#" class="trk-btn trk-btn--outline active">Choose Plan</a>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- Premium Plan -->
          <div class="col-md-6 col-lg-4">
            <div class="pricing__item" data-aos="fade-left" data-aos-duration="1000">
              <div class="pricing__item-inner">
                <div class="pricing__item-content">

                  <div class="pricing__item-top">
                    <h6 class="mb-15">Enterprise</h6>
                    <h3 class="mb-25">Custom<span>/Project</span></h3>
                  </div>

                  <div class="pricing__item-middle">
                    <ul class="pricing__list">
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Corporate Training Programs
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        IT Consulting & Solutions
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Web & App Development
                      </li>
                      <li class="pricing__list-item">
                        <span><img src="{{ asset('website/images/icon/check.svg') }}" alt="check" class="dark"></span>
                        Dedicated Support & Maintenance
                      </li>
                    </ul>
                  </div>

                  <div class="pricing__item-bottom">
                    <a href="#" class="trk-btn trk-btn--outline">Contact Now</a>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Pricing section end here <<================= -->




  <!-- ===============>> Team section start here <<================= -->
  <section class="team padding-top padding-bottom bg-color-2">
    <div class="section-header section-header--max50">
      <h2 class="mb-15 mt-minus-10">Meet Our <span>Core Team</span></h2>
      <p>A passionate team driving innovation, development, and digital transformation.</p>
    </div>

    <div class="container">
      <div class="team__wrapper">
        <div class="row g-4 align-items-center">

          <!-- Chitra Kumari -->
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="{{ asset('https://spireweb.co.in/assets/images/chitra.png') }}" style="height: 310px;" alt="Team Image">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="#" class="stretched-link">Chitra Kumari</a></h6>
                      <p class="mb-0">CEO</p>
                    </div>
                  </div>
                </div>
                <div class="team__item-shape">
                  <span class="team__item-shape1">
                    <img src="{{ asset('website/images/team/icon/1.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape2">
                    <img src="{{ asset('website/images/team/icon/2.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape3">
                    <img src="{{ asset('website/images/team/icon/3.png') }}" alt="shape-icon">
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- Abhishek Kumar -->
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="{{ asset('https://www.businessoutreach.in/wp-content/uploads/2024/04/Meet-Abhishek-Kumar-Defining-Corporate-Upskilling-Methods-With-SpireTec-Solutions.webp') }}" style="height: 310px;" alt="Team Image">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="#" class="stretched-link">Abhishek Kumar</a></h6>
                      <p class="mb-0">Founder & Technical Consultant</p>
                    </div>
                  </div>
                </div>
                <div class="team__item-shape">
                  <span class="team__item-shape1">
                    <img src="{{ asset('website/images/team/icon/1.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape2">
                    <img src="{{ asset('website/images/team/icon/2.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape3">
                    <img src="{{ asset('website/images/team/icon/3.png') }}" alt="shape-icon">
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- Ritish Tripathi -->
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="{{ asset('https://www.spiretecsolutions.com/uploads/ourMinds/17578255941291406711.png') }}" style="height: 310px;" alt="Team Image">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="#" class="stretched-link">Ritish Tripathi</a></h6>
                      <p class="mb-0">Senior Web Developer</p>
                    </div>
                  </div>
                </div>
                <div class="team__item-shape">
                  <span class="team__item-shape1">
                    <img src="{{ asset('website/images/team/icon/1.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape2">
                    <img src="{{ asset('website/images/team/icon/2.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape3">
                    <img src="{{ asset('website/images/team/icon/3.png') }}" alt="shape-icon">
                  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- Parvez -->
          <div class="col-sm-6 col-lg-3">
            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
              <div class="team__item-inner team__item-inner--shape">
                <div class="team__item-thumb team__item-thumb--style1">
                  <img src="{{ asset('website/images/team/3.png') }}" alt="Team Image">
                </div>
                <div class="team__item-content team__item-content--style1">
                  <div class="team__item-author team__item-author--style1">
                    <div class="team__item-authorinfo">
                      <h6 class="mb-1"><a href="#" class="stretched-link">Parvez</a></h6>
                      <p class="mb-0">Full Stack Developer</p>
                    </div>
                  </div>
                </div>
                <div class="team__item-shape">
                  <span class="team__item-shape1">
                    <img src="{{ asset('website/images/team/icon/1.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape2">
                    <img src="{{ asset('website/images/team/icon/2.png') }}" alt="shape-icon">
                  </span>
                  <span class="team__item-shape3">
                    <img src="{{ asset('website/images/team/icon/3.png') }}" alt="shape-icon">
                  </span>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Team section end here <<================= -->



  <!-- ===============>> Blog / Insights section start here <<================= -->
  <section class="blog padding-top padding-bottom bg-color-4">
    <div class="container">
      <div class="section-header d-md-flex align-items-center justify-content-between">
        <div class="section-header__content">
          <h2 class="mb-15 mt-minus-10"><span>Insights</span> & Expertise</h2>
          <p class="mb-0">
            Sharing knowledge, industry insights, and practical strategies on Microsoft technologies, cloud solutions,
            cybersecurity, and digital transformation.
          </p>
        </div>
        <div class="section-header__action">
          <div class="swiper-nav swiper-nav--style1">
            <button class="swiper-nav__btn blog__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="swiper-nav__btn blog__slider-next active"><i class="fa-solid fa-angle-right"></i></button>
          </div>
        </div>
      </div>

      <div class="blog__wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="blog__slider swiper">
          <div class="swiper-wrapper">

            <!-- Blog 1 -->
            <div class="swiper-slide">
              <div class="blog__item blog__item--style2">
                <div class="blog__item-inner">
                  <div class="blog__thumb">
                    <img src="{{ asset('website/images/blog/1.png') }}" alt="blog Images">
                  </div>

                  <div class="blog__content">
                    <div class="blog__meta">
                      <span class="blog__meta-tag blog__meta-tag--style1">Microsoft Azure</span>
                    </div>
                    <h5> <a href="#">Cloud Transformation with Azure</a> </h5>

                    <p class="mb-15">
                      Learn how organizations can leverage Microsoft Azure to modernize infrastructure, improve
                      scalability, and enhance security.
                    </p>

                    <div class="blog__writer">
                      <div class="blog__writer-designation">
                        <p class="mb-0">Abhishek Kumar</p>
                        <span>Tech Consultant</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Blog 2 -->
            <div class="swiper-slide">
              <div class="blog__item blog__item--style2">
                <div class="blog__item-inner">
                  <div class="blog__thumb">
                    <img src="{{ asset('website/images/blog/2.png') }}" alt="blog Images">
                  </div>

                  <div class="blog__content">
                    <div class="blog__meta">
                      <span class="blog__meta-tag blog__meta-tag--style1">Cyber Security</span>
                    </div>
                    <h5> <a href="#">Strengthening Security in Modern Workplace</a> </h5>

                    <p class="mb-15">
                      Discover best practices to secure your Microsoft 365 environment, protect identities, and prevent
                      cyber threats effectively.
                    </p>

                    <div class="blog__writer">
                      <div class="blog__writer-designation">
                        <p class="mb-0">Abhishek Kumar</p>
                        <span>Security Specialist</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Blog 3 -->
            <div class="swiper-slide">
              <div class="blog__item blog__item--style2">
                <div class="blog__item-inner">
                  <div class="blog__thumb">
                    <img src="{{ asset('website/images/blog/3.png') }}" alt="blog Images">
                  </div>

                  <div class="blog__content">
                    <div class="blog__meta">
                      <span class="blog__meta-tag blog__meta-tag--style1">Power Platform</span>
                    </div>
                    <h5> <a href="#">Boost Productivity with Power Platform</a> </h5>

                    <p class="mb-15">
                      Explore how Power BI, Power Apps, and Power Automate can streamline workflows and drive smarter
                      business decisions.
                    </p>

                    <div class="blog__writer">
                      <div class="blog__writer-designation">
                        <p class="mb-0">Abhishek Kumar</p>
                        <span>Power Platform Expert</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="#" class="trk-btn trk-btn--border trk-btn--primary1 mt-15">View More Insights</a>
      </div>
    </div>
  </section>
  <!-- ===============>> Blog section end here <<================= -->



  <!-- ===============>> Testimonial section start here <<================= -->
  <section class="testimonial padding-top padding-bottom bg-color-2">
    <div class="container">
      <div class="section-header d-md-flex align-items-center justify-content-between">
        <div class="section-header__content">
          <h2 class="mb-15 mt-minus-10">What People <span>Say About Me</span></h2>
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




  <!-- ===============>> FAQ section start here <<================= -->
  <section class="faq padding-top padding-bottom of-hidden bg-color-4">
    <div class="section-header section-header--max57">
      <h2 class="mb-15 mt-minus-10"><span>Frequently</span> Asked Questions</h2>
      <p>
        Have questions about training, consulting, or Microsoft technologies? Here are some common queries to help you
        understand how I can support your learning and business needs.
      </p>
    </div>

    <div class="container">
      <div class="faq__wrapper">
        <div class="row g-5 align-items-center justify-content-between">

          <!-- FAQ LEFT -->
          <div class="col-lg-6">
            <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
              <div class="row">

                <!-- Q1 -->
                <div class="col-12">
                  <div class="accordion__item">
                    <div class="accordion__header" id="faq1">
                      <button class="accordion__button" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody1"
                        aria-expanded="true">
                        <span class="accordion__button-content">What services do you offer?</span>
                        <span class="accordion__button-plusicon"></span>
                      </button>
                    </div>
                    <div id="faqBody1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body">
                        <p>
                          I provide professional training, consulting, and implementation services in Microsoft Azure,
                          Microsoft 365, Security, Power Platform, and cloud-based solutions.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Q2 -->
                <div class="col-12">
                  <div class="accordion__item">
                    <div class="accordion__header" id="faq2">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody2">
                        <span class="accordion__button-content">Do you provide corporate training?</span>
                        <span class="accordion__button-plusicon"></span>
                      </button>
                    </div>
                    <div id="faqBody2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body">
                        <p>
                          Yes, I conduct customized corporate training sessions for teams and organizations, focusing on
                          real-world use cases and hands-on practical learning.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Q3 -->
                <div class="col-12">
                  <div class="accordion__item">
                    <div class="accordion__header" id="faq3">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody3">
                        <span class="accordion__button-content">Which technologies do you specialize in?</span>
                        <span class="accordion__button-plusicon"></span>
                      </button>
                    </div>
                    <div id="faqBody3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body">
                        <p>
                          My expertise includes Microsoft Azure, Microsoft 365, Cyber Security, Identity & Access
                          Management, Power BI, Power Apps, and cloud-based digital transformation solutions.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Q4 -->
                <div class="col-12">
                  <div class="accordion__item">
                    <div class="accordion__header" id="faq4">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody4">
                        <span class="accordion__button-content">Can you help with cloud migration?</span>
                        <span class="accordion__button-plusicon"></span>
                      </button>
                    </div>
                    <div id="faqBody4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body">
                        <p>
                          Absolutely. I assist organizations in migrating their infrastructure and applications to the
                          cloud securely while ensuring performance and scalability.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Q5 -->
                <div class="col-12">
                  <div class="accordion__item">
                    <div class="accordion__header" id="faq5">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody5">
                        <span class="accordion__button-content">Do you offer online and offline training?</span>
                        <span class="accordion__button-plusicon"></span>
                      </button>
                    </div>
                    <div id="faqBody5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body">
                        <p>
                          Yes, I offer both online live sessions and offline classroom training depending on your
                          requirement and location.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Q6 -->
                <div class="col-12">
                  <div class="accordion__item border-0">
                    <div class="accordion__header" id="faq6">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqBody6">
                        <span class="accordion__button-content">How can I contact or work with you?</span>
                        <span class="accordion__button-plusicon"></span>
                      </button>
                    </div>
                    <div id="faqBody6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body">
                        <p>
                          You can reach out through the contact section of this website for consulting, training, or
                          collaboration opportunities.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- FAQ RIGHT IMAGE -->
          <div class="col-lg-6">
            <div class="faq__thumb" data-aos="fade-left" data-aos-duration="1000">
              <img class="dark" src="{{ asset('website/images/others/1.png') }}" alt="faq-thumb">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> FAQ section end here <<================= -->





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