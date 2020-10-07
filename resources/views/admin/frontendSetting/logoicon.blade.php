@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Logo & Icon Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('frontend.logoicon') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row  container-fluid">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo" style="text-transform: uppercase;"><strong>Logo</strong></label>
                            <input class="form-control form-control-lg mb-3" type="file" name="logo" >
                            <small class="text-danger h6">[Image format: PNG]</small>
                        </div>
                        <img style="height: 100px;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/logo.png')}}"/>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="favicon_icon" style="text-transform: uppercase;"><strong>Favicon Icon</strong></label>
                            <input class="form-control form-control-lg mb-3" type="file" name="favicon_icon" >
                            <small class="text-danger h6">[Image format: PNG]</small>
                        </div>
                        <img style="height: 100px;" class="thumbnail img-responsive" src="{{asset('assets/frontend/images/favicon.png')}}"/>
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
    $("#frontend li:nth-child(1)").addClass("active");
</script>
@endsection