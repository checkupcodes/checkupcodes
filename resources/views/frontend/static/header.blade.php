<header class="header-wrapper sticky-header">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="flex-center justify-content-between">
                        <!-- Header Logo Start -->
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('frontend/assets/images') }}/logo.png" alt="">
                            </a>
                        </div>
                        <!-- Header Logo End -->

                        <div class="flex-center header-right">
                            <!-- Header Menu Start -->
                            <div class="d-none d-lg-flex header-right_menu">
                                <nav class="main-menu">
                                    <ul>
                                        {{-- <li class="has-children">
                                            <a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ route('home.about') }}">About</a></li>
                                        <li class="has-children">
                                            <a href="#">Service</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('home.service') }}l">Service</a></li>
                                                <li><a href="{{ route('home.web_development') }}">Service
                                                        Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('home.portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ route('home.team') }}">Team</a></li>
                                        {{-- <li><a href="{{ route('home.blog') }}">Blog</a></li> --}}
                                        <li><a href="{{ route('home.contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Menu End -->

                            {{-- <!-- Header Actions Start -->
                            <div class="header-right_actions flex-center">
                                <div class="header-right_call">
                                    <div class="icon btn btn-style-one">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <div class="call-meta">

                                    </div>
                                </div> --}}

                            <div class="hamburger d-block d-lg-none">
                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a class="header-action-btn header-action-btn-menu hamburger_button d-flex"
                                    href="#/" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-header">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->
                            </div>

                        </div>
                        <!-- Header Social Actions End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
