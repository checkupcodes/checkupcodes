@extends('frontend.app')
@section('main')
    <div class="offcanvas offcanvas-end" id="offcanvas-header">

        <div class="offcanvas-header">
            <!-- Header Logo Start -->
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('frontend/assets/images') }}/logo.png" alt="">
                </a>
            </div>
            <!-- Header Logo End -->
            <button type="button" class="btn-close text-reset mobilemenu-close" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="offcanvas-body">
            <!-- mobile menu navigation start -->
            <nav>
                <ul class="mobile-menu">
                    <li class="menu-item-has-children">
                        <a href="#">HOME</a>
                        <ul class="dropdown">
                            <li><a href="index.html">Home One </a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                            <li><a href="index-3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">SERVICE</a>
                        <ul class="dropdown">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">PORTFOLIO</a>
                        <ul class="dropdown">
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">TEAM</a>
                        <ul class="dropdown">
                            <li><a href="team-members.html">Team Members</a></li>
                            <li><a href="member-details.html">Member Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="#">BLOG</a>
                        <ul class="dropdown">
                            <li><a href="blog.html">Blog Standard</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">CONTACT US </a></li>
                </ul>
            </nav>
            <!-- mobile menu navigation end -->
        </div>

    </div>
    <!-- Slider Section End -->
    <div class="slider-section">
        <div class="swiper sliderone animation-style-01">
            <div class="swiper-wrapper">

                <div class="swiper-slide ">
                    <!-- Single Slider Start -->
                    <div class="slingle-slider single-slider-three overlay slider-bg-image" data-bg-color="#E9EDF4"
                        data-bg-image="{{ asset('frontend/assets/images') }}/slider/01_home_01.png">
                        <span class="shape shape-11 layery" data-speed="2">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-11.png" alt="Shape">
                        </span>
                        <span class="shape shape-seven">
                            <img src="{{ asset('frontend/assets/images') }}/slider/circle-three.png" alt="Shape">
                        </span>
                        <span class="shape shape-12 layer" data-speed="2">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-5.png" alt="Shape">
                        </span>
                        <span class="shape shape-13">
                            <img src="{{ asset('frontend/assets/images') }}/slider/circle-six.png" alt="Shape">
                        </span>
                        <div class="shape shape-14">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-12.png" alt="Shape">
                        </div>
                        <div class="shape shape-15">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-13.png" alt="Shape">
                        </div>
                        <div class="shape shape-16">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-14.png" alt="Shape">
                        </div>
                        <div class="shape shape-17">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-15.png" alt="Shape">
                        </div>
                        <div class="shape shape-18">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-16.png" alt="Shape">
                        </div>
                        <div class="slider-content-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 align-self-center">
                                        <!-- Slider Content Start -->
                                        <div class="slider-content">
                                            <span class="subtitle">We Are ENGINEERS</span>
                                            <h2 class="title">Software Sales <br> and Consulting</h2>
                                            <p class="text">Innovate on the go with our mobile solutions, Empower your
                                                desktop experience with our software</p>
                                            <a href="service-details.html" class="btn btn-style-one"> <span>Read
                                                    More</span> </a>
                                        </div>
                                        <!-- Slider Content End -->
                                    </div>
                                    <div class="col-xl-6 col-lg-7">
                                        <!-- Slider Image Start -->
                                        <div class="slider-image h-100">
                                            <div class="slider-image-three js-tilt">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/img-three.jpeg"
                                                    alt="Slider Image">
                                            </div>
                                            <span class="shape shape-circle-two">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/circle-four.png"
                                                    alt="Shape">
                                            </span>
                                            <div class="shape shape-circle-three">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/circle-five.png"
                                                    alt="Shape">
                                            </div>
                                            {{-- <div class="award-thumb">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/trophy.png"
                                                    alt="Trophy">
                                                <span class="award-thumb-text">Award Winning Agency</span>
                                            </div> --}}
                                            <div class="slider-thumb">
                                                <span class="number">4</span>
                                                <span class="text">Years of Success</span>
                                            </div>
                                        </div>
                                        <!-- Slider Image End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slider End -->
                </div>

                {{-- <div class="swiper-slide ">
                    <!-- Single Slider Start -->
                    <div class="slingle-slider single-slider-three overlay slider-bg-image" data-bg-color="#E9EDF4"
                        data-bg-image="{{ asset('frontend/assets/images') }}/slider/01_home_01.png">
                        <span class="shape shape-11 layery" data-speed="2">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-11.png" alt="Shape">
                        </span>
                        <span class="shape shape-seven">
                            <img src="{{ asset('frontend/assets/images') }}/slider/circle-three.png" alt="Shape">
                        </span>
                        <span class="shape shape-12 layer" data-speed="2">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-5.png" alt="Shape">
                        </span>
                        <span class="shape shape-13">
                            <img src="{{ asset('frontend/assets/images') }}/slider/circle-six.png" alt="Shape">
                        </span>
                        <div class="shape shape-14">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-12.png" alt="Shape">
                        </div>
                        <div class="shape shape-15">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-13.png" alt="Shape">
                        </div>
                        <div class="shape shape-16">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-14.png" alt="Shape">
                        </div>
                        <div class="shape shape-17">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-15.png" alt="Shape">
                        </div>
                        <div class="shape shape-18">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-16.png" alt="Shape">
                        </div>
                        <div class="slider-content-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 align-self-center">
                                        <!-- Slider Content Start -->
                                        <div class="slider-content">
                                            <span class="subtitle">We Are Egens</span>
                                            <h2 class="title">We Design Solutions for Business</h2>
                                            <p class="text">Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua minim veniam</p>
                                            <a href="service-details.html" class="btn btn-style-one"> <span>Read
                                                    More</span> </a>
                                        </div>
                                        <!-- Slider Content End -->
                                    </div>
                                    <div class="col-xl-6 col-lg-7">
                                        <!-- Slider Image Start -->
                                        <div class="slider-image h-100">
                                            <div class="slider-image-three js-tilt">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/img-three.png"
                                                    alt="Slider Image">
                                            </div>
                                            <span class="shape shape-circle-two">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/circle-four.png"
                                                    alt="Shape">
                                            </span>
                                            <div class="shape shape-circle-three">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/circle-five.png"
                                                    alt="Shape">
                                            </div>
                                            <div class="award-thumb">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/trophy.png"
                                                    alt="Trophy">
                                                <span class="award-thumb-text">Award Winning Agency</span>
                                            </div>
                                            <div class="slider-thumb">
                                                <span class="number">12</span>
                                                <span class="text">Years of Success</span>
                                            </div>
                                        </div>
                                        <!-- Slider Image End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slider End -->
                </div>

                <div class="swiper-slide ">
                    <!-- Single Slider Start -->
                    <div class="slingle-slider single-slider-three overlay slider-bg-image" data-bg-color="#E9EDF4"
                        data-bg-image="{{ asset('frontend/assets/images') }}/slider/01_home_01.png">
                        <span class="shape shape-11 layery" data-speed="2">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-11.png" alt="Shape">
                        </span>
                        <span class="shape shape-seven">
                            <img src="{{ asset('frontend/assets/images') }}/slider/circle-three.png" alt="Shape">
                        </span>
                        <span class="shape shape-12 layer" data-speed="2">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-5.png" alt="Shape">
                        </span>
                        <span class="shape shape-13">
                            <img src="{{ asset('frontend/assets/images') }}/slider/circle-six.png" alt="Shape">
                        </span>
                        <div class="shape shape-14">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-12.png" alt="Shape">
                        </div>
                        <div class="shape shape-15">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-13.png" alt="Shape">
                        </div>
                        <div class="shape shape-16">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-14.png" alt="Shape">
                        </div>
                        <div class="shape shape-17">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-15.png" alt="Shape">
                        </div>
                        <div class="shape shape-18">
                            <img src="{{ asset('frontend/assets/images') }}/slider/shape-16.png" alt="Shape">
                        </div>
                        <div class="slider-content-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 align-self-center">
                                        <!-- Slider Content Start -->
                                        <div class="slider-content">
                                            <span class="subtitle">We Are Egens</span>
                                            <h2 class="title">We Design Solutions for Business</h2>
                                            <p class="text">Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua minim veniam</p>
                                            <a href="service-details.html" class="btn btn-style-one"> <span>Read
                                                    More</span> </a>
                                        </div>
                                        <!-- Slider Content End -->
                                    </div>
                                    <div class="col-xl-6 col-lg-7">
                                        <!-- Slider Image Start -->
                                        <div class="slider-image h-100">
                                            <div class="slider-image-three js-tilt">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/img-three.png"
                                                    alt="Slider Image">
                                            </div>
                                            <span class="shape shape-circle-two">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/circle-four.png"
                                                    alt="Shape">
                                            </span>
                                            <div class="shape shape-circle-three">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/circle-five.png"
                                                    alt="Shape">
                                            </div>
                                            <div class="award-thumb">
                                                <img src="{{ asset('frontend/assets/images') }}/slider/trophy.png"
                                                    alt="Trophy">
                                                <span class="award-thumb-text">Award Winning Agency</span>
                                            </div>
                                            <div class="slider-thumb">
                                                <span class="number">12</span>
                                                <span class="text">Years of Success</span>
                                            </div>
                                        </div>
                                        <!-- Slider Image End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slider End -->
                </div> --}}

            </div>
            <div class="swiper-pagination sliderone-pagination"></div>
        </div>
    </div>
    <!-- Slider Section Start -->

    <!-- Solution Section Start -->
    <div class="solution section-padding">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 mb-n30">
                <div class="col mb-30">
                    <div class="solution-single wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="solution-icon">
                            <img src="{{ asset('frontend/assets/images') }}/icons/icon-14.png" alt="Solution-Icon">
                        </div>
                        <div class="solution-content">
                            <h6 class="title">Creative Strategy</h6>
                            <p class="text">Generating original and interesting ideas by using resources in the most
                                effective way is the key to a successful creative strategy. </p>
                        </div>
                    </div>
                </div>
                <div class="col mb-30">
                    <div class="solution-single wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="solution-icon">
                            <img src="{{ asset('frontend/assets/images') }}/icons/icon-15.png" alt="Solution-Icon">
                        </div>
                        <div class="solution-content">
                            <h6 class="title">Digital Solution</h6>
                            <p class="text">In today's digital world, businesses need to use digital solutions correctly
                                in order to be successful. </p>
                        </div>
                    </div>
                </div>
                <div class="col mb-30">
                    <div class="solution-single wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="solution-icon">
                            <img src="{{ asset('frontend/assets/images') }}/icons/icon-16.png" alt="Solution-Icon">
                        </div>
                        <div class="solution-content">
                            <h6 class="title">Analysis & Report</h6>
                            <p class="text">Accurate data analysis and reporting can enable a business to make strategic
                                decisions to achieve its goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solution Section End -->

    <!-- About Section Start -->
    <div class="about-three section-padding pt-0">
        <div class="container">
            <div class="row mb-n25">
                <div class="col-md-8 mb-25">
                    <div class="about-three-image wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                        <img src="{{ asset('frontend/assets/images') }}/about/about-3-1.png" alt="About-Image">
                    </div>
                </div>
                <div class="col-md-4 mb-25">
                    <div class="about-three-image wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="{{ asset('frontend/assets/images') }}/about/about-3-2.png" alt="About-Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-three-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about overflow-visible">
                        <div class="about-content ms-0">
                            <div class="section-head wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                                <span class="subtitle">We Are Egens</span>
                                <h2 class="title">We Work to Ensure Your Success</h2>
                                <p class="text">Sed do eiusmod tempor incididunt ut labore et dolore magna kobita
                                    tumi sopno aliqua.</p>
                                <a href="about.html" class="btn btn-style-one"> <span>Read More</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-three-content wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                            <p class="text">Evanim ad minim veniam, quis nostrud exercitation ullamco labor is tetur
                                adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqunim
                                ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="about-three-feature">
                                <div class="feature-column">
                                    <div class="feature-column-icon">
                                        <img src="{{ asset('frontend/assets/images') }}/icons/icon-3.png"
                                            alt="Feature-Icon">
                                    </div>
                                    <div class="feature-column-content">
                                        <h6 class="title">Digital Marketing</h6>
                                        <p class="text">Eabore et dolore magna aliqunim ad minim</p>
                                    </div>
                                </div>
                                <div class="feature-column">
                                    <div class="feature-column-icon">
                                        <img src="{{ asset('frontend/assets/images') }}/icons/icon-4.png"
                                            alt="Feature-Icon">
                                    </div>
                                    <div class="feature-column-content">
                                        <h6 class="title">Design & Development</h6>
                                        <p class="text">Eabore et dolore magna aliqunim ad minim</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="about-three-list">
                                <li>Evaos trud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat re
                                    dolor in reprehenderit in voluptate velit esse</li>
                                <li>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata</li>
                                <li>Kefficia deserunt mollit anim id est laborum. Sed ut perspiciatis</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Funfact Section Start -->
    <div class="funfact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="funfact-bg funfact-bg-two">
                        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n5">
                            <div class="col mb-5 wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".1s">
                                <div class="single-funfact text-start">
                                    <div class="funfact-inner">
                                        <span class="odometer" data-count-to="10"></span>
                                        <span class="text">K</span>
                                        <span class="increment">+</span>
                                    </div>
                                    <div class="funfact-content">
                                        <p class="text">Total <br>Subscriber</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5 wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".3s">
                                <div class="single-funfact text-start">
                                    <div class="funfact-inner">
                                        <span class="odometer" data-count-to="400"></span>
                                        <span class="increment">+</span>
                                    </div>
                                    <div class="funfact-content">
                                        <p class="text">Total <br>Videos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5 wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                <div class="single-funfact text-start">
                                    <div class="funfact-inner">
                                        <span class="odometer" data-count-to="200"></span>
                                        <span class="text">K</span>
                                        <span class="increment">+</span>
                                    </div>
                                    <div class="funfact-content">
                                        <p class="text">Yearly <br> Revinew</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Funfact Section End -->

    <!-- Service Section Start -->
    <div class="service-section service-three section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeIn" data-wow-duration=".7s" data-wow-delay=".1s">
                    <!-- Section Title Start -->
                    <div class="section-title-center section-head text-center">
                        <span class="subtitle">Service</span>
                        <h2 class="title">What We Do</h2>
                        <p class="text mx-auto">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. when
                            the musics over turn off the light</p>
                    </div>
                    <!-- Section Title End  -->
                </div>
            </div>
            <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-1 mb-n25">
                <div class="col mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Single Service Start -->
                    <div class="single-service">
                        <div class="single-service-top">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-17.png" alt="icon">
                            </div>
                            <h4 class="title">
                                <a href="service-details.html">Digital Marketing</a>
                            </h4>
                        </div>
                        <p class="single-service-text">Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Aliquip ex ea commodo consequat. </p>
                        <a class="readmore-btn" href="service-details.html"><i class="fas fa-angle-right"></i> Read
                            More</a>
                    </div>
                    <!-- Single Service End -->
                </div>
                <div class="col mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <!-- Single Service Start -->
                    <div class="single-service">
                        <div class="single-service-top">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-18.png" alt="icon">
                            </div>
                            <h4 class="title">
                                <a href="service-details.html">Website Development</a>
                            </h4>
                        </div>
                        <p class="single-service-text">Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Aliquip ex ea commodo consequat. </p>
                        <a class="readmore-btn" href="service-details.html"><i class="fas fa-angle-right"></i> Read
                            More</a>
                    </div>
                    <!-- Single Service End -->
                </div>
                <div class="col mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Single Service Start -->
                    <div class="single-service">
                        <div class="single-service-top">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-19.png" alt="icon">
                            </div>
                            <h4 class="title">
                                <a href="service-details.html">Search Engine Optimization</a>
                            </h4>
                        </div>
                        <p class="single-service-text">Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Aliquip ex ea commodo consequat. </p>
                        <a class="readmore-btn" href="service-details.html"><i class="fas fa-angle-right"></i> Read
                            More</a>
                    </div>
                    <!-- Single Service End -->
                </div>
                <div class="col mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <!-- Single Service Start -->
                    <div class="single-service">
                        <div class="single-service-top">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-20.png" alt="icon">
                            </div>
                            <h4 class="title">
                                <a href="service-details.html">Cloud <br> Hosting</a>
                            </h4>
                        </div>
                        <p class="single-service-text">Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Aliquip ex ea commodo consequat. </p>
                        <a class="readmore-btn" href="service-details.html"><i class="fas fa-angle-right"></i> Read
                            More</a>
                    </div>
                    <!-- Single Service End -->
                </div>
                <div class="col mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Single Service Start -->
                    <div class="single-service">
                        <div class="single-service-top">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-21.png" alt="icon">
                            </div>
                            <h4 class="title">
                                <a href="service-details.html">Search Engine Optimization</a>
                            </h4>
                        </div>
                        <p class="single-service-text">Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Aliquip ex ea commodo consequat. </p>
                        <a class="readmore-btn" href="service-details.html"><i class="fas fa-angle-right"></i> Read
                            More</a>
                    </div>
                    <!-- Single Service End -->
                </div>
                <div class="col mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <!-- Single Service Start -->
                    <div class="single-service">
                        <div class="single-service-top">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-22.png" alt="icon">
                            </div>
                            <h4 class="title">
                                <a href="service-details.html">Cloud <br> Hosting</a>
                            </h4>
                        </div>
                        <p class="single-service-text">Sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Aliquip ex ea commodo consequat. </p>
                        <a class="readmore-btn" href="service-details.html"><i class="fas fa-angle-right"></i> Read
                            More</a>
                    </div>
                    <!-- Single Service End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- Portfolio Section Start -->
    <div class="portfolio-one portfolio-two section-margin-bottom">
        <div class="container">
            <div class="portfolio-wrapper">
                <div
                    class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 portfolio-two-ncol grid parent-gallery">
                    <div class="col portfolio-two-left grid-item wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".1s">
                        <!-- Section Title Start -->
                        <div class="section-title-center section-head">
                            <span class="subtitle">Service</span>
                            <h2 class="title">Our Amazing Works</h2>
                            <p class="text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. when
                                the musics over turnoff the light</p>
                        </div>
                        <!-- Section Title End  -->
                    </div>

                    <div class="col portfolio-two-col portfolio-two-right grid-item wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <div class="portfolio-two-single">
                                <a class="thumbnail" href="portfolio-details.html">
                                    <img class="w-auto"
                                        src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-2.png"
                                        alt="BlogImage">
                                </a>
                                <div class="content">
                                    <span class="subtitle">Photography</span>
                                    <h3 class="title">
                                        <a href="portfolio-details.html">When the musics over turn off the light</a>
                                    </h3>
                                </div>
                                <div class="lightbox">
                                    <a class="item"
                                        href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-2.png"><i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col portfolio-two-col portfolio-two-left grid-item wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <div class="portfolio-two-single">
                                <a class="thumbnail" href="portfolio-details.html">
                                    <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-1.png"
                                        alt="Blog Image">
                                </a>
                                <div class="content">
                                    <span class="subtitle">Web Design</span>
                                    <h3 class="title">
                                        <a href="portfolio-details.html">When the musics over turn off the light</a>
                                    </h3>
                                </div>
                                <div class="lightbox">
                                    <a class="item"
                                        href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-1.png"><i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col portfolio-two-col portfolio-two-right grid-item wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <div class="portfolio-two-single">
                                <a class="thumbnail" href="portfolio-details.html">
                                    <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-4.png"
                                        alt="Blog Image">
                                </a>
                                <div class="content">
                                    <span class="subtitle">Web Design</span>
                                    <h3 class="title">
                                        <a href="portfolio-details.html">When the musics over turn off the light</a>
                                    </h3>
                                </div>
                                <div class="lightbox">
                                    <a class="item"
                                        href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-4.png"><i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col portfolio-two-col portfolio-two-left grid-item wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <div class="portfolio-two-single">
                                <a class="thumbnail" href="portfolio-details.html">
                                    <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-3.png"
                                        alt="Blog Image">
                                </a>
                                <div class="content">
                                    <span class="subtitle">Marketing</span>
                                    <h3 class="title">
                                        <a href="portfolio-details.html">When the musics over turn off the light</a>
                                    </h3>
                                </div>
                                <div class="lightbox">
                                    <a class="item"
                                        href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-10-3.png"><i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>

                    <div class="col portfolio-two-col grid-item wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".1s">
                        <div class="portfolio-two-btn">
                            <a class="btn-style-three wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
                                href="portfolio.html"><span>Load More</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->

    <!-- Work Banner Start -->
    <div class="workbanner-three wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="work-banner">
                        <!-- Section Title Start -->
                        <div class="section-title-center section-head text-start mb-0">
                            <span class="subtitle">We Are Here For You</span>
                            <h2 class="title">Let’s Get Back to Work</h2>
                            <p class="text mb-0">Gom ad minim veniam, quis nostrud exercitation ullamco labor is tetur
                                adip isicing elit, sed do eiusmod</p>
                        </div>
                        <!-- Section Title End  -->
                        <!-- Portfolio Button Start -->
                        <div class="work-banner-btn">
                            <a class="btn-style-three" href="service.html">Read More</a>
                        </div>
                        <!-- Portfolio Button End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Banner End -->

    <!-- About Four Section Start -->
    <div class="section-padding-bottom about-four">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-head">
                        <span class="subtitle">Our Speciality</span>
                        <h2 class="title">Why Choose Us</h2>
                        <p class="text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. when the
                            musics over turnoff the light</p>
                    </div>
                    <!-- Section Title End  -->
                    <div class="about-four-thumblist">
                        <div class="about-four-video">
                            <img src="{{ asset('frontend/assets/images') }}/about/about-video-4.png" alt="About-Image">
                            <a class="ht-popup-video video-popup"
                                href="https://player.vimeo.com/video/172601404?autoplay=1">
                                <span>
                                    <i class="fas fa-play"></i>
                                </span>
                            </a>
                        </div>
                        <ul class="about-four-list">
                            <li>
                                <img src="{{ asset('frontend/assets/images') }}/icons/check-two.png" alt="Check-Icon">
                                <span class="text">Evaos trud exercitation ullamco ut aliquip ex ea commodo
                                    con</span>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images') }}/icons/check-two.png" alt="Check-Icon">
                                <span class="text">Cillum dolore eu fugiat nulla pariatur. Kefficia deserunt mollit
                                </span>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images') }}/icons/check-two.png" alt="Check-Icon">
                                <span class="text">anim id est labo rum. Sed ut perspicia</span>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images') }}/icons/check-two.png" alt="Check-Icon">
                                <span class="text">Kobita tumi spono chariniy hoye.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion about-accordion accordion-two" id="faqone">
                        <div class="accordion-item faq-accordion-item">
                            <h2 class="accordion-header faq-accordion-header" id="headingOne">
                                <button class="accordion-button faq-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><span class="plus-minus"></span>When the musics over
                                    turn off the light?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show faq-accordion-collapse"
                                aria-labelledby="headingOne" data-bs-parent="#faqone">
                                <div class="accordion-body">
                                    Aliquip ex ea commodo consequa citation ullam co nisi ut aliquip ex ea commodo
                                    consequat. Duis auteu re dolor in reprehenderit in voluptate velit esse
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion-item">
                            <h2 class="accordion-header faq-accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed faq-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo"><span class="plus-minus"></span>
                                    What is the best way to get Egens support?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse faq-accordion-collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#faqone">
                                <div class="accordion-body">
                                    Aliquip ex ea commodo consequa citation ullam co nisi ut aliquip ex ea commodo
                                    consequat. Duis auteu re dolor in reprehenderit in voluptate velit esse
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion-item">
                            <h2 class="accordion-header faq-accordion-header" id="headingThree">
                                <button class="accordion-button collapsed faq-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree"><span class="plus-minus"></span>
                                    How can I get refund from service?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse faq-accordion-collapse"
                                aria-labelledby="headingThree" data-bs-parent="#faqone">
                                <div class="accordion-body">
                                    Aliquip ex ea commodo consequa citation ullam co nisi ut aliquip ex ea commodo
                                    consequat. Duis auteu re dolor in reprehenderit in voluptate velit esse
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion-item">
                            <h2 class="accordion-header faq-accordion-header" id="headingFour">
                                <button class="accordion-button collapsed faq-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour"><span class="plus-minus"></span>
                                    When the musics over turn off the light?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse faq-accordion-collapse"
                                aria-labelledby="headingFour" data-bs-parent="#faqone">
                                <div class="accordion-body">
                                    Aliquip ex ea commodo consequa citation ullam co nisi ut aliquip ex ea commodo
                                    consequat. Duis auteu re dolor in reprehenderit in voluptate velit esse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Four Section End -->

    <!-- Boost Section Start -->
    <div class="section-padding boost">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="boost-image">
                        <div class="boost-image-one js-tilt">
                            <img src="{{ asset('frontend/assets/images') }}/boost/boost.png" alt="Boost-Image">
                        </div>
                        <div class="boost-image-two js-tilt">
                            <img src="{{ asset('frontend/assets/images') }}/boost/boost2.png" alt="Boost-Image">
                        </div>
                        <div class="boost-image-shape">
                            <img src="{{ asset('frontend/assets/images') }}/boost/dotted.png" alt="Boost-shape">
                        </div>
                        <div class="boost-image-badge">
                            <img src="{{ asset('frontend/assets/images') }}/icons/badge.png" alt="Boost-icon">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="boost-content">
                        <div class="section-head wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
                            style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <span class="subtitle">Get A Boost Now</span>
                            <h2 class="title">We Never Compromize with Quality</h2>
                            <p class="text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. when
                                the musics over turnoff the light.</p>
                            <p class="text-two">Evanim ad minim veniam, quis nostrud exercitation ullamco labor is
                                tetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqunim ad minim veniam, quis nostrud exercitation ullamco.</p>

                            <div class="boost-feature">
                                <div class="row row-cols-lg-3 align-items-center">
                                    <div class="col">
                                        <div class="boost-feature-single">
                                            <div class="boost-feature-img">
                                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-23.png"
                                                    alt="Boost-Icon">
                                            </div>
                                            <span class="boost-feature-title">Targeted <br> Marketing</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="boost-feature-single">
                                            <div class="boost-feature-img">
                                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-24.png"
                                                    alt="Boost-Icon">
                                            </div>
                                            <span class="boost-feature-title">Total Digital <br> Solutions</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="boost-feature-single">
                                            <div class="boost-feature-img">
                                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-25.png"
                                                    alt="Boost-Icon">
                                            </div>
                                            <span class="boost-feature-title">Detailed Analysis <br>& Reporting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="about.html" class="btn btn-style-one"> <span>Read More</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Boost Section End -->

    <!-- Testimonial Three Section Start -->
    <div class="section-padding testimonial-three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title-center section-head text-center">
                        <span class="subtitle">Testimonial</span>
                        <h2 class="title">What People Say</h2>
                    </div>
                    <!-- Section Title End  -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper testimonialthree swiper-container-autoheight">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonialthree-single">
                                    <div class="testimonialthree-top">
                                        <div class="testimonialthree-quote">
                                            <img src="{{ asset('frontend/assets/images') }}/quote/quote-4.png"
                                                alt="Quote">
                                        </div>
                                        <p class="testimonialthree-text">Sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. when the musics over turno ff the light says the great
                                            eius mod tempor incididunt ut labore et nisachor hoye ami rater buke ekaki
                                            ghuri pothe pothe dolore magna aliqua. </p>
                                    </div>
                                    <div class="testimonialthree-content">
                                        <div class="testimonialthree-thumb">
                                            <img src="{{ asset('frontend/assets/images') }}/testimonial/testimonial-one.png"
                                                alt="Testimonial-Image">
                                        </div>
                                        <div class="testimonialthree-info">
                                            <span class="name">John Doe, </span>
                                            <span class="designation"> Web Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>
                            <div class="swiper-slide wow slideInUp" data-wow-duration="1.25s" data-wow-delay=".1s">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonialthree-single">
                                    <div class="testimonialthree-top">
                                        <div class="testimonialthree-quote">
                                            <img src="{{ asset('frontend/assets/images') }}/quote/quote-4.png"
                                                alt="Quote">
                                        </div>
                                        <p class="testimonialthree-text">Sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. when the musics over turno ff the light says the great
                                            eius mod tempor incididunt ut labore et nisachor hoye ami rater buke ekaki
                                            ghuri pothe pothe dolore magna aliqua. </p>
                                    </div>
                                    <div class="testimonialthree-content">
                                        <div class="testimonialthree-thumb">
                                            <img src="{{ asset('frontend/assets/images') }}/testimonial/testimonial-two.png"
                                                alt="Testimonial-Image">
                                        </div>
                                        <div class="testimonialthree-info">
                                            <span class="name">Jack Oramson, </span>
                                            <span class="designation"> Web Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>
                            <div class="swiper-slide wow slideInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonialthree-single">
                                    <div class="testimonialthree-top">
                                        <div class="testimonialthree-quote">
                                            <img src="{{ asset('frontend/assets/images') }}/quote/quote-4.png"
                                                alt="Quote">
                                        </div>
                                        <p class="testimonialthree-text">Sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. when the musics over turno ff the light says the great
                                            eius mod tempor incididunt ut labore et nisachor hoye ami rater buke ekaki
                                            ghuri pothe pothe dolore magna aliqua. </p>
                                    </div>
                                    <div class="testimonialthree-content">
                                        <div class="testimonialthree-thumb">
                                            <img src="{{ asset('frontend/assets/images') }}/testimonial/testimonial-three.png"
                                                alt="Testimonial-Image">
                                        </div>
                                        <div class="testimonialthree-info">
                                            <span class="name">Jack Oramson, </span>
                                            <span class="designation"> Web Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>
                        </div>
                        <div class="swiper-pagination sliderone-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-three-right">
            <div class="right-1 right-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/right-1.png" alt="Author">
            </div>
            <div class="right-2 right-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/right-2.png" alt="Author">
            </div>
            <div class="right-3 right-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/right-3.png" alt="Author">
            </div>
            <div class="right-4 right-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/right-4.png" alt="Author">
            </div>
            <span class="testimonial-shape-one testimonial-shape-right-1"></span>
            <span class="testimonial-shape-one testimonial-shape-right-2"></span>
            <span class="testimonial-shape-two testimonial-shape-right-3"></span>
        </div>
        <div class="testimonial-three-left">
            <div class="left-1 left-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/left-1.png" alt="Author">
            </div>
            <div class="left-2 left-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/left-2.png" alt="Author">
            </div>
            <div class="left-3 left-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/left-3.png" alt="Author">
            </div>
            <div class="left-4 left-author wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <img src="{{ asset('frontend/assets/images') }}/testimonial/left-4.png" alt="Author">
            </div>
            <span class="testimonial-shape-one testimonial-shape-left-1"></span>
            <span class="testimonial-shape-one testimonial-shape-left-2"></span>
            <span class="testimonial-shape-two testimonial-shape-left-3"></span>
        </div>
    </div>
    <!-- Testimonial Three Section End -->

    <!-- Brand Section Start -->
    <div class="brand-three section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-slider brand-style swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Single Brand Start -->
                                <a class="brand-after" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/1.png" alt="Brand-Image"></a>
                                <a class="brand-before" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/1-1.png" alt="Brand-Image"></a>
                                <!-- Single Brand End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Brand Start -->
                                <a class="brand-after" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/2.png" alt="Brand-Image"></a>
                                <a class="brand-before" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/2-1.png" alt="Brand-Image"></a>
                                <!-- Single Brand End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Brand Start -->
                                <a class="brand-after" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/3.png" alt="Brand-Image"></a>
                                <a class="brand-before" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/3-1.png" alt="Brand-Image"></a>
                                <!-- Single Brand End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Brand Start -->
                                <a class="brand-after" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/4.png" alt="Brand-Image"></a>
                                <a class="brand-before" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/4-1.png" alt="Brand-Image"></a>
                                <!-- Single Brand End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Brand Start -->
                                <a class="brand-after" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/5.png" alt="Brand-Image"></a>
                                <a class="brand-before" href="#"><img
                                        src="{{ asset('frontend/assets/images') }}/brand/5-1.png" alt="Brand-Image"></a>
                                <!-- Single Brand End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section End -->

    <!-- Blog Three Start -->
    <div class="section blog-three section-padding">
        <div class="container">
            <div class="row mb-n50">
                <div class="col-lg-5 mb-50">
                    <div class="section-head wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
                        style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <span class="subtitle">Our Blog</span>
                        <h2 class="title">Our Latest Updates</h2>
                        <p class="text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="blog.html" class="btn btn-style-three"> <span>View All</span> </a>
                    </div>
                </div>
                <div class="col-lg-7 mb-50">
                    <div class="blog-three-wrapper">
                        <div class="blog-three-single">
                            <div class="blog-three-image">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/assets/images') }}/blog/blog-3-1.png" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-three-content">
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li>Web Development</li>
                                        <li>Apr 06, 2022</li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="blog-details.html">Jim Morisson says when the musics over turn off the
                                            light</a>
                                    </h3>
                                    <p class="text">kemod tempor incididunt ut labore et dolore magna aliqunim ad
                                        minim veniam, quis nostr ...</p>

                                    <a href="blog-details.html" class="read-more"><i class="fas fa-angle-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-three-single">
                            <div class="blog-three-image">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend/assets/images') }}/blog/blog-3-2.png" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-three-content">
                                <div class="blog-info">
                                    <ul class="meta">
                                        <li>Web Development</li>
                                        <li>Apr 06, 2022</li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="blog-details.html">Jim Morisson says when the musics over turn off the
                                            light</a>
                                    </h3>
                                    <p class="text">kemod tempor incididunt ut labore et dolore magna aliqunim ad
                                        minim veniam, quis nostr ...</p>

                                    <a href="blog-details.html" class="read-more"><i class="fas fa-angle-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Three End -->

    <div class="subscription-style-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Top Start -->
                    <div class="footer-top-subscription">
                        <!-- Section Title Start -->
                        <div class="section-title-center section-head mb-0 wow fadeIn" data-wow-duration="1.5s"
                            data-wow-delay=".1s">
                            <span class="subtitle">Get Updates</span>
                            <h2 class="title">Signup for Newsletter</h2>
                        </div>
                        <!-- Section Title End  -->
                        <div class="subcription-form-wrapper wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <!-- Subscription Form Start -->
                            <form id="mc-form" class="subscribe-form" action="#">
                                <input class="email" type="email" placeholder="Your email here" name="EMAIL">
                                <button class="button">Subscribe</button>
                            </form>
                            <!-- Subscription Form End -->
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                    <!-- Footer Top End -->
                </div>
            </div>
        </div>
    </div>
@endsection
