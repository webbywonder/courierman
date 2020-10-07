@include('staff/layouts/header')
<div class="d-flex">
    @include('staff/layouts/sidebar')
    @yield('content')
</div>
@include('staff/layouts/footer')