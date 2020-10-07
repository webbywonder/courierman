@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Exams Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.exams') }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exams_title" style="text-transform: uppercase;"><strong>Exams Title</strong></label>
                        <input class="form-control form-control-lg mb-3" name="exams_title" value="{{ $setting->exams_title ?? old('exams_title') }}"  type="text">
                        <input class="form-control form-control-lg mb-3" name="id" value="{{ $setting->id }}"  type="hidden">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exams_details" style="text-transform: uppercase;"><strong>Exams Details</strong></label>
                        <textarea class="form-control" id="exams_details" rows="2" name="exams_details">{{ $setting->exams_details ?? old('exams_details') }}</textarea>
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
    $("#frontend li:nth-child(14)").addClass("active");
   
</script>
@endsection