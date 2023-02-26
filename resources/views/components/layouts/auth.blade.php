<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ setting('website_title') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset(setting('favicon')) ?? null}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

</head>

<body style="background: linear-gradient(#00095E, #050724); ">

    <div class="main-wrapper">

        {{ $slot }}

    </div>


    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{ asset('backend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/') }}js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/tippy4.min.js.js') }}"></script>
    <!--Main JS-->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

</body>

</html>