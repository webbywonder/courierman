<!--  Footer Section Start -->
<footer class="footer">

    <div class="copyRightArea">
        <div class="container">
            <div class="row">
                <div class="col-6 footer_text">
                    <p>{{ $gs->footer_text }}</p>
                </div>
                <div class="col-6 text-right">
                    <div class="socialLinks">
                        <ul>
                            @foreach($socialList as $social)
                            <li>
                                <a href="{{ $social->link }}">
                                    {!!  $social->code  !!}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--  Footer Section End -->

<!--Start ClickToTop-->
<div class="totop">
    <a href="#top">
        <p>
            &uarr;
        </p>
    </a>
</div>
<!--End ClickToTop-->


<!--Bootstrap JS-->
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.js')}}"></script>
<!-- Way Point js -->
<script src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/counter.js')}}"></script>
<!-- imagesloaded js -->
<script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
<!-- Contact js -->
<script src="{{asset('assets/frontend/js/contact.js')}}"></script>
<!-- Owl carosul js -->
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<!-- Venobox JS-->
<script src="{{asset('assets/frontend/js/venobox.min.js')}}"></script>
<!--Main-->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>

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