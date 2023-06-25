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
                        <h1 class="title">Portfolio Masonry</h1>
                        <p class="text mb-0">Our portfolio includes the perfect combination of creativity and aesthetics, as
                            well as offering customized solutions to meet the diverse needs of our clients from different
                            industries.</p>
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Portfolio Section Start -->
    <div class="portfolio-one section-padding">
        <div class="container">
            <div class="portfolio-wrapper">
                <!-- Portfolio Isotop Button Start -->
                <div class="portfolio-menu-style portfolio-menu-active isotope-btn-add-active mt-0 wow fadeIn"
                    data-wow-duration="1.5s" data-wow-delay=".1s">
                    <button class="active btn-portfolio" data-filter="*">All</button>
                    <button class="btn-portfolio" data-filter=".cat1">Web Design</button>
                    <button class="btn-portfolio" data-filter=".cat2">Development</button>
                    <button class="btn-portfolio" data-filter=".cat3">Marketing</button>
                    <button class="btn-portfolio" data-filter=".cat4">Photography</button>
                </div>
                <!-- Portfolio Isotop Button End -->
                {{-- <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n25 grid parent-gallery">
                    <div class="col mb-25 grid-item cat2 cat4 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-1.png" alt="Blog Image">
                            </a>
                            <div class="content">
                                <span class="subtitle">Web Design</span>
                                <h3 class="title">
                                    <a href="portfolio-details.html">When the musics over turn off the light</a>
                                </h3>
                            </div>
                            <div class="lightbox">
                                <a class="item" href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-1.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat1 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-2.png" alt="Blog Image">
                            </a>
                            <div class="content">
                                <span class="subtitle">Web Design</span>
                                <h3 class="title">
                                    <a href="portfolio-details.html">When the musics over turn off the light</a>
                                </h3>
                            </div>
                            <div class="lightbox">
                                <a class="item" href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-2.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat4 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-3.png" alt="Blog Image">
                            </a>
                            <div class="content">
                                <span class="subtitle">Photography</span>
                                <h3 class="title">
                                    <a href="portfolio-details.html">When the musics over turn off the light</a>
                                </h3>
                            </div>
                            <div class="lightbox">
                                <a class="item" href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-3.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat3 cat1 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-4.png"
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
                                    href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-4.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat4 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-6.png"
                                    alt="Blog Image">
                            </a>
                            <div class="content">
                                <span class="subtitle">Photography</span>
                                <h3 class="title">
                                    <a href="portfolio-details.html">When the musics over turn off the light</a>
                                </h3>
                            </div>
                            <div class="lightbox">
                                <a class="item"
                                    href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-6.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat1 cat3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-5.png"
                                    alt="Blog Image">
                            </a>
                            <div class="content">
                                <span class="subtitle">Development</span>
                                <h3 class="title">
                                    <a href="portfolio-details.html">When the musics over turn off the light</a>
                                </h3>
                            </div>
                            <div class="lightbox">
                                <a class="item"
                                    href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-5.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat3 cat1 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-1.png"
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
                                    href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-1.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat4 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-2.png"
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
                                    href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-2.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                    <div class="col mb-25 grid-item cat1 cat3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <a class="thumbnail" href="portfolio-details.html">
                                <img src="{{ asset('frontend/assets/images') }}/portfolio/portfolio-3.png"
                                    alt="Blog Image">
                            </a>
                            <div class="content">
                                <span class="subtitle">Photography</span>
                                <h3 class="title">
                                    <a href="portfolio-details.html">When the musics over turn off the light</a>
                                </h3>
                            </div>
                            <div class="lightbox">
                                <a class="item"
                                    href="{{ asset('frontend/assets/images') }}/portfolio/portfolio-3.png"><i
                                        class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-12 d-flex justify-content-center portfolio-load-more">
                        <a class="btn-style-two wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
                            href="portfolio.html"><span>Load More</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->
@endsection
