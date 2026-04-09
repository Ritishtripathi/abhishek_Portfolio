@extends('website.layouts.app')
@section('content')
  <div class="stick_follow_icon">
  <ul>

    <!-- EMAIL -->
    <li>
      <a href="mailto:abhit.abhishek@gmail.com">
        <i class="fa-solid fa-envelope"></i>
      </a>
    </li>

    <!-- WHATSAPP -->
    <li>
      <a href="https://wa.me/919891811593" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
      </a>
    </li>

    <!-- LINKEDIN -->
    <li>
      <a href="https://www.linkedin.com/in/abhiitmct/" target="_blank">
        <i class="fa-brands fa-linkedin-in"></i>
      </a>
    </li>

  </ul>
  <p>Contact us</p>
</div>
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
                <a href="www.spiretecsolutions.com" class="trk-btn trk-btn--border trk-btn--primary1 trk-btn--arrow">Download CV
                  <span><i class="fa-solid fa-arrow-right"></i></span> </a>
                <a href="https://youtu.be/H1HbW4Lv_Hc?si=VVzWpUrIvHJ7t_S7" class="playbtn" data-fslightbox="">
                  <span class="playbtn__thumb"><i class="fa-solid fa-play"></i></span>
                  <span class="playbtn__content">Watch Video</span>
                </a>
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
                  <img src="https://prod.mct.pvue2.com/assets/icons/MCTBadges.png" style="height: 30px;"
                    alt="partner logo">
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
                  <img src="https://solutionsreview.com/cloud-platforms/files/2019/06/oie_OkC1XJtADIPw.png"
                    style="height: 30px;" alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img src="https://miro.medium.com/1*T59fnCvp71WqNeuytWGorA.png" style="height: 30px;"
                    alt="partner logo">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                  <img
                    src="https://www.cyberyami.com/_next/image?url=https%3A%2F%2Fcyberyami-mern-bucket-prod-new.s3.ap-south-1.amazonaws.com%2FOqM6r_dvxdt7HG1TTIfF7.png&w=3840&q=75"
                    style="height: 30px;" alt="partner logo">
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