@extends('website.layouts.app')
@section('content')

  <!-- ================> Page header start here <================== -->
  <section class="page-header bg-color-1">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Contact Us</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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





  <!-- ===============>> Contact section start here <<================= -->
  <div class="contact padding-top padding-bottom ">
    <div class="container">
      <div class="contact__wrapper">
        <div class="row g-5">
          <div class="col-md-5">
            <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
              <div class="contact__social">
                <h3>let’s <span>get in touch</span>
                  with us</h3>

              </div>
              <div class="contact__details">
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><i class="fas fa-phone"></i></span>
                    </div>
                    <div class="contact__item-content">
                      <p>
                        +91 98918 11593
                      </p>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1100">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><i class="fas fa-envelope"></i></span>
                    </div>
                    <div class="contact__item-content">
                      <p>
                        abhiit.abhishek@gmail.com
                      </p>
                    </div>
                  </div>
                </div>
                <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                  <div class="contact__item-inner">
                    <div class="contact__item-thumb">
                      <span><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <div class="contact__item-content">
                      <p>
                        Greater Noida West, Uttar Pradesh,<br>India
                      </p>
                    </div>
                  </div>
                </div>
                <ul class="social" data-aos="fade-right">

                  <!-- WHATSAPP BUTTON -->
                  <li class="social__item">
                    <a href="https://wa.me/919891811593" target="_blank" class="hire-btn whatsapp-btn">
                      <i class="fa-brands fa-whatsapp"></i> WhatsApp Me
                    </a>
                  </li>

                  <!-- LINKEDIN BUTTON -->
                  <li class="social__item">
                    <a href="https://www.linkedin.com/in/abhiitmct/" target="_blank" class="hire-btn linkedin-btn">
                      <i class="fa-brands fa-linkedin-in"></i> Connect
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="contact__form">
              <form action="/" data-aos="fade-left" data-aos-duration="1000">
                <div class="row g-4">
                  <div class="col-12">
                    <div>
                      <label for="name" class="form-label">Name</label>
                      <input class="form-control" type="text" id="name" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="email" class="form-label">Email</label>
                      <input class="form-control" type="email" id="email" placeholder="Email here">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="email" class="form-label">Contact</label>
                      <input class="form-control" type="text" id="email" placeholder="Contact here">
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="textarea" class="form-label">Message</label>
                      <input class="form-control" type="text" id="email" placeholder="Write your requirement here.">
                    </div>
                  </div>
                </div>
                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary1 mt-4 d-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> Contact section start here <<================= -->
@endsection