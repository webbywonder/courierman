@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Footer Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.footer') }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="footer_text" style="text-transform: uppercase;"><strong>Footer Text</strong></label>
                        <input class="form-control form-control-lg mb-3" name="footer_text" value="{{ $setting->footer_text ?? old('footer_text') }}"  type="text">
                        <input type="hidden" value="{{ $setting->id }}" name="id">
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
    $("#frontend li:nth-child(11)").addClass("active");
</script>
@endsection