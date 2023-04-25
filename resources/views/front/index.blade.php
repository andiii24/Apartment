<!DOCTYPE html>
<html
    dir="ltr"
    lang="en"
>
<!-- Mirrored from creativelayers.net/themes/findhouse-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2023 18:55:03 GMT -->
@include('layout.front.head')

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        @include('layout.front.nav')
        <!-- Main Header Nav For Mobile -->

        <!-- Home Design -->
        <div>
            @yield('content')
        </div>
        @include('layout.front.footer')
        <!-- Our Footer Bottom Area -->
    </div>
    <!-- Wrapper End -->
    <script
        type="text/javascript"
        src="{{ asset('js/jquery-3.3.1.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/popper.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/bootstrap.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/jquery.mmenu.all.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/ace-responsive-menu.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/bootstrap-select.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/snackbar.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/simplebar.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/parallax.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/scrollto.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/jquery-scrolltofixed-min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/jquery.counterup.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/wow.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/progressbar.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/slider.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/pricing-slider.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/timepicker.js') }}"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Custom script for all pages -->
    <script
        type="text/javascript"
        src="{{ asset('js/script.js') }}"
    ></script>
    <script>
        $(document).ready(function() {
            // Get the value of the active tab and set the value of the hidden input
            $('a.nav-link').on('shown.bs.tab', function(event) {
                var tab = $(event.target).attr('name');
                $('input[name="service_type"]').val(tab);
            });
        });
    </script>

</body>

<!-- Mirrored from creativelayers.net/themes/findhouse-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2023 18:55:29 GMT -->

</html>
