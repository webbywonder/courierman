@extends('frontend.layouts.master')
@section('content')
<!-- banner Area Start -->
<section id="banner" class="banner">
    <div class="sectionOverlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="content">
                    <h1>
                        {{ $gs->header_title }}
                    </h1>
                    <p class="tagline">
                        {{ $gs->header_subtitle }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Qurrier Search Section Start -->
<section id="courier-search" class="yogaclasses">
    <div class="container">
        <div class="row justify-content-center mb-4 pb-4">
            <div class="col-md-10 col-xl-8">
                <div class="sectionTheading">
                    <h2>
                        {{ $gs->search_courier_title }}
                    </h2>
                    <p>
                        {{ $gs->search_courier_details }}
                    </p>
                </div>
            </div>
        </div>
        <form action="{{ route('search.courier') }}" method="POST">
            @csrf
            <div class="row SelectArea">
                <div class="col-md-6 col-lg-6 offset-1 offset-md-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="color: #EE005F;">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" name="courier_invoice" class="form-control form-control-lg invoice-search" aria-describedby="basic-addon1" value="{{request()->courier_invoice}}" placeholder="Enter Courier Code/Invoice">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex align-self-end">
                    <div class="submitBtnWrapper">
                        <button type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
        @if(!empty(Session::get('courierInfo')))
        @php
        $list = Session::get('courierInfo')
        @endphp
        <div class="col-md-10 col-lg-10 offset-1 p-0">
            <div class="table-responsive table-bordered">
                <table class="table courier-result">
                    <thead>
                        <tr>
                            <th>Invoice No</th>
                            <th>Courier Date</th>
                            <th>Sender Name</th>
                            <th>Receipient Branch</th>
                            <th>Recipient Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="paddingTop">
                                {{ $list->invoice_id }}
                            </td>
                            <td>
                                <p>
                                    {{ $list->created_at->toDateString() }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $list->sender_name }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $list->branch->name }}
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $list->receiver_name }}
                                </p>
                            </td>
                            <td>
                                @if($list->status  == 'Delivered')
                                <span class="btn btn-sm btn-danger text-uppercase">Delivered</span>
                                @else
                                <span class="btn btn-sm btn-success text-uppercase">Received</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- Qurrier Search Section End -->
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
    $(document).ready(function () {
    @if (Session::has('search'))
            $("#replace").addClass("active");
            @endif

            if (window.location.hash == "#courier-search") {
    $(".nav-link").removeClass("active");
            $("#qurrierSearch").addClass("active");
    }
    ;
            if (window.location.hash == "#topClasses") {
    $(".nav-link").removeClass("active");
            $("#gallery").addClass("active");
    }
    ;
            if (window.location.hash == "#testimonial") {
    $(".nav-link").removeClass("active");
            $("#testimonial2").addClass("active");
    }
    ;
    });
</script>
@endsection

