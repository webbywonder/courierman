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
                        FAQ
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
                                <a class="active" href="{{ route('front.faq') }}">FAQ</a>
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
            @foreach($faqList as $key=>$faq)
            <div class="col-lg-4 col-md-6">
                <div class="single-faq-item">
                    <!-- single faq item -->
                    <div class="number">
                        {{ $key+1 }}
                    </div>
                    <div class="content">
                        <h4 class="title">{{ $faq->question }}</h4>
                        <p>{{ $faq->answer }}</p>
                    </div>
                </div><!-- //. single faq item -->
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- faq page content area end -->

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
<!-- service page content area start-->
<section class="faq-page-content-area service-courier">
    <div class="container">
        <div class="row justify-content-center mb-4 pb-4">
            <div class="col-md-10 col-xl-8">
                <div class="sectionTheading">
                    <h2>
                        {{ $gs->service_title }}
                    </h2>
                    <p>
                        {{ $gs->service_details }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($serviceList as $key=>$service)
            <div class="col-lg-6 col-md-6">
                <div class="single-faq-item">
                    <!-- single faq item -->
                    <div class="number">
                        {!! $service->icon !!}
                    </div>
                    <div class="content">
                        <h4 class="title">{{ $service->title }}</h4>
                        <p>{!! $service->details !!}</p>
                    </div>
                </div><!-- //. single faq item -->
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- service page content area end -->

<script type="text/javascript">
    $("#home").removeClass("active");
    $("#aboutus").removeClass("active");
    $("#faq").addClass("active");
</script>
@endsection
