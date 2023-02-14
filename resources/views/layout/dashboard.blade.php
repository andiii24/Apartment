<!DOCTYPE html>
<html
    dir="ltr"
    lang="en"
>

<!-- Mirrored from creativelayers.net/themes/findhouse-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2023 18:56:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="keywords"
        content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor"
    >
    <meta
        name="description"
        content="FindHouse - Real Estate HTML Template"
    >
    <meta
        name="CreativeLayers"
        content="ATFN"
    >
    <!-- css file -->
    <link
        rel="stylesheet"
        href="{{ asset('css/bootstrap.min.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/dashbord_navitaion.css') }}"
    >
    <!-- Responsive stylesheet -->
    <link
        rel="stylesheet"
        href="{{ asset('css/responsive.css') }}"
    >
    <!-- Title -->
    <title>FindHouse - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link
        href="{{ asset('images/favicon.ico') }}"
        sizes="128x128"
        rel="shortcut icon"
        type="image/x-icon"
    />
    <link
        href="{{ asset('images/favicon.ico') }}"
        sizes="128x128"
        rel="shortcut icon"
    />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        @include('layout.admin.nav')

        <!-- Main Header Nav For Mobile -->
        {{-- sidenar --}}
        <div class="row">
            <div class="col-1">
                @include('layout.admin.sidebar')
            </div>
            <!-- Our Dashbord -->
            <div class="col-11">
                @yield('content')
            </div>
        </div>
        @include('layout.admin.footer')
        <a
            class="scrollToHome"
            href="#"
        ><i class="flaticon-arrows"></i></a>
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
        src="{{ asset('js/chart.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/chart-custome.js') }}"
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
        src="{{ asset('js/timepicker.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/wow.min.js') }}"
    ></script>
    <script
        type="text/javascript"
        src="{{ asset('js/dashboard-script.js') }}"
    ></script>
    <!-- Custom script for all pages -->
    <script
        type="text/javascript"
        src="{{ asset('js/script.js') }}"
    ></script>
</body>

<!-- Mirrored from creativelayers.net/themes/findhouse-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2023 18:56:25 GMT -->

</html>
