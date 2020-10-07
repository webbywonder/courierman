@extends('frontend.layouts.master')
@section('content')
<!-- banner Area Start -->
<section id="yogabreadcrumb" class="yogabreadcrumb">
    <div class="bcoverlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Content">
                    <h2>
                        About Us
                    </h2>
                    <div class="links">
                        <ul>
                            <li>
                                <a href="{{ route('front.index') }}">Home</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                <a class="active" href="{{ route('front.aboutus') }}">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- faq page content area start-->
<section class="faq-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-faq-item">
                    <!-- single faq item -->
                    <div class="content">
                        <h4 class="title">{{ $gs->about_us_quote_one }}</h4>
                    </div>
                </div><!-- //. single faq item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-faq-item">
                    <!-- single faq item -->
                    <div class="content">
                        <h4 class="title">{{ $gs->about_us_quote_two }}</h4>
                    </div>
                </div><!-- //. single faq item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-faq-item">
                    <!-- single faq item -->
                    <div class="content">
                        <h4 class="title">{{ $gs->about_us_quote_three }}</h4>
                    </div>
                </div><!-- //. single faq item -->
            </div>
        </div>
    </div>
</section>
<!-- faq page content area end -->
<!-- error 404 page content area start -->
<div class="error-404-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="right-content-area">
                    <div class="details-text" style="text-align: left;">
                        <p>{!! $gs->aboutus_details !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="left-content-area">
                    <!-- left content area -->
                    <div class="img-wrapper">
                        <img class="img-fluid" src="{{asset('assets/frontend/images/aboutus.jpg')}}" alt="">
                    </div>
                </div><!-- //. left content area -->
            </div>
        </div>
    </div>
</div>
<!-- error 404 page content area end -->
<!-- Counter Area Start -->
<section id="counter" class="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="c-box">
                    <p class="count">{{ $gs->departure_courier }}</p><span>+</span>
                    <h3>Departure Courier</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="c-box">
                    <p class="count">{{ $gs->upcoming_courier }}</p><span>+</span>
                    <h3>Upcoming Courier</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="c-box">
                    <p class="count">{{ $gs->total_deliver }}</p><span>+</span>
                    <h3>Total Deliver</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Area End -->
<!-- Testimonial Area Start -->
<section id="testimonial" class="testimonial">
    <div class="sectionOverlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-xl-6">
                <div class="sectionTheading">
                    <h2>
                        {{ $gs->testimonial_title }}
                    </h2>
                    <img src="assets/frontend/images/titleborderwhite.png" alt="">
                    <p>
                        {{ $gs->testimonial_details }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonialSlider owl-carousel">
                    @foreach($testimonialList as $testimonial)
                    <div class="single-testimonials">
                        <p>{{ $testimonial->comment }}</p>
                        <div class="name-box-wrapper">
                            <div class="img-box">
                                <img src="{{('assets/frontend/images/testimonial/'.$testimonial->image)}}" alt="Awesome Image">
                            </div>
                            <div class="text-box">
                                <h4>{{ $testimonial->name }}</h4>
                                <span>{{ $testimonial->designation }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->

<script type="text/javascript">
    $("#home").removeClass("active");
    $("#aboutus").addClass("active");
</script>
@endsection

