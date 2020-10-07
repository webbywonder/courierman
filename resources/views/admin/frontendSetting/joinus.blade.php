@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Join Us Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.joinus') }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="join_us_title" style="text-transform: uppercase;"><strong>Join Us Title</strong></label>
                        <input class="form-control form-control-lg mb-3" name="join_us_title" value="{{ $setting->join_us_title ?? old('join_us_title') }}"  type="text">
                        <input class="form-control form-control-lg mb-3" name="id" value="{{ $setting->id }}"  type="hidden">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="join_us_details" style="text-transform: uppercase;"><strong>Join Us Details</strong></label>
                        <textarea class="form-control" id="join_us_details" rows="2" name="join_us_details">{{ $setting->join_us_details ?? old('join_us_details') }}</textarea>
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
    $("#frontend li:nth-child(7)").addClass("active");
    bkLib.onDomLoaded(function () {
        new nicEditor({iconsPath: '../assets/admin/img/nicEditorIcons.gif'}).panelInstance('popular_exam_details');
    });
</script>
@endsection