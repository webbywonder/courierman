<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/bootadmin.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <title>Forgot Password</title>
    </head>
    <body class="bg-info">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-5">
                
                <div class="card border border-success">
                    <div class="card-header text-white text-uppercase h4" style="background: #6DAD29;">Reset Password</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.reset') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col pr-2">
                                    <button type="submit" class="btn btn-block text-uppercase h4 font-weight-bold" style="background: #6DAD29; color:#fff;">Send Reset Link</button>
                                </div>
                            </div>
                            <div class="row">
                                <a class="btn btn-link" href="{{ url('login') }}" style="font-size:16px; color: #6DAD29; font-weight: 600;">
                                    <i class="fa fa-arrow-circle-left"></i> Go Back
                                </a>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   <script src="{{asset('assets/user/js/jquery.min.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('assets/user/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/user/js/bootadmin.min.js')}}"></script>
    <script>
     @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
    
    @if (count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
</body>
</html>
