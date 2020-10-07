<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{  asset('assets/frontend/images/favicon.png')}}" />
        <!--Bootstrap Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.css')}}">
        <!--Slick Slider-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick.css')}}">
        <!--Font Awesome Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/fontawesome.all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/helper.css')}}">
        <!--Animate Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/animate.css')}}">
        <!--Venobox Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/venobox.css')}}">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <!--Owl carosul-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.theme.default.css')}}">
        <!--Main Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}">
        <!--Responsive Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/responsive.css')}}">
        <!--Custom Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/custom.css')}}">
        <!--jQuery JS-->
        <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @php
        $gs= App\Model\GeneralSetting::first();
        @endphp
        <link href="{{url('/')}}/assets/frontend/css/color.php?color={{$gs->color_code}}" rel="stylesheet">

        <title>{{ $gs->title }}</title>
    </head>

    <body>
        <!--Start Preloader-->
        <div class="site-preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!--End Preloader-->
        <!-- Main Menu Area Start -->
        <header id="mainHeader" class="header">
            <!-- Start Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('front.index') }}">
                        <img src="{{asset('assets/frontend/images/logo.png')}}" alt="logo" style="max-width: 220px; max-height: 46px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" id="home" href="{{ route('front.index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="qurrierSearch" href="{{ route('front.index') }}#courier-search">Courier Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="aboutus" href="{{ route('front.aboutus') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faq" href="{{ route('front.faq') }}">Faq</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact" href="{{ route('front.contactus') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Main Menu Area End -->
