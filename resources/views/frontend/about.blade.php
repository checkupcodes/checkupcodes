@extends('frontend.app')
@section('main')
    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-section">
        <span class="shape shape-one layer" data-speed="1">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-2.png" alt="Shape">
        </span>
        <span class="shape shape-two layer" data-speed="2">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-5.png" alt="Shape">
        </span>
        <span class="shape shape-three wow pulse" data-wow-duration="1s" data-wow-delay=".1s">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-7.png" alt="Shape">
        </span>
        <span class="shape shape-four wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-9.png" alt="Shape">
        </span>
        <span class="shape shape-five wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-10.png" alt="Shape">
        </span>
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <!-- Breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <h1 class="title">About Us</h1>
                        <p class="text mb-0">Our story begins and ends with a team that constantly evolves to provide the
                            best service to our customers. </p>
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Section End -->
    <div class="about section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-image">
                        <img class="about-img js-tilt" src="{{ asset('frontend/assets/images') }}/about/about.png"
                            alt="about">
                        <div class="shape-one wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                            <img src="{{ asset('frontend/assets/images') }}/about/shape-one.png" alt="Shape">
                        </div>
                        <div class="shape-two wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                            <img src="{{ asset('frontend/assets/images') }}/about/shape-two.png" alt="Shape">
                        </div>
                        <div class="about-icon icon-one wow flipInY" data-wow-duration="2s" data-wow-delay=".6s">
                            <img src="{{ asset('frontend/assets/images') }}/icons/icon-1.png" alt="Icon">
                        </div>
                        <div class="about-icon icon-two wow flipInY" data-wow-duration="2s" data-wow-delay=".6s">
                            <img src="{{ asset('frontend/assets/images') }}/icons/icon-2.png" alt="Icon">
                        </div>
                        <div class="circle-thumb wow pulse" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <span class="number">3</span>
                            <span class="text">Years in the <br> Success</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-head wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <span class="subtitle">We Are Check-up Codes</span>
                            <h2 class="title">We Work to Ensure Your Success</h2>
                            <p class="text">
                                Our goal is to provide everything our customers need to be successful.
                            </p>
                            <p class="text-two">We work day and night for the success of our customers. Our customers'
                                success is our success, so we do our best to grow their business. </p>
                            <a href="{{ url('about') }}" class="btn btn-style-one"> <span>Read More</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section Start -->

    <!-- Progress Section Start -->
    <div class="progress-section section-padding">
        <div class="container">
            <div class="row align-items-center mb-n30">
                <div class="col-lg-6 mb-30 wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                    <!-- Section Title Start -->
                    <div class="section-title-center section-head text-start mb-0">
                        <span class="subtitle">We Are Check-up Codes</span>
                        <h2 class="title">We Work to Help You Grow</h2>
                        <p class="text-two mw-100 mb-0">The growth of our customers is a top priority for us and we work to
                            move their business forward by offering them tailored strategies.</p>
                    </div>
                    <!-- Section Title End  -->
                </div>
                <div class="col-lg-6 mb-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">

                    <!-- Progress Area Start -->
                    <div class="progress-area">
                        <h5 class="progress-title">Website Development</h5>
                        <div class="progress">
                            <div class="progress-bar single-progress wow fadeInLeft" data-wow-duration="0.7s"
                                data-wow-delay=".1s" role="progressbar" style="width: 78%;" aria-valuenow="78"
                                aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <span class="progress-number">78%</span>
                        </div>
                        <h5 class="progress-title">Mobil Development</h5>
                        <div class="progress">
                            <div class="progress-bar single-progress wow fadeInLeft" data-wow-duration="0.7s"
                                data-wow-delay=".2s" role="progressbar" style="width: 88%;" aria-valuenow="88"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <span class="progress-number">88%</span>
                        </div>
                        <h5 class="progress-title">Search Engine Optimization</h5>
                        <div class="progress">
                            <div class="progress-bar single-progress wow fadeInLeft" data-wow-duration="0.7s"
                                data-wow-delay=".3s" role="progressbar" style="width: 65%;" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <span class="progress-number">65%</span>
                        </div>
                    </div>
                    <!-- Progress Area End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Progress Section End -->

    <!-- Video About Section Start -->
    <div class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-n30">
                <div class="col-xl-5 col-lg-5 mb-30 wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="divider-thumb" data-bg-image="">
                        <div class="video-content-wrap">
                            <img class="icon-img" src="{{ asset('frontend/assets/images') }}/about/about-video.png"
                                alt="Image">
                            <a class="ht-popup-video video-popup" href="https://www.youtube.com/watch?v=SeXNbTadzLk"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-2 offset-lg-1 mb-30 wow fadeIn" data-wow-duration="1s"
                    data-wow-delay=".1s">
                    <!-- Section Title Start -->
                    <div class="section-title-center section-head text-start mb-0">
                        <span class="subtitle">We Are Check-up Codes</span>
                        <h2 class="title">We Work to Help You Grow</h2>
                        <p class="text-two mw-100 mb-0">Our goal is to provide customized solutions to help our clients
                            maximize the potential of their businesses. As our customers grow, so do we.</p>
                    </div>
                    <!-- Section Title End  -->
                    <div class="accordion about-accordion" id="faqone">
                        <div class="accordion-item faq-accordion-item">
                            <h2 class="accordion-header faq-accordion-header" id="headingOne">
                                <button class="accordion-button faq-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Our Mission & Vissioin</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show faq-accordion-collapse"
                                aria-labelledby="headingOne" data-bs-parent="#faqone">
                                <div class="accordion-body">
                                    Our aim is to continuously improve ourselves and provide innovative solutions to meet
                                    the needs of our customers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion-item">
                            <h2 class="accordion-header faq-accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed faq-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Work Eticks & Complimency
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse faq-accordion-collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#faqone">
                                <div class="accordion-body">
                                    Business ethics and compliant behavior are among the core values of our business and are
                                    always a priority to gain the trust of our employees and customers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion-item">
                            <h2 class="accordion-header faq-accordion-header" id="headingThree">
                                <button class="accordion-button collapsed faq-accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Strategy to Achive Goal
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse faq-accordion-collapse"
                                aria-labelledby="headingThree" data-bs-parent="#faqone">
                                <div class="accordion-body">
                                    We are constantly working to maximize the success of our business by identifying the
                                    strategies we need to achieve our goals.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video About Section End -->

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

    <!-- Team Section Start -->
    <div class="team-section section-padding team-about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                    <!-- Section Title Start -->
                    <div class="section-title-center section-head text-center">
                        <span class="subtitle">Team Members</span>
                        <h2 class="title">Our Team Members</h2>
                        <p class="text mx-auto mb-0">Get Your Own Places Quickly In The Digital Environment</p>
                    </div>
                    <!-- Section Title End  -->
                </div>
            </div>
            <div class="row mb-n30">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30 team-wrapper wow fadeInUp" data-wow-duration=".6s"
                    data-wow-delay=".1s">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team">
                        <div class="team-thumb">
                            <a class="image" href="member-details.html"><img
                                    src="{{ asset('frontend/assets/images') }}/team/team-1.png" alt="Team"></a>
                        </div>
                        <ul class="sidebar-social">
                            <li>
                                <a href="https://www.linkedin.com/in/cekap/" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/cekap/" class="twitter"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/cekap/" class="linkedin"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/cekap/" class="instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="team-content">
                            <h4 class="title">
                                <a href="member-details.html">Yakup Sarı</a>
                            </h4>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30 team-wrapper wow fadeInUp" data-wow-duration="0.8s"
                    data-wow-delay=".1s">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team">
                        <div class="team-thumb">
                            <a class="image" href="member-details.html"><img
                                    src="{{ asset('frontend/assets/images') }}/team/team-2.png" alt="Team"></a>
                        </div>
                        <ul class="sidebar-social">
                            <li>
                                <a href="https://www.linkedin.com/in/behlulbozal/" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/behlulbozal/" class="twitter"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/behlulbozal/" class="linkedin"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/behlulbozal/" class="instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="team-content">
                            <h4 class="title">
                                <a href="member-details.html">Hasan Behlül Bozal</a>
                            </h4>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30 team-wrapper wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".1s">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team">
                        <div class="team-thumb">
                            <a class="image" href="member-details.html"><img
                                    src="{{ asset('frontend/assets/images') }}/team/team-3.png" alt="Team"></a>
                        </div>
                        <ul class="sidebar-social">
                            <li>
                                <a href="https://www.linkedin.com/in/elifemr/" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/elifemr/" class="twitter"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/elifemr/" class="linkedin"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/elifemr/" class="instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="team-content">
                            <h4 class="title">
                                <a href="member-details.html">Elif Emre</a>
                            </h4>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30 team-wrapper">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="team-thumb">
                            <a class="image" href="member-details.html"><img
                                    src="{{ asset('frontend/assets/images') }}/team/team-4.png" alt="Team"></a>
                        </div>
                        <ul class="sidebar-social">
                            <li>
                                <a href="https://www.facebook.com/" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/yusuf-dur-b92412231/" class="linkedin"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="team-content">
                            <h4 class="title">
                                <a href="member-details.html">Yusuf Dur</a>
                            </h4>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- Work Banner Start -->
    <div class="section-margin-bottom wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="work-banner">
                        <!-- Section Title Start -->
                        <div class="section-title-center section-head text-start mb-0">
                            <span class="subtitle">We Are Here For You</span>
                            <h2 class="title">Let’s Get Back to Work</h2>
                            <p class="text mb-0">We are now ready to return to work and will continue to work to provide
                                the best service to our customers.</p>
                        </div>
                        <!-- Section Title End  -->
                        <!-- Portfolio Button Start -->
                        <div class="work-banner-btn">
                            <a class="btn-style-three" href="{{ route('home.contact') }}">Read More</a>
                        </div>
                        <!-- Portfolio Button End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Banner End -->

    <!-- Brand Section Start -->
    {{-- <div class="container">
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
    </div> --}}
    <!-- Brand Section End -->
@endsection
