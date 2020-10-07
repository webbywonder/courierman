@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Banner Text Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.headertextupdate',$setting->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="header_title" style="text-transform: uppercase;"><strong>Banner Text Title</strong></label>
                        <input class="form-control form-control-lg mb-3" name="header_title" value="{{ $setting->header_title ?? old('header_title') }}"  type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="header_subtitle" style="text-transform: uppercase;"><strong>Banner Text Sub Title</strong></label>
                        <input class="form-control form-control-lg mb-3" name="header_subtitle" value="{{ $setting->header_subtitle ?? old('header_subtitle') }}"  type="text">
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
    $("#frontend li:nth-child(4)").addClass("active");
</script>
@endsection