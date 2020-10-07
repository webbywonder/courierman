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
                        {{ $gs->contact_title }}
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
                                <a class="active" href="{{ route('front.contactus') }}">{{ $gs->contact_title }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- contact infor area start -->
<div class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="left-content-area">
                    <div class="inner-section-title">
                        <span class="title">{{ $gs->contact_title }}</span>
                    </div>
                    <ul>
                        <li>
                            <div class="single-contact-info-item"><!-- single contact info item -->
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <span class="subtitle">Don't Hesitate To Contact Us!</span>
                                    <span class="title">{{ $gs->contact_phone }}</span>
                                </div>
                            </div><!-- //.single contact info item -->
                        </li>

                        <li>
                            <div class="single-contact-info-item"><!-- single contact info item -->
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <span class="subtitle">{{ $gs->contact_address }}</span>
                                    <span class="title">Company Address</span>
                                </div>
                            </div><!-- //.single contact info item -->
                        </li>
                        <li>
                            <div class="single-contact-info-item"><!-- single contact info item -->
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <span class="subtitle">Get In Touch With Us</span>
                                    <span class="title">{{ $gs->contact_email }}</span>
                                </div>
                            </div><!-- //.single contact info item -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 mb-4">
                <div class="map-wrapper" style="border:5px solid #FFFFFF;">
                    {!! $gs->map !!}
                </div>
            </div>
            <div class="col-lg-12 col-md-12" id="contactustest">
                <div class="left-content-area">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-6">
                            <div class="sectionTheading">
                                <h2>
                                    CONTACT US
                                </h2>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('visitor.message') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6" style="line-height: 4.5em;">
                                <div class="form-element margin-bottom-20">
                                    <input type="text" id="name" name="name" class="input-field contact-input-field" placeholder="Enter name" required>
                                </div>
                            </div>
                            <div class="col-lg-6" style="line-height: 4.5em;">
                                <div class="form-element margin-bottom-20">
                                    <input type="text" id="phone" name="phone" class="input-field contact-input-field" placeholder="Enter phone number" required>
                                </div>
                            </div>
                            <div class="col-lg-12" style="line-height: 5.5em;">
                                <div class="form-element margin-bottom-20">
                                    <input type="email" id="email" name="email" class="input-field contact-input-field" placeholder="Enter email address" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-element textarea margin-bottom-20">
                                    <textarea  id="message" cols="30" rows="10" name="messages" placeholder="Enter message" class="input-field textarea contact-input-field"></textarea>
                                </div>
                            </div>
                        </div><br>
                        <div class="btn-wrapper">
                            <button type="submit" class="submit-btn">Submit now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact infor area end -->
<script type="text/javascript">
    $("#home").removeClass("active");
    $("#aboutus").removeClass("active");
    $("#contact").addClass("active");
</script>
@endsection