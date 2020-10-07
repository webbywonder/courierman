<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{  asset('assets/frontend/images/favicon.png')}}" />
        <link rel="stylesheet" href="{{asset('assets/admin/css/morris.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/bootadmin.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap-toggle.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/owl.theme.default.min.css')}}">
         <link rel="stylesheet" href="{{asset('assets/user/css/select2.min.css')}}">
         <link rel="stylesheet" href="{{asset('assets/user/css/select2-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/datatables.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/user/css/buttons.datatables.min.css')}}">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="{{asset('assets/user/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/user/js/nicEdit.js')}}"></script>
        <script src="{{asset('assets/user/js/bootstrap-toggle.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="{{asset('assets/user/js/datatables.min.js')}}"></script>
        <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
        <link rel="stylesheet" href="{{asset('assets/user/css/custom.css')}}">
        <script src="{{asset('assets/admin/js/morris.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/raphael.min.js')}}"></script>
        <script src="{{asset('assets/user/js/select2.min.js')}}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @php
        $gs = App\Model\GeneralSetting::first();
        @endphp
        <title>{{ $gs->title }}</title>
    </head>
    <body class="bg-light" id="test">
        <nav class="navbar navbar-expand navbar-dark bg-custom-background">
            <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
            <a class="navbar-brand" href="#">Branch Staff Panel</a>
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; {{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                            <a href="{{ route('staff.profile') }}" class="dropdown-item"><i class="fa fa-user"></i> Profile</a>
                            <a href="{{ route('staff.changepassword') }}" class="dropdown-item"><i class="fa fa-cog"></i> Change Password</a>
                            <a href="#"  class="dropdown-item"onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="fa fa-angle-left"></i> Logout</a>
                            <form id="logout-form" action="{{ route('staff.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>