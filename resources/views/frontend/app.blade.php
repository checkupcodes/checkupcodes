<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Check-up Codes | Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images') }}/favicon.ico">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/plugins/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/plugins/odometer-theme-default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/plugins/fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/plugins/magnific-pupup.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css') }}/style.css">
</head>

<body>

    @include('frontend.static.header')

    @yield('main')

    @include('frontend.static.footer')

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top fas fa-angle-double-up"></i>
        <i class="arrow-bottom fas fa-angle-double-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('frontend/assets/js') }}/vendor/modernizr-3.11.7.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('frontend/assets/js') }}/plugins/magnificpopup.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/tilt.jquery.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/odometer.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/isotope.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/imagesloaded.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/waypoint.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/wow.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/fancybox.min.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/plugins/jquery.ajaxchimp.min.js"></script>

    <!-- Activation JS -->
    <script src="{{ asset('frontend/assets/js') }}/main.js"></script>
    <script src="{{ asset('frontend/assets/js') }}/pages/home.js"></script>

</body>

</html>
