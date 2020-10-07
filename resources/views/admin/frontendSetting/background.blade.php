@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Background Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.background') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row  container-fluid">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="header_background_image" style="text-transform: uppercase;"><strong>Banner Background Image</strong></label>
                            <input class="form-control form-control-lg mb-3" type="file" name="header_background_image" >
                        </div>
                        <img style="width: 100%;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/banner.jpg')}}"/>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="testimonial_background_image" style="text-transform: uppercase;"><strong>Testimonial Background Image</strong></label>
                            <input class="form-control form-control-lg mb-3" type="file" name="testimonial_background_image" >
                        </div>
                        <img style="width: 100%;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/features_slider.jpg')}}"/>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="breadcumb_background_image" style="text-transform: uppercase;"><strong>Breadcumb Background Image</strong></label>
                            <input class="form-control form-control-lg mb-3" type="file" name="breadcumb_background_image" >
                        </div>
                        <img style="width: 100%;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/breadcrumb.jpg')}}"/>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#frontend").addClass("show");
    $("#frontend li:nth-child(3)").addClass("active");
</script>
@endsection