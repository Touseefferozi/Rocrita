@extends('layouts.master')

@section('content')
  <!-- First Banner Section Start -->
      <section class="first-banner-sec">
        <marquee scrollamount="25"><h1>Rocita</h1></marquee>
        <div class="container">
          <div class="row first-banner-slide r">
            <div class="col-lg-12">
              <div class="first-slide-img">
                <img src="rockrita/images/Untitled-3.png" alt="" />
                <div class="first-banner-txt">
                    <h4>THe Love Of Beauty</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="first-slide-img">
                <img src="rockrita/images/Untitled-3.png" alt="" />
                 <div class="first-banner-txt">
                    <h4>THe Love Of Beauty</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="first-slide-img">
                <img src="rockrita/images/Untitled-3.png" alt="" />
                 <div class="first-banner-txt">
                    <h4>THe Love Of Beauty</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- First Banner Section ENd -->

       <!--About Us Section Start-->
       <section class="about-us-sec">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="aboutus-txt" data-aos="fade-left" data-aos-duration="1000">
                           <h3>About Us</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                           standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                           type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                           essentially unchanged. </p>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           <a href="/about" class="theme-btn">Read More</a>
                       </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="about-us-img"  data-aos="fade-right" data-aos-duration="1000">
                           <img src="rockrita/images/about-img.jpg" alt="">
                      </div>
                   </div>
               </div>
           </div>
       </section>
          </section>
       <!--About Us Section End-->

      <!-- Second Banner Section Start -->
      <section class="second-banner-sec">
        <div class="container">
          <div class="row second-bannner-slider" data-aos="fade-right" data-aos-duration="1000">
            <div class="col-lg-4">
              <div class="second-banner-img">
                <img src="rockrita/images/second-img-1.png" alt=""/>
              </div>
              <div class="second-banner-txt">
                <h4>WIGS</h4>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="second-banner-img">
                <img src="rockrita/images/second-img-2.png" alt="" />
              </div>
              <div class="second-banner-txt">
                <h4>Beauty products</h4>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="second-banner-img">
                <img src="rockrita/images/second-img-3.png" alt="" />
              </div>
              <div class="second-banner-txt">
                <h4>CLOTHING</h4>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="second-banner-img">
                <img src="rockrita/images/second-img-2.png" alt="" />
              </div>
              <div class="second-banner-txt">
                <h4>Beauty products</h4>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- Second Banner Section End -->

      <!-- Products Section Start -->

      <section class="product-sec">
        <h3 data-aos="fade-down" data-aos-duration="1000">{{ $title }}</span></h3>
        <div class="container">
          <div class="row">
           @foreach ($products as $product)
            <div class="col-lg-3" data-aos="fade-right" data-aos-duration="1000">
              <div class="product-cart">
                <div class="product-img">
                  <img src="/product/{{$product->image}}" alt=""/>
                </div>
                <div class="product-txt">
                  <h4>{{ $product->name }}</h4>
                  <h6>{{ $product->price }}<del>-5999/-</del></h6>

                    <form  method="POST" action="/add">
                   <input type="hidden" name="product_id" value="{{ $product->id }}">
                   @csrf
                  <a href="/add" class="theme-btn">Add To Cart</a>


                    </form>

                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="prod-abslt">
          <img src="rockrita/images/prod-abslt-img.png" alt="" />
        </div>
      </section>




      <!-- Products Section End -->

      <!-- Spring Sale Section Start -->
      <section class="spring-sale-sec">
        <!-- <marquee scrollamount="25">Spring</marquee> -->
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-lg-6" data-aos="fade-down" data-aos-duration="1000">
              <div class="spring-sale-txt">
                <h4>spring sale</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud
                </p>
                <h5>20% off</h5>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Spring Sale Section End -->

      <!-- Best Seller Section Start -->
      <section class="best-seller-sec">
        <h3 data-aos="fade-down" data-aos-duration="1000">Best <span>Seller</span></h3>
        <div class="container">
          <div class="row">
            <div class="col-lg-3" data-aos="fade-right" data-aos-duration="1000">
              <div class="product-cart">
                <div class="product-img">
                  <img src="rockrita/images/prod-1.png" alt="" />
                </div>
                <div class="product-txt">
                  <h4>Product Name</h4>
                  <h6><del>$39.00</del>$39.00</h6>
                  <a href="#" class="theme-btn">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3" data-aos="fade-down" data-aos-duration="1000">
              <div class="product-cart">
                <div class="product-img">
                  <img src="rockrita/images/prod-2.png" alt="" />
                </div>
                <div class="product-txt">
                  <h4>Product Name</h4>
                  <h6><del>$39.00</del>$39.00</h6>
                  <a href="#" class="theme-btn">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="product-cart">
                <div class="product-img">
                  <img src="rockrita/images/prod-3.png" alt=""/>
                </div>
                <div class="product-txt">
                  <h4>Product Name</h4>
                  <h6><del>$39.00</del>$39.00</h6>
                  <a href="#" class="theme-btn">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3" data-aos="fade-left" data-aos-duration="1000">
              <div class="product-cart">
                <div class="product-img">
                  <img src="rockrita/images/prod-4.png" alt="" />
                </div>
                <div class="product-txt">
                  <h4>Product Name</h4>
                  <h6><del>$39.00</del>$39.00</h6>
                  <a href="#" class="theme-btn">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3 class="client-head" data-aos="fade-down" data-aos-duration="1000"><span>what client </span> say’s</h3>
        <div class="hair-abslt">
          <img src="rockrita/images/hair-abslt-img.png" alt="" />
        </div>
        <div class="seller-abslt">
          <img src="rockrita/images/prod-abslt-img.png" alt="" />
        </div>
      </section>
      <!-- Best Seller Section End -->

      <!-- What Our Client Say Section Start -->
      <section class="our-client-sec">
        <div class="container">
          <div class="row client-cart-slider" data-aos="fade-right" data-aos-duration="1000">
            <div class="col-lg-4">
              <div class="client-say-cart">
                <div class="client-data">
                  <h6>Lorem Ipsum</h6>
                  <h5>Doloremque</h5>
                  <ul>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                  </ul>
                  <img src="rockrita/images/client-img.png" alt="" />
                </div>
                <div class="client-txt">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod
                  </p>
                  <img src="rockrita/images/quotation-img.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="client-say-cart">
                <div class="client-data">
                  <h6>Lorem Ipsum</h6>
                  <h5>Doloremque</h5>
                  <ul>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                  </ul>
                  <img src="rockrita/images/client-img.png" alt="" />
                </div>
                <div class="client-txt">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod
                  </p>
                  <img src="rockrita/images/quotation-img.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="client-say-cart">
                <div class="client-data">
                  <h6>Lorem Ipsum</h6>
                  <h5>Doloremque</h5>
                  <ul>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                  </ul>
                  <img src="rockrita/images/client-img.png" alt="" />
                </div>
                <div class="client-txt">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod
                  </p>
                  <img src="rockrita/images/quotation-img.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="client-say-cart">
                <div class="client-data">
                  <h6>Lorem Ipsum</h6>
                  <h5>Doloremque</h5>
                  <ul>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                  </ul>
                  <img src="rockrita/images/client-img.png" alt="" />
                </div>
                <div class="client-txt">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod
                  </p>
                  <img src="rockrita/images/quotation-img.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- What Our Client Say Section End -->

@endsection



