@extends('layouts.master')

@section('content')


    <!-- start bg-home-slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/img-home-slider.png') }}" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/img-home-slider.png') }}" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/img-home-slider.png') }}" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end bg-home-slider -->

    <!-- start slider 2 -->

    <!-- <div class="container">
                  <div class="owl-carousel owl-theme">
                      <div class="item">
                          <a href="">
                              <img src="{{ asset('assets/images/elec-slider-1.png') }}" alt="">
                              <p>Television</p>
                          </a>
                      </div>
                      <div class="item">
                          <a href="">
                              <img src="{{ asset('assets/images/elec-slider-2.png') }}" alt="">
                              <p>Washing Machines</p>
                          </a>
                      </div>
                      <div class="item">
                          <a href="">
                              <img src="{{ asset('assets/images/elec-slider-3.png') }}" alt="">
                              <p>American Style Fridge
                                  Freezers</p>
                          </a>
                      </div>
                      <div class="item">
                          <a href="">
                              <img src="{{ asset('assets/images/elec-slider-4.png') }}" alt="">
                              <p>Dishwashers</p>
                          </a>
                      </div>
                      <div class="item">
                          <a href="">
                              <img src="{{ asset('assets/images/elec-slider-5.png') }}" alt="">
                              <p>Fridge Freezers</p>
                          </a>
                      </div>
                      <div class="item">
                          <a href="">
                              <img src="{{ asset('assets/images/elec-slider-6.png') }}" alt="">
                              <p>Hobs</p>
                          </a>
                      </div>
                  </div>
              </div> -->

    <section class="sec-swiber" dir="rtl">
        <!-- line-swiber-one -->
        <div class="container">
            <div class="enwan-swiber">
                <a href="productPage.html">
                    <h5>View all</h5>
                </a>
                <h3>Our Collections</h3>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/elec-slider-1.png') }}" alt="" />
                            <p>Television</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/elec-slider-2.png') }}" alt="" />
                            <p>Washing Machines</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/elec-slider-3.png') }}" alt="" />
                            <p>American Style Fridge Freezers</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/elec-slider-4.png') }}" alt="" />
                            <p>Dishwashers</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/elec-slider-5.png') }}" alt="" />
                            <p>Fridge Freezers</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/elec-slider-6.png') }}" alt="" />
                            <p>Hobs</p>
                        </a>
                    </div>
                    <!-- <div class="swiper-slide">Slide 8</div> -->
                    <!-- <div class="swiper-slide">Slide 9</div> -->
                </div>
                <!-- btn-next-prev -->
                <div class="swiper-button-next">
                    <!-- <i class="fa-solid fa-angle-left"></i> -->
                </div>
                <div class="swiper-button-prev">
                    <!-- <i class="fa-solid fa-angle-right"></i> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- end slider 2 -->
    <div id="app">

    <!-- start section Deal of the weak -->
        <feature-product></feature-product>
    {{-- <section class="Deal-of-weak">
        <div class="container">
            <div class="enwan-Deal">
                <h3>Deal Of The Week</h3>
            </div>
            <div class="Deal-img-text-all">
                <div class="Deal-img">
                    <img src="{{ asset('assets/images/img-monitor.png') }}"alt= />
                </div>
                <div class="Deal-text">
                    <div class="enwan-deal-text">
                        <h3>
                            ARROW UE55AU9000KXXU 55" UHD 4K HDR Smart TV Dynamic Crystal
                            Colour with Motion Xcelerator Turbo and Object Tracking Sound
                            LITE
                        </h3>
                        <p>
                            <span class="change-color-2">ARROW</span> <span>/</span>
                            <span>SKU: UE55AU9000KXXU</span>
                        </p>
                    </div>
                    <div class="price text-flex">
                        <p class="change-color">Price:</p>
                        <p style="color: #e91c23">SAR 529</p>
                    </div>
                    <div class="Available text-flex">
                        <p class="change-color">Available:</p>
                        <p class="change-color-2">Dispatched Within 5 Days.</p>
                    </div>
                    <div class="Check text-flex">
                        <p><i class="fa-solid fa-check"></i></p>
                        <p class="change-color-2">5 Year Warranty</p>
                    </div>
                    <div class="Quantity text-flex">
                        <p class="change-color">Quantity</p>
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                    <div class="btn-Deal">
                        <a href="login.html">
                            Add to cart
                        </a>
                        <a href="./payment.html">
                            Buy now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end section Deal of the weak -->

    <!-- start section our product -->
    {{-- <section class="sec-our-product">
        <div class="container">
            <div class="enwan-Deal">
                <h3>Our Products</h3>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <a href="productPage.html">
                        <img src="{{ asset('assets/images/img-labtop.png') }}"alt= />
                        <p>
                            Brand ATC Resolution 720p Connectivity Technology USB, HDMI LED
                            display technology - Black color
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR 529</p>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

        <products-grid></products-grid>
    </div>
    <!-- end section our product -->

    <!-- start section our favourite -->
    <section class="sec-swiber" dir="rtl">
        <!-- line-swiber-one -->
        <div class="container">
            <div class="enwan-Deal">
                <h3 style="text-align: left;">Our Favourite Brands</h3>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/img-slider-product-6') }}.png" alt="" />
                            <p>Samsung</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/img-slider-product-5') }}.png" alt="" />
                            <p>Hotpoint</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/img-slider-product-4') }}.png" alt="" />
                            <p>Liebherr</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/img-slider-product-3') }}.png" alt="" />
                            <p>Sony</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/img-slider-product-2') }}.png" alt="" />
                            <p>Neff</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="productPage.html">
                            <img src="{{ asset('assets/images/img-slider-product-1') }}.png" alt="" />
                            <p>Bosh</p>
                        </a>
                    </div>
                    <!-- <div class="swiper-slide">Slide 8</div> -->
                    <!-- <div class="swiper-slide">Slide 9</div> -->
                </div>
                <!-- btn-next-prev -->
                <div class="swiper-button-next">
                    <!-- <i class="fa-solid fa-angle-left"></i> -->
                </div>
                <div class="swiper-button-prev">
                    <!-- <i class="fa-solid fa-angle-right"></i> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- end section our favourite -->

    <!-- start section NewsLetter -->
    <section class="Newsletter">
        <h3>Newsletter</h3>
        <p>Subscribe to our newsletter for our latest deals on all your favourite appliances.</p>
        <div class="input-btn-newsletter">
            <input type="email" placeholder="Your email">
            <button>Subscribe</button>
        </div>
    </section>
    <!-- end section NewsLetter -->

    <!-- start section delivery -->
    <section class="Delivery">
        <div class="container">
            <div class="small-box-all">
                <div class="small-box">
                    <div class="img-smallbox">
                        <img src="{{ asset('assets/images/small-img-footer-1') }}.png" alt="">
                    </div>
                    <div class="text-small-box">
                        <p class="change-color-enwan">Free Delivery</p>
                        <p>Free delivery available on all large
                            appliances over £250.
                        </p>
                    </div>
                </div>
                <div class="small-box">
                    <div class="img-smallbox">
                        <img src="{{ asset('assets/images/small-img-footer-2') }}.png" alt="">
                    </div>
                    <div class="text-small-box">
                        <p class="change-color-enwan">Looking for help?</p>
                        <a href="tel:+966502211697">Call: + 966502211697</a>
                        <a href="tel:966506792468">Call: + 966506792468</a>
                        <a href="tel:966506591697">Call: + 966506591697</a>
                    </div>
                </div>
                <div class="small-box">
                    <div class="img-smallbox">
                        <img src="{{ asset('assets/images/small-img-footer-3') }}.png" alt="">
                    </div>
                    <div class="text-small-box">
                        <p class="change-color-enwan">Have a question?</p>
                        <p>Email us on: <a href="mailto:aswarjeddah1@gmail.com">aswarjeddah1@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="small-box">
                    <div class="img-smallbox">
                        <img src="{{ asset('assets/images/small-img-footer-4') }}.png" alt="">
                    </div>
                    <div class="text-small-box">
                        <p class="change-color-enwan">Secure payments</p>
                        <p>Shop with confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section delivery -->
@endsection
