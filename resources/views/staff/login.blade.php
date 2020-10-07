<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{  asset('assets/frontend/images/favicon.png')}}" />
        <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/bootadmin.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/bootadmin.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/custom.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <title>Branch Staff Panel</title>
    </head>
    <body class="bg-info">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-5">
                    <div class="manager-logo">
                        <a  href="{{ route('front.index') }}">
                            <img src="{{asset('assets/frontend/images/logo.png')}}"  alt="*" style="width:100%;">
                        </a>
                    </div>
                    <div class="card border border-success">
                        <div class="card-header  text-white text-uppercase h4" style="background: #173C5A;">Branch Staff Login Form</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('staff.authenticate') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Username" value="staff">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" value="staff">
                                    <input type="hidden" name="type" value="Staff" class="form-control" >
                                </div>
                                <div class="row">
                                    <div class="col pr-2">
                                        <button type="submit" class="btn btn-block text-uppercase h4 font-weight-bold" style="background: #173C5A; color:#fff;">Login</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <a class="btn btn-link" href="{{ route('staff.password.request') }}" style="font-size:16px; color: #173C5A; font-weight: 600;">
                                        Forgot your password ?
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('assets/user/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/user/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/user/js/bootadmin.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
        @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif

        @if (count($errors) > 0)
        @foreach($errors -> all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        </script>
    </body>
</html>
