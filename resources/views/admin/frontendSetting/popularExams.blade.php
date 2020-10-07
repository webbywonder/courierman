@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Popular Exam Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.popularExamUpdate',$setting->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="popular_exam_title" style="text-transform: uppercase;"><strong>Popular Exam Title</strong></label>
                        <input class="form-control form-control-lg mb-3" name="popular_exam_title" value="{{ $setting->popular_exam_title ?? old('popular_exam_title') }}"  type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="popular_exam_details" style="text-transform: uppercase;"><strong>Popular Exam Details</strong></label>
                        <textarea class="form-control" id="popular_exam_details" rows="2" name="popular_exam_details">{{ $setting->popular_exam_details ?? old('popular_exam_details') }}</textarea>
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
    $("#frontend li:nth-child(5)").addClass("active");
    bkLib.onDomLoaded(function () {
        new nicEditor({iconsPath: '../assets/admin/img/nicEditorIcons.gif'}).panelInstance('popular_exam_details');
    });
</script>
@endsection