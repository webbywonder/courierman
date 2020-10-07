@include('admin/layouts/header')
<div class="d-flex">
    @include('admin/layouts/sidebar')
    @yield('content')
</div>
@include('admin/layouts/footer')