@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Latest Blog Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.latestBlog') }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="blog_title" style="text-transform: uppercase;"><strong>Latest Blog Title</strong></label>
                        <input class="form-control form-control-lg mb-3" name="blog_title" value="{{ $setting->blog_title ?? old('blog_title') }}"  type="text">
                        <input class="form-control form-control-lg mb-3" name="id" value="{{ $setting->id }}"  type="hidden">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="blog_details" style="text-transform: uppercase;"><strong>Latest Blog Details</strong></label>
                        <textarea class="form-control" id="join_us_details" rows="2" name="blog_details">{{ $setting->blog_details ?? old('blog_details') }}</textarea>
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
    $("#frontend li:nth-child(9)").addClass("active");
    bkLib.onDomLoaded(function () {
        new nicEditor({iconsPath: '../assets/admin/img/nicEditorIcons.gif'}).panelInstance('popular_exam_details');
    });
</script>
@endsection