@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Basic Setting</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('admin.basicSettingUpdate',$settings->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row container-fluid">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" style="text-transform: uppercase;"><strong>Website Title</strong></label>
                            <input class="form-control form-control-lg mb-3" name="title" value="{{ $settings->title ?? old('title') }}"  type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="website_title" style="text-transform: uppercase;"><strong>Site Base Color Code</strong></label>
                            <input class="form-control form-control-lg mb-3"  name="color_code" value="{{ $settings->color_code }}" style="background:#{{ $settings->color_code ?? old('color_code') }}" type="text">
                        </div>
                    </div> 
                </div>
                <div class="row  container-fluid">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="base_currency" style="text-transform: uppercase;"><strong>Base Currency Text</strong></label>
                            <input class="form-control form-control-lg mb-3" name="base_currency" value="{{ $settings->base_currency ?? old('base_currency') }}"  type="text">
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="website_title" style="text-transform: uppercase;"><strong>Base Currency Symbol</strong></label>
                            <input class="form-control form-control-lg mb-3" name="base_currency_symbol" value="{{ $settings->base_currency_symbol ?? old('base_currency_symbol') }}" style="background:#{{ $settings->base_currency_symbol }}" type="text">
                        </div>
                    </div> 

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email_verification" style="text-transform: uppercase;"><strong>EMAIL NOTIFICATION</strong></label>
                            <input type="checkbox" data-onstyle="success" data-offstyle="danger" data-width="100%"  data-toggle="toggle" name="email_verification"  {{ $settings->email_verification==1 ? 'checked' : '' }}>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sms_verification" style="text-transform: uppercase;"><strong>SMS NOTIFICATION</strong></label>
                            <input type="checkbox" data-onstyle="success" data-offstyle="danger" data-width="100%"  data-toggle="toggle" name="sms_verification" {{ $settings->sms_verification==1 ? 'checked' : '' }}>
                        </div>
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
    $("#settings").addClass("show");
    $("#settings li:first-child").addClass("active");
    bkLib.onDomLoaded(function () {
        new nicEditor({iconsPath: '../assets/admin/img/nicEditorIcons.gif'}).panelInstance('address');
    });
</script>
@endsection
