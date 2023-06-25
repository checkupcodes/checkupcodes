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
        <span class="shape shape-three">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-7.png" alt="Shape">
        </span>
        <span class="shape shape-four">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-9.png" alt="Shape">
        </span>
        <span class="shape shape-five">
            <img src="{{ asset('frontend/assets/images') }}/slider/shape-10.png" alt="Shape">
        </span>
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <!-- Breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <h1 class="title">Contact Us</h1>
                        <p class="text mb-0">What would you like to ask us?</p>
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Start -->
    <div class="section-padding">
        <div class="container">
            <div class="row mb-n30">
                <div class="col-lg-6 mb-30">
                    <!-- Section Title Start -->
                    <div class="section-title-center section-head contact-head text-start mb-5 wow fadeIn"
                        data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="subtitle">Contact Us</span>
                        <h2 class="title">We Want to Here from You</h2>
                        <p class="text-two mw-100 mb-0">Contact Us With Phone Number Or E-Mail Address</p>
                    </div>
                    <!-- Section Title End  -->
                    <!-- Contact Information Start -->
                    <ul class="contact-info wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <li>
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">Address</h3>
                                <span class="text">Ayazağa, Kemerburgaz Cd. No:1/A, 34396 Sarıyer/İstanbul</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">Phone</h3>
                                <span class="text"><a href="tel:+123456789">+90 XXX XXX XX XX</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">Email</h3>
                                <span class="text"><a href="mailto:hello@egens.com">checkupcodes@gmail.com</a></span>
                            </div>
                        </li>
                    </ul>
                    <!-- Contact Information End -->
                </div>
                <div class="col-lg-6 mb-30">
                    <form id="contact-form" class="comment-form-inner contact-form wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".1s" action="assets/php/contact.php">
                        <h2 class="title">Write A Message</h2>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input placeholder="Your name" name="name">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" placeholder="Your email" name="email">
                            </div>
                            <div class="col-12 mb-3">
                                <input placeholder="Your phone" name="phone">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="message" placeholder="Write your comment here"></textarea>
                            </div>
                            <div class="col-12 text-left">
                                <button class="btn btn-style-one" type="submit"> <span>Submit Now</span> </button>
                            </div>
                            <div class="col-12">
                                <!--== Message Notification ==-->
                                <div class="form-message mt-4"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Contact Map Section Start -->
    <div class="section-margin-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-map-section wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- Google Map Area Start -->
                        <div class="google-map-area w-100">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images') }}/icons/contact.png" alt="Map-Icon">
                            </div>
                            <div class="map-inner" style="width: 100%">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d903.5764392910427!2d28.9854733043137!3d41.10732435557354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab427c7719cd3%3A0x7075e8e9804d904b!2sVadistanbul%20Shopping%20Mall!5e0!3m2!1sen!2str!4v1683383293882!5m2!1sen!2str"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <!-- Google Map Area Start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Map Section End -->
@endsection
