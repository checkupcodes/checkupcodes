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
                        <h1 class="title">Digital Marketing</h1>
                        <p class="text mb-0">Sed do eiusmod tempor incididunt ut labore et when the musis dolore magna
                            aliqua. </p>
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Service Section Start -->
    <div class="section-padding">
        <div class="container">
            <div class="row mb-n30">
                <div class="col-lg-8 mb-30 standard-service">
                    <div class="service-details">
                        <!-- Thumbnail Start -->
                        <div class="single-thumb wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <img src="{{ asset('frontend/assets/images') }}/blog/blog-1-1.png" alt="Blog-Image">
                        </div>
                        <!-- Thumbnail End -->

                        <div class="service-desc wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <h3 class="service-desc-title">Overview</h3>
                            <p class="text mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            <p class="text mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.</p>
                        </div>

                        <div class="service-desc wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <h3 class="service-desc-title">Key Factors</h3>
                            <div class="row mb-n25">
                                <div class="col-md-6 mb-25">
                                    <div class="service-desc-single">
                                        <div class="service-desc-top">
                                            <div class="icon">
                                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-7.png"
                                                    alt="icon">
                                            </div>
                                            <h4 class="title">Business Automation</h4>
                                        </div>
                                        <p class="service-desc-text">Duis aute irure dolor in reprehenderit in voluptate
                                            orro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                            velit, sed quia</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="service-desc-single">
                                        <div class="service-desc-top">
                                            <div class="icon">
                                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-8.png"
                                                    alt="icon">
                                            </div>
                                            <h4 class="title">Critical Analysis</h4>
                                        </div>
                                        <p class="service-desc-text">Duis aute irure dolor in reprehenderit in voluptate
                                            orro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                            velit, sed quia</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="service-desc-single">
                                        <div class="service-desc-top">
                                            <div class="icon">
                                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-9.png"
                                                    alt="icon">
                                            </div>
                                            <h4 class="title">Risk Protection</h4>
                                        </div>
                                        <p class="service-desc-text">Duis aute irure dolor in reprehenderit in voluptate
                                            orro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                            velit, sed quia</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="service-desc-single">
                                        <div class="service-desc-top">
                                            <div class="icon">
                                                <img src="{{ asset('frontend/assets/images') }}/icons/icon-10.png"
                                                    alt="icon">
                                            </div>
                                            <h4 class="title">Annual Report</h4>
                                        </div>
                                        <p class="service-desc-text">Duis aute irure dolor in reprehenderit in voluptate
                                            orro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                            velit, sed quia</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-desc">
                            <div class="row mb-n25">
                                <div class="col-md-6 mb-25">
                                    <div class="service-image wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                                        <img src="{{ asset('frontend/assets/images') }}/service/service-details-2.png"
                                            alt="Service-Image">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <div class="service-image wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                                        <img src="{{ asset('frontend/assets/images') }}/service/service-details-3.png"
                                            alt="Service-Image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-desc wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <h3 class="service-desc-title">Key Benefits</h3>
                            <ul class="service-desc-list">
                                <li>
                                    <div class="service-desc-list-link">
                                        <img src="{{ asset('frontend/assets/images') }}/icons/right-arrow.png"
                                            alt="Arrow-icon">
                                        <span class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="service-desc-list-link">
                                        <img src="{{ asset('frontend/assets/images') }}/icons/right-arrow.png"
                                            alt="Arrow-icon">
                                        <span class="text">Excepteur sint occaecat cupidatat a deserunt mollit anim id
                                            est laborum. </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="service-desc-list-link">
                                        <img src="{{ asset('frontend/assets/images') }}/icons/right-arrow.png"
                                            alt="Arrow-icon">
                                        <span class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="service-desc-list-link">
                                        <img src="{{ asset('frontend/assets/images') }}/icons/right-arrow.png"
                                            alt="Arrow-icon">
                                        <span class="text">accusantium doloremque laudantium, totam rem aperiam, eaque
                                            ipsa quae ab illo </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="service-desc-list-link">
                                        <img src="{{ asset('frontend/assets/images') }}/icons/right-arrow.png"
                                            alt="Arrow-icon">
                                        <span class="text">inventore veritatis et quasi architecto beatae vitae dicta
                                            sunt explicabo.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="service-desc">
                            <h3 class="service-desc-title">Neat Outcome</h3>
                            <div class="row mb-n25">
                                <div class="col-md-4 mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                                    <div class="single-outcome">
                                        <span class="parcentage">95%</span>
                                        <span class="text">Increased Success Rate Per Month</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                                    <div class="single-outcome">
                                        <span class="parcentage">70%</span>
                                        <span class="text">Increased Success Rate Per Month</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                                    <div class="single-outcome">
                                        <span class="parcentage">5K</span>
                                        <span class="text">Increased Success Rate Per Month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4 mb-30">
                    <div class="sidebar-wrap">
                        <!--Sidebar Service Start-->
                        <div class="sidebar wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <h4 class="sidebar-title">Services</h4>
                            <ul class="sidebar-service">
                                <li><a href="service-details.html" class="active">Digital Marketing</a></li>
                                <li><a href="service-details.html">Search Engine Optimization</a></li>
                                <li><a href="service-details.html">Social Media Marketing</a></li>
                                <li><a href="service-details.html">Web Design & Development</a></li>
                                <li><a href="service-details.html">Business Strategy & Planning</a></li>
                                <li><a href="service-details.html">Critical Analysis</a></li>
                            </ul>

                        </div>
                        <!--Sidebar Service End-->

                        <!--Sidebar Contact Start-->
                        <div class="sidebar wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <h4 class="sidebar-title">Get A Quote</h4>
                            <form class="comment-form-inner p-0" action="#">
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-3">
                                        <input placeholder="Your name" name="name">
                                    </div>
                                    <div class="col-md-12 col-12 mb-3">
                                        <input type="email" placeholder="Your email" name="email">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="message" placeholder="Write your comment here"></textarea>
                                    </div>
                                    <div class="col-12 text-left">
                                        <button class="btn btn-style-four"> <span>Submit Now</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--Sidebar Contact End-->

                        <!--Sidebar Help Start-->
                        <div class="sidebar sidebar-help wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <h4 class="sidebar-title-two">Need Help?</h4>
                            <p class="sidebar-help-text mb-0">Pabore et dolor mod tempor inci didunt ut labore et dolore
                                magna aliqua nim veniam strud </p>
                            <div class="sidebar-help-call">
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <div class="call-area">
                                    <span class="text">Call Us</span>
                                    <a href="tel:+0123456789">+123 456 7890</a>
                                </div>
                            </div>
                        </div>
                        <!--Sidebar Help End-->

                        <!--Sidebar Profile Start-->
                        <div class="sidebar wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <h4 class="sidebar-title">Download Company Profile</h4>
                            <ul class="sidebar-download">
                                <li><a href="" class="btn btn-style-four">Download PDF</a></li>
                                <li><a href="" class="btn btn-style-four">Download Word File</a></li>
                            </ul>
                        </div>
                        <!--Sidebar Profile End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->
@endsection
