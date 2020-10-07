@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Contact Us Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.contactus') }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_title" style="text-transform: uppercase;"><strong>Title</strong></label>
                            <input class="form-control form-control-lg mb-3" name="contact_title" value="{{ $setting->contact_title ?? old('contact_title') }}" placeholder="Title"  type="text">
                            <input type="hidden" value="{{ $setting->id }}" name="id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_address" style="text-transform: uppercase;"><strong>Address</strong></label>
                            <input class="form-control form-control-lg mb-3" name="contact_address" value="{{ $setting->contact_address ?? old('contact_address') }}" placeholder="Address"  type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_phone" style="text-transform: uppercase;"><strong>Phone</strong></label>
                            <input class="form-control form-control-lg mb-3" name="contact_phone" value="{{ $setting->contact_phone ?? old('contact_phone') }}" placeholder="Phone" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_email" style="text-transform: uppercase;"><strong>Email</strong></label>
                            <input class="form-control form-control-lg mb-3" name="contact_email" value="{{ $setting->contact_email ?? old('contact_email') }}" placeholder="Email" type="text">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="map" style="text-transform: uppercase;"><strong>Contact Map</strong></label>
                            <textarea class="form-control" id="map" rows="2" name="map">{!! $setting->map !!}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">UPDATE</button>
                    </div>
                </div>
            </form><br>
            <div class="col-md-12">
                {!! $setting->map !!}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#frontend").addClass("show");
    $("#frontend li:nth-child(8)").addClass("active");
</script>
@endsection