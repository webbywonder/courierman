@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">About us Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.aboutus') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aboutus_title" style="text-transform: uppercase;"><strong>About us Title</strong></label>
                            <input class="form-control form-control-lg mb-3" name="aboutus_title" value="{{ $setting->aboutus_title ?? old('aboutus_title') }}"  type="text">
                            <input class="form-control form-control-lg mb-3" name="id" value="{{ $setting->id }}"  type="hidden">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="about_us_quote_one" style="text-transform: uppercase;"><strong>About us Quote One</strong></label>
                            <input class="form-control form-control-lg mb-3" name="about_us_quote_one" value="{{ $setting->about_us_quote_one ?? old('about_us_quote_one') }}"  type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="about_us_quote_two" style="text-transform: uppercase;"><strong>About us Quote Two</strong></label>
                            <input class="form-control form-control-lg mb-3" name="about_us_quote_two" value="{{ $setting->about_us_quote_two ?? old('about_us_quote_two') }}"  type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="about_us_quote_three" style="text-transform: uppercase;"><strong>About us Quote Three</strong></label>
                            <input class="form-control form-control-lg mb-3" name="about_us_quote_three" value="{{ $setting->about_us_quote_three ?? old('about_us_quote_three') }}"  type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aboutus_details" style="text-transform: uppercase;"><strong>About us Details</strong></label>
                            <textarea class="form-control" id="aboutus_details" rows="5" name="aboutus_details">{{ $setting->aboutus_details ?? old('aboutus_details') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aboutus_image" style="text-transform: uppercase;"><strong>About us Image</strong></label>
                            <input class="form-control form-control-lg mb-3" type="file" name="aboutus_image" >
                            <small class="text-danger h6">Image will be resize at 530*482 [Image format: JPG,JPEG]</small>
                        </div>
                        <img style="width: 400px;height: 300px;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/aboutus.jpg')}}"/>
                    </div>
                </div>

        </div>             
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block btn-lg">UPDATE</button>
        </div>
        </form>
    </div>
</div>
</div>
<script type="text/javascript">
    $("#frontend").addClass("show");
    $("#frontend li:nth-child(7)").addClass("active");
    bkLib.onDomLoaded(function () {
        new nicEditor({iconsPath: '../../assets/admin/img/nicEditorIcons.gif'}).panelInstance('aboutus_details');
    });
</script>
@endsection