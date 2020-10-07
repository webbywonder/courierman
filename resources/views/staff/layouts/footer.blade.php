
<script src="{{asset('assets/user/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/user/js/bootadmin.min.js')}}"></script>
<script src="{{asset('assets/user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/user/js/custom.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
     @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
    
     @if(Session::has('error'))
        toastr.success("{{ Session::get('error') }}");
    @endif
    
    @if (count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif    
</script>
<script>
    $(document).ready(function () {
        var date_input = $('input[name="start_date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })
    $(document).ready(function () {
        var date_input = $('input[name="end_date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })
</script>

@yield('script')
</body>
</html>