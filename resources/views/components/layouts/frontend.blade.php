<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ setting('website_title') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset(setting('favicon')) ?? null}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/common.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>
<body>
    <!-- search area -->
    <div class="search-area">
        <div class="search-input">
            <div class="search-close">
                <span></span>
                <span></span>
            </div>
            <form>
                <input type="text" name="text" placeholder="*Search Here.......">
            </form>
        </div>
    </div>
    <!-- search area -->

    <div class="body-wrapper">

        <x-layouts.frontend.header />

            {{ $slot }}

        <x-layouts.frontend.footer />
    </div>

    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <!-- scroll to top -->

    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/progress.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/map-custom.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/functions.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg&callback=initMap"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

    <script src="{{ asset('frontend/assets/includes/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/rev-slider.js') }}"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- WOW -->
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>

    <!-- SWIPER -->
    <script src="{{ asset('frontend/assets/js/swiper.js') }}"></script>
    <x-flashify::scripts />
</body>
</html>