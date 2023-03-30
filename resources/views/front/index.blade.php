<!DOCTYPE html>
<html
    dir="ltr"
    lang="en"
>
<!-- Mirrored from creativelayers.net/themes/findhouse-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2023 18:55:03 GMT -->

<head>
    <meta charset="utf-8" />
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    />
    <meta
        name="keywords"
        content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor"
    />
    <meta
        name="description"
        content="FindHouse - Real Estate HTML Template"
    />
    <meta
        name="CreativeLayers"
        content="ATFN"
    />
    <!-- css file -->
    <link
        rel="stylesheet"
        href="css/bootstrap.min.css"
    />
    <link
        rel="stylesheet"
        href="css/style.css"
    />
    <!-- Responsive stylesheet -->
    <link
        rel="stylesheet"
        href="css/responsive.css"
    />
    <!-- Title -->
    <title>FindHouse - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link
        href="images/favicon.ico"
        sizes="128x128"
        rel="shortcut icon"
        type="image/x-icon"
    />
    <link
        href="images/favicon.ico"
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
        <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
            <div class="container-fluid p0">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img
                            class="nav_logo_img img-fluid"
                            src="images/header-logo.png"
                            alt="header-logo.png"
                        />
                        <button
                            type="button"
                            id="menu-btn"
                        >
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a
                        href="#"
                        class="navbar_brand float-left dn-smd"
                    >
                        <img
                            style="background-color:white "
                            class="logo1 img-fluid"
                            src="images/header-logo.png"
                            alt="header-logo.png"
                        />
                        <img
                            class="logo2 img-fluid"
                            src="images/header-logo2.png"
                            alt="header-logo2.png"
                        />
                        <span>Gojoye</span>
                    </a>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul
                        id="respMenu"
                        class="ace-responsive-menu text-right"
                        data-menu-style="horizontal"
                    >
                        <li>
                            <a href="{{ url('/') }}">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><span class="title">Property</span></a>
                        </li>
                        <li class="last">
                            <a href="page-contact.html"><span class="title">Contact Us</span></a>
                        </li>
                        <li class="list-inline-item list_s">
                            <a
                                href="#"
                                class="btn flaticon-user"
                                data-toggle="modal"
                                data-target=".bd-example-modal-lg"
                            >
                                <span class="dn-lg">Login/Register</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Modal -->
        <div
            class="sign_up_modal modal fade bd-example-modal-lg"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-lg"
                role="document"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body container pb20">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul
                                    class="sign_up_tab nav nav-tabs"
                                    id="myTab"
                                    role="tablist"
                                >
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="home-tab"
                                            data-toggle="tab"
                                            href="#home"
                                            role="tab"
                                            aria-controls="home"
                                            aria-selected="true"
                                        >Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="profile-tab"
                                            data-toggle="tab"
                                            href="#profile"
                                            role="tab"
                                            aria-controls="profile"
                                            aria-selected="false"
                                        >Register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="tab-content container"
                            id="myTabContent"
                        >
                            <div
                                class="row mt25 tab-pane fade show active"
                                id="home"
                                role="tabpanel"
                                aria-labelledby="home-tab"
                            >
                                <div class="col-lg-6 col-xl-6">
                                    <div class="login_thumb">
                                        <img
                                            class="img-fluid w100"
                                            src="images/resource/login.jpg"
                                            alt="login.jpg"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="login_form">
                                        <form action="#">
                                            <div class="heading">
                                                <h4>Login</h4>
                                            </div>
                                            <div class="row mt25">
                                                <div class="col-lg-12">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-fb btn-block"
                                                    >
                                                        <i class="fa fa-facebook float-left mt5"></i> Login with Facebook
                                                    </button>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-googl btn-block"
                                                    >
                                                        <i class="fa fa-google float-left mt5"></i> Login with Google
                                                    </button>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="input-group mb-2 mr-sm-2">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="inlineFormInputGroupUsername2"
                                                    placeholder="User Name Or Email"
                                                />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-user"></i></div>
                                                </div>
                                            </div>
                                            <div class="input-group form-group">
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="Password"
                                                />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="flaticon-password"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group custom-control custom-checkbox">
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    id="exampleCheck1"
                                                />
                                                <label
                                                    class="custom-control-label"
                                                    for="exampleCheck1"
                                                >Remember me</label>
                                                <a
                                                    class="btn-fpswd float-right"
                                                    href="#"
                                                >Lost your password?</a>
                                            </div>
                                            <button
                                                type="submit"
                                                class="btn btn-log btn-block btn-thm"
                                            >
                                                Log In
                                            </button>
                                            <p class="text-center">
                                                Don't have an account? <a
                                                    class="text-thm"
                                                    href="#"
                                                >Register</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="row mt25 tab-pane fade"
                                id="profile"
                                role="tabpanel"
                                aria-labelledby="profile-tab"
                            >
                                <div class="col-lg-6 col-xl-6">
                                    <div class="regstr_thumb">
                                        <img
                                            class="img-fluid w100"
                                            src="images/resource/regstr.jpg"
                                            alt="regstr.jpg"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="sign_up_form">
                                        <div class="heading">
                                            <h4>Register</h4>
                                        </div>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-block btn-fb"
                                                    >
                                                        <i class="fa fa-facebook float-left mt5"></i> Login with Facebook
                                                    </button>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-block btn-googl"
                                                    >
                                                        <i class="fa fa-google float-left mt5"></i> Login with Google
                                                    </button>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName"
                                                    placeholder="User Name"
                                                />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-user"></i></div>
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="exampleInputEmail2"
                                                    placeholder="Email"
                                                />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    id="exampleInputPassword2"
                                                    placeholder="Password"
                                                />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="flaticon-password"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group input-group">
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    id="exampleInputPassword3"
                                                    placeholder="Re-enter password"
                                                />
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="flaticon-password"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ui_kit_select_search mb0">
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                >
                                                    <option data-tokens="SelectRole">Single User</option>
                                                    <option data-tokens="Agent/Agency">Agent</option>
                                                    <option data-tokens="SingleUser">Multi User</option>
                                                </select>
                                            </div>
                                            <div class="form-group custom-control custom-checkbox">
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    id="exampleCheck2"
                                                />
                                                <label
                                                    class="custom-control-label"
                                                    for="exampleCheck2"
                                                >I have read and accept the Terms and Privacy Policy?</label>
                                            </div>
                                            <button
                                                type="submit"
                                                class="btn btn-log btn-block btn-thm"
                                            >
                                                Sign Up
                                            </button>
                                            <p class="text-center">
                                                Already have an account? <a
                                                    class="text-thm"
                                                    href="#"
                                                >Log In</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav For Mobile -->
        <div
            id="page"
            class="stylehome1 h0"
        >
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2 text-center">
                        <img
                            class="nav_logo_img img-fluid mt20"
                            src="images/header-logo2.png"
                            alt="header-logo2.png"
                        />
                        <span class="mt20">Gojoye</span>
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item list_s">
                            <a href="page-register.html"><span class="flaticon-user"></span></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#menu"><span></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav
                id="menu"
                class="stylehome1"
            >
                <ul>
                    <li>
                        <a href="{{ url('index') }}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <span>Property</span>
                        <ul>
                            <li>
                                <span>Property</span>
                                <ul>
                                    <li><a href="page-dashboard.html">Dashboard</a></li>
                                    <li><a href="page-my-properties.html">My Properties</a></li>
                                    <li><a href="page-add-new-property.html">Add New Property</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>Blog</span>
                        <ul>
                            <li><a href="page-blog-v1.html">Blog List 1</a></li>
                            <li><a href="page-blog-grid.html">Blog List 2</a></li>
                            <li><a href="page-blog-single.html">Single Post</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Pages</span>
                        <ul>
                            <li>
                                <span>Shop</span>
                                <ul>
                                    <li><a href="page-shop.html">Shop</a></li>
                                    <li><a href="page-shop-single.html">Shop Single</a></li>
                                    <li><a href="page-shop-cart.html">Cart</a></li>
                                    <li><a href="page-shop-checkout.html">Checkout</a></li>
                                    <li><a href="page-shop-order.html">Order</a></li>
                                </ul>
                            </li>
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                            <li><a href="page-faq.html">Faq</a></li>
                            <li><a href="page-login.html">LogIn</a></li>

                        </ul>
                    </li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li>
                        <a href="page-login.html"><span class="flaticon-user"></span> Login</a>
                    </li>
                    <li>
                        <a href="page-register.html"><span class="flaticon-edit"></span> Register</a>
                    </li>
                    <li class="cl_btn">
                        <a
                            class="btn btn-block btn-lg btn-thm circle"
                            href="#"
                        ><span class="flaticon-plus"></span> Create Listing</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Home Design -->
        <section class="home-one home1-overlay home1_bgi1">
            <div class="container">
                <div class="row posr">
                    <div class="col-lg-12">
                        <div class="home_content">
                            <div class="home-text text-center">
                                <h2 class="fz55">Find Your Dream Home</h2>
                            </div>
                            <div class="home_adv_srch_opt">
                                <ul
                                    class="nav nav-pills"
                                    id="pills-tab"
                                    role="tablist"
                                >
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="pills-home-tab"
                                            data-toggle="pill"
                                            href="#pills-home"
                                            role="tab"
                                            aria-controls="pills-home"
                                            aria-selected="true"
                                        >Buy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-profile-tab"
                                            data-toggle="pill"
                                            href="#pills-profile"
                                            role="tab"
                                            aria-controls="pills-profile"
                                            aria-selected="false"
                                        >Rent</a>
                                    </li>
                                </ul>
                                <div
                                    class="tab-content home1_adsrchfrm"
                                    id="pills-tabContent"
                                >
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-home"
                                        role="tabpanel"
                                        aria-labelledby="pills-home-tab"
                                    >
                                        <div class="home1-advnc-search">
                                            <ul class="h1ads_1st_list mb0">
                                                <li class="list-inline-item">
                                                    <div class="form-group">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputName1"
                                                            placeholder="Enter keyword..."
                                                        />
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="search_option_two">
                                                        <div class="candidate_revew_select">
                                                            <select class="selectpicker w100 show-tick">
                                                                <option>Property Type</option>
                                                                <option>Apartment</option>
                                                                <option>Bungalow</option>
                                                                <option>Condo</option>
                                                                <option>House</option>
                                                                <option>Land</option>
                                                                <option>Single Family</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="form-group">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputEmail"
                                                            placeholder="Location"
                                                        />
                                                        <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="small_dropdown2">
                                                        <div
                                                            id="prncgs"
                                                            class="btn dd_btn"
                                                        >
                                                            <span>Price</span>
                                                            <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                                        </div>
                                                        <div class="dd_content2">
                                                            <div class="pricing_acontent">
                                                                <!-- <input type="text" class="amount" placeholder="$52,239">
               <input type="text" class="amount2" placeholder="$985,14">
               <div class="slider-range"></div> -->
                                                                <span id="slider-range-value1"></span>
                                                                <span id="slider-range-value2"></span>
                                                                <div id="slider"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="custome_fields_520 list-inline-item">
                                                    <div class="navbered">
                                                        <div class="mega-dropdown">
                                                            <span
                                                                id="show_advbtn"
                                                                class="dropbtn"
                                                            >Advanced <i class="flaticon-more pl10 flr-520"></i></span>
                                                            <div class="dropdown-content">
                                                                <div class="row p15">
                                                                    <div class="col-lg-12">
                                                                        <h4 class="text-thm3">Amenities</h4>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck1"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck1"
                                                                                    >Air Conditioning</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck2"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck2"
                                                                                    >Lawn</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck3"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck3"
                                                                                    >Swimming Pool</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck4"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck4"
                                                                                    >Barbeque</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck5"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck5"
                                                                                    >Microwave</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck6"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck6"
                                                                                    >TV Cable</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck7"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck7"
                                                                                    >Dryer</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck8"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck8"
                                                                                    >Outdoor Shower</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck9"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck9"
                                                                                    >Washer</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck10"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck10"
                                                                                    >Gym</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck11"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck11"
                                                                                    >Refrigerator</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck12"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck12"
                                                                                    >WiFi</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck13"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck13"
                                                                                    >Laundry</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck14"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck14"
                                                                                    >Sauna</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck15"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck15"
                                                                                    >Window Coverings</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="row p15 pt0-xsd">
                                                                    <div class="col-lg-11 col-xl-10">
                                                                        <ul class="apeartment_area_list mb0">
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Bathrooms</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                        <option>7</option>
                                                                                        <option>8</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Bedrooms</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                        <option>7</option>
                                                                                        <option>8</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Year built</option>
                                                                                        <option>2013</option>
                                                                                        <option>2014</option>
                                                                                        <option>2015</option>
                                                                                        <option>2016</option>
                                                                                        <option>2017</option>
                                                                                        <option>2018</option>
                                                                                        <option>2019</option>
                                                                                        <option>2020</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Built-up Area</option>
                                                                                        <option>Adana</option>
                                                                                        <option>Ankara</option>
                                                                                        <option>Antalya</option>
                                                                                        <option>Bursa</option>
                                                                                        <option>Bodrum</option>
                                                                                        <option>Gaziantep</option>
                                                                                        <option>İstanbul</option>
                                                                                        <option>İzmir</option>
                                                                                        <option>Konya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-1 col-xl-2">
                                                                        <div class="mega_dropdown_content_closer">
                                                                            <h5 class="text-thm text-right mt15">
                                                                                <span
                                                                                    id="hide_advbtn"
                                                                                    class="curp"
                                                                                >Hide</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="search_option_button">
                                                        <button
                                                            type="submit"
                                                            class="btn btn-thm"
                                                        >Search</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-profile"
                                        role="tabpanel"
                                        aria-labelledby="pills-profile-tab"
                                    >
                                        <div class="home1-advnc-search">
                                            <ul class="h1ads_1st_list mb0">
                                                <li class="list-inline-item">
                                                    <div class="form-group">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputName2"
                                                            placeholder="Enter keyword..."
                                                        />
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="search_option_two">
                                                        <div class="candidate_revew_select">
                                                            <select class="selectpicker w100 show-tick">
                                                                <option>Property Type</option>
                                                                <option>Apartment</option>
                                                                <option>Bungalow</option>
                                                                <option>Condo</option>
                                                                <option>House</option>
                                                                <option>Land</option>
                                                                <option>Single Family</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="form-group">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputEmail3"
                                                            placeholder="Location"
                                                        />
                                                        <label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="small_dropdown2">
                                                        <div
                                                            id="prncgs2"
                                                            class="btn dd_btn"
                                                        >
                                                            <span>Price</span>
                                                            <label for="exampleInputEmail4"><span class="fa fa-angle-down"></span></label>
                                                        </div>
                                                        <div class="dd_content2">
                                                            <div class="pricing_acontent">
                                                                <input
                                                                    type="text"
                                                                    class="amount"
                                                                    placeholder="$52,239"
                                                                />
                                                                <input
                                                                    type="text"
                                                                    class="amount2"
                                                                    placeholder="$985,14"
                                                                />
                                                                <div class="slider-range"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="custome_fields_520 list-inline-item">
                                                    <div class="navbered">
                                                        <div class="mega-dropdown">
                                                            <span
                                                                id="show_advbtn2"
                                                                class="dropbtn"
                                                            >Advanced <i class="flaticon-more pl10 flr-520"></i></span>
                                                            <div class="dropdown-content">
                                                                <div class="row p15">
                                                                    <div class="col-lg-12">
                                                                        <h4 class="text-thm3">Amenities</h4>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck16"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck16"
                                                                                    >Air Conditioning</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck17"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck17"
                                                                                    >Lawn</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck18"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck18"
                                                                                    >Swimming Pool</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck19"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck19"
                                                                                    >Barbeque</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck20"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck20"
                                                                                    >Microwave</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck21"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck21"
                                                                                    >TV Cable</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck22"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck22"
                                                                                    >Dryer</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck23"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck23"
                                                                                    >Outdoor Shower</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck24"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck24"
                                                                                    >Washer</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck25"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck25"
                                                                                    >Gym</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck26"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck26"
                                                                                    >Refrigerator</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck27"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck27"
                                                                                    >WiFi</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                        <ul class="ui_kit_checkbox selectable-list">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck28"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck28"
                                                                                    >Laundry</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck29"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck29"
                                                                                    >Sauna</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input
                                                                                        type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="customCheck30"
                                                                                    />
                                                                                    <label
                                                                                        class="custom-control-label"
                                                                                        for="customCheck30"
                                                                                    >Window Coverings</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="row p15 pt0-xsd">
                                                                    <div class="col-lg-11 col-xl-10">
                                                                        <ul class="apeartment_area_list mb0">
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Bathrooms</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                        <option>7</option>
                                                                                        <option>8</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Bedrooms</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                        <option>7</option>
                                                                                        <option>8</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Year built</option>
                                                                                        <option>2013</option>
                                                                                        <option>2014</option>
                                                                                        <option>2015</option>
                                                                                        <option>2016</option>
                                                                                        <option>2017</option>
                                                                                        <option>2018</option>
                                                                                        <option>2019</option>
                                                                                        <option>2020</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <div class="candidate_revew_select">
                                                                                    <select class="selectpicker w100 show-tick">
                                                                                        <option>Built-up Area</option>
                                                                                        <option>Adana</option>
                                                                                        <option>Ankara</option>
                                                                                        <option>Antalya</option>
                                                                                        <option>Bursa</option>
                                                                                        <option>Bodrum</option>
                                                                                        <option>Gaziantep</option>
                                                                                        <option>İstanbul</option>
                                                                                        <option>İzmir</option>
                                                                                        <option>Konya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-1 col-xl-2">
                                                                        <div class="mega_dropdown_content_closer">
                                                                            <h5 class="text-thm text-right mt15">
                                                                                <span
                                                                                    id="hide_advbtn2"
                                                                                    class="curp"
                                                                                >Hide</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="search_option_button">
                                                        <button
                                                            type="submit"
                                                            class="btn btn-thm"
                                                        >Search</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Properties -->
        <section
            id="feature-property"
            class="feature-property bgc-f7"
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#feature-property">
                            <div class="mouse_scroll">
                                <div class="icon">
                                    <h4>Scroll Down</h4>
                                    <p>to discover more</p>
                                </div>
                                <div class="thumb">
                                    <img
                                        src="images/resource/mouse.png"
                                        alt="mouse.png"
                                    />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container ovh">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center mb40">
                            <h2>Featured Properties</h2>
                            <p>Best Houses with fair price</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feature_property_slider">
                            @foreach ($properties as $key => $item)
                                <div class="item">
                                    <div class="feat_property">
                                        <div class="thumb">
                                            @if (is_array($item->images) || is_object($item->images))
                                                @foreach ($item->images as $key => $imagee)
                                                    @if ($key == 0)
                                                        <img
                                                            class="img-whp"
                                                            src="{{ asset('upload/Property/' . $imagee) }}"
                                                            alt="fp1.jpg"
                                                            style="height: 300px"
                                                        />
                                                    @endif
                                                @endforeach
                                            @else
                                                <img
                                                    class="img-whp"
                                                    src="{{ asset('upload/Property/' . $imagee) }}"
                                                    alt="fp1.jpg"
                                                />
                                            @endif
                                            <div class="thmb_cntnt">
                                                <ul class="tag mb0">
                                                    <li class="list-inline-item"><a href="#">For {{ $item->service_type }}</a></li>
                                                    {{-- <li class="list-inline-item"><a href="#">Featured</a></li> --}}
                                                </ul>
                                                <ul class="icon mb0">
                                                    <li class="list-inline-item">
                                                        <a href="#"><span class="flaticon-transfer-1"></span></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><span class="flaticon-heart"></span></a>
                                                    </li>
                                                </ul>
                                                <a
                                                    class="fp_price"
                                                    href="#"
                                                >{{ number_format_short($item->price) }} Br<small>
                                                        @if ($item->service_type == 'loan')
                                                            /{{ ucwords($item->payment_type) }}
                                                        @endif
                                                    </small>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <p class="text-thm">{{ ucwords($item->property_type) }}</p>
                                                <h4>{{ $item->title }}</h4>
                                                <p>
                                                    <span class="flaticon-placeholder"></span> {{ $item->location->sub_city }}
                                                </p>
                                                <ul class="prop_details mb0">
                                                    <li class="list-inline-item"><a href="#">Beds: {{ $item->bedroom }}</a></li>
                                                    <li class="list-inline-item"><a href="#">Baths: {{ $item->bathroom }}</a></li>
                                                    <li class="list-inline-item"><a href="#">Sq Ft: {{ $item->size }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="fp_footer">
                                                <div class="fp_pdate float-right">{{ $item->created_at->diffForHumans() }}</div>
                                                <div class="fp_pdate ">{{ $item->location->city }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <!-- Property Cities -->
    <section
        id="property-city"
        class="property-city pb30"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Find Properties in These Sub-Cities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-xl-5">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="images/property/pc1.jpg"
                                alt="pc1.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Bole</h4>
                                <p>{{ $bole }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="images/property/pc2.jpg"
                                alt="pc2.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Yeka</h4>
                                <p>18 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="images/property/pc3.jpg"
                                alt="pc3.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Lafto</h4>
                                <p>89 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="images/property/pc4.jpg"
                                alt="pc4.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Addis Ketema</h4>
                                <p>47 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Chose Us -->
    <section
        id="why-chose"
        class="whychose_us bgc-f7 pb30"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Why Choose Us</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-high-five"></span>
                        </div>
                        <div class="details">
                            <h4>Trusted By Thousands</h4>
                            <p>
                                Satisfied customers keep coming back to Gojoye.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-home-1"></span>
                        </div>
                        <div class="details">
                            <h4>Wide Range Of Properties</h4>
                            <p>
                                At Gojoye, we understand that finding the right property can be a daunting task. That's why we offer a variety of tools and resources to help our customers make informed decisions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-profit"></span>
                        </div>
                        <div class="details">
                            <h4>Financing Made Easy</h4>
                            <p>
                                Whether you're looking to rent, buy, or sell property, Gojoye is your trusted partner in the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Testimonials -->
    <section
        id="our-testimonials"
        class="our-testimonial"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2 class="color-white">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="testimonial_grid_slider">
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="images/testimonial/1.jfif"
                                        alt="1.jfif"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="images/testimonial/1.jfif"
                                        alt="1.jfif"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="images/testimonial/1.jfif"
                                        alt="1.jfif"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="images/testimonial/1.jfif"
                                        alt="1.jfif"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="images/testimonial/1.jfif"
                                        alt="1.jfif"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Blog -->
    <!-- Our Partners -->
    <section
        id="our-partners"
        class="our-partners"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Our Partners</h2>
                        <p>We only work with the best companies around the globe</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="images/partners/1.png"
                            alt="1.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="images/partners/2.png"
                            alt="2.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="images/partners/3.png"
                            alt="3.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="images/partners/4.png"
                            alt="4.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="images/partners/5.png"
                            alt="5.png"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Partners -->
    <!-- Our Footer -->
    <section class="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
                    <div class="footer_about_widget">
                        <h4>About Site</h4>
                        <p>
                            Gojoye is a premier online platform for property rentals and sales, providing individuals and businesses with a seamless, convenient, and secure way to find their perfect home or property. Our mission is to make the process of renting, buying, or selling property as easy
                            and stress-free as possible.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_qlink_widget">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">User’s Guide</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Press Info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_contact_widget">
                        <h4>Contact Us</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">info@gojoye.com</a></li>
                            <li><a href="#">Ethiopia,Addis Ababa, Bole</a></li>
                            <li><a href="#">Bulo Building ,5th Floor, Office-501</a></li>
                            <li><a href="#">+1 251-933-1111</a></li>
                            <li><a href="#">+1 251-933-0000</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_social_widget">
                        <h4>Follow us</h4>
                        <ul class="mb30">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-google"></i></a>
                            </li>
                        </ul>
                        <h4>Subscribe</h4>
                        <form class="footer_mailchimp_form">
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <input
                                        type="email"
                                        class="form-control mb-2"
                                        id="inlineFormInput"
                                        placeholder="Your email"
                                    />
                                </div>
                                <div class="col-auto">
                                    <button
                                        type="submit"
                                        class="btn btn-primary mb-2"
                                    >
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer Bottom Area -->
    <section class="footer_middle_area pt40 pb40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="footer_menu_widget">
                        <ul>
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">Listing</a></li>
                            <li class="list-inline-item"><a href="#">Property</a></li>
                            <li class="list-inline-item"><a href="#">Pages</a></li>
                            <li class="list-inline-item"><a href="#">Blog</a></li>
                            <li class="list-inline-item"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="copyright-widget text-right">
                        <p>© 2023 Gojoye. Made with love.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a
        class="scrollToHome"
        href="#"
    ><i class="flaticon-arrows"></i></a>
    </div>
    <!-- Wrapper End -->
    <script
        type="text/javascript"
        src="js/jquery-3.3.1.js"
    ></script>
    <script
        type="text/javascript"
        src="js/jquery-migrate-3.0.0.min.js"
    ></script>
    <script
        type="text/javascript"
        src="js/popper.min.js"
    ></script>
    <script
        type="text/javascript"
        src="js/bootstrap.min.js"
    ></script>
    <script
        type="text/javascript"
        src="js/jquery.mmenu.all.js"
    ></script>
    <script
        type="text/javascript"
        src="js/ace-responsive-menu.js"
    ></script>
    <script
        type="text/javascript"
        src="js/bootstrap-select.min.js"
    ></script>
    <script
        type="text/javascript"
        src="js/isotop.js"
    ></script>
    <script
        type="text/javascript"
        src="js/snackbar.min.js"
    ></script>
    <script
        type="text/javascript"
        src="js/simplebar.js"
    ></script>
    <script
        type="text/javascript"
        src="js/parallax.js"
    ></script>
    <script
        type="text/javascript"
        src="js/scrollto.js"
    ></script>
    <script
        type="text/javascript"
        src="js/jquery-scrolltofixed-min.js"
    ></script>
    <script
        type="text/javascript"
        src="js/jquery.counterup.js"
    ></script>
    <script
        type="text/javascript"
        src="js/wow.min.js"
    ></script>
    <script
        type="text/javascript"
        src="js/slider.js"
    ></script>
    <script
        type="text/javascript"
        src="js/pricing-slider.js"
    ></script>
    <script
        type="text/javascript"
        src="js/timepicker.js"
    ></script>
    <!-- Custom script for all pages -->
    <script
        type="text/javascript"
        src="js/script.js"
    ></script>
</body>

<!-- Mirrored from creativelayers.net/themes/findhouse-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2023 18:55:29 GMT -->

</html>
