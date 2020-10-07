@include('manager/layouts/header')
<div class="d-flex">
    @include('manager/layouts/sidebar')
    @yield('content')
</div>
@include('manager/layouts/footer')