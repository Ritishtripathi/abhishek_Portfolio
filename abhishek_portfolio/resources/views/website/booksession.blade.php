@extends('website.layouts.app')
@section('content')



<!-- ================> Page header start here <================== -->
<section class="page-header bg-color-1">
  <div class="container">
    <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
      <h2>Book A Session</h2>
      <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Book A Session</li>
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





<!-- ===============>> account start here <<================= -->
<section class="account padding-top padding-bottom">
  <div class="container">
    <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
      <div class="row g-4">
        <div class="col-12">
          <div class="account__content account__content--style1">

            <!-- account tittle -->
            <div class="account__header">
              <h2>Book A Seeion With Us</h2>
              <p>Ready to take the next step? Share a few details with us and our team will connect with you to guide, plan, and start your journey toward success.</p>
            </div>

          

            <!-- account form -->
            <form action="#" class="account__form needs-validation" novalidate="">
              <div class="row g-4">
                <div class="col-12">
                  <div>
                    <label for="first-name" class="form-label">Name</label>
                    <input class="form-control" type="text" id="first-name" placeholder="Enter your full name">
                  </div>
                </div>
               
                <div class="col-12">
                  <div>
                    <label for="account-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="account-email" placeholder="Enter your email"
                      required="">
                  </div>
                </div>

                 <div class="col-12">
                  <div>
                    <label for="account-email" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="account-email" placeholder="Enter your number"
                      required="">
                  </div>
                </div>
                
                 <div class="col-12">
                  <div>
                    <label for="account-email" class="form-label">Looking ?</label>
                    <input type="text" class="form-control" id="account-email" placeholder="enter your requirements"
                      required="">
                  </div>
                </div>
               
              </div>


              <button type="submit" class="trk-btn trk-btn--border trk-btn--primary1 d-block mt-4">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> account end here <<================= -->
@endsection