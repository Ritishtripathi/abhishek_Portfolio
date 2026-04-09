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
  <section class="about about--style1 mt-5 bg-color-2">
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

@endsection