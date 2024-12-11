@extends('layouts.master')
@section('content')
 <!-- Inner Banner Section Start -->
    <section class="inner-banner-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-banner-txt">
              <h3>Contact Us</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Inner Banner Section End -->

    <!-- Contact Us Section Start -->
    <section id="contact-us" class="contact-us section">
      <div class="container">
        <div class="contact-head">
          <div class="row">
            <div class="col-lg-12 col-12">
              <div class="form-main">
                <div class="title">
                  <h4>Contact Us</h4>
                  <h3>Write us a message</h3>
                </div>
                <form class="form">
                  <input type="hidden">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="form-group">
                        <label>Your Name<span>*</span></label>
                        <input name="name" type="text" placeholder="" required="">
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="form-group">
                        <label>Your Subjects<span>*</span></label>
                        <input name="subject" type="text" placeholder="" required="">
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="form-group">
                        <label>Your Email<span>*</span></label>
                        <input name="email" type="email" placeholder="" required="">
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="form-group">
                        <label>Your Phone<span>*</span></label>
                        <input name="phone" type="text" placeholder="" required="">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group message">
                        <label>Your message<span>*</span></label>
                        <textarea name="message" placeholder="" required=""></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group button">
                        <button type="submit" class="theme-btn">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Section ENd -->

@endsection
