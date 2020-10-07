@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Feature  Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.featureSection') }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="feature_title" style="text-transform: uppercase;"><strong>Feature  Title</strong></label>
                        <input class="form-control form-control-lg mb-3" name="feature_title" value="{{ $setting->feature_title ?? old('feature_title') }}"  type="text">
                        <input class="form-control form-control-lg mb-3" name="id" value="{{ $setting->id }}"  type="hidden">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="feature_subtitle" style="text-transform: uppercase;"><strong>Feature  Subtitle</strong></label>
                        <input class="form-control form-control-lg mb-3" name="feature_subtitle" value="{{ $setting->feature_subtitle ?? old('feature_subtitle') }}"  type="text">
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
    $("#frontend li:nth-child(6)").addClass("active");
    bkLib.onDomLoaded(function () {
        new nicEditor({iconsPath: '../assets/admin/img/nicEditorIcons.gif'}).panelInstance('popular_exam_details');
    });
</script>
@endsection