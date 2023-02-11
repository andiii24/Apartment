<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
    <div class="container-fluid p0">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img
                    class="nav_logo_img img-fluid"
                    src="{{ asset('images/header-logo.png') }}"
                    alt="header-logo.png"
                >
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
                    class="logo1 img-fluid"
                    src="{{ asset('images/header-logo2.png') }}"
                    alt="header-logo.png"
                >
                <img
                    class="logo2 img-fluid"
                    src="{{ asset('images/header-logo2.png') }}"
                    alt="header-logo2.png"
                >
                <span>FindHouse</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul
                id="respMenu"
                class="ace-responsive-menu text-right pr-5"
                data-menu-style="horizontal"
            >
                <li>
                    <a href="#"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">Property</span></a>
                </li>
                <li class="last">
                    <a href="page-contact.html"><span class="title">Contact</span></a>
                </li>
                {{-- <li class="user_setting">
                    <div class="dropdown">
                        <a
                            class="btn dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        ><img
                                class="rounded-circle"
                                src="{{ asset('images/team/e1.png') }}"
                                alt="e1.png"
                            > <span class="dn-1199">name</span></a>
                        <div class="dropdown-menu">
                            <div class="user_set_header">
                                <img
                                    class="float-left"
                                    src="{{ asset('images/team/e1.png') }}"
                                    alt="e1.png"
                                >
                                <p>Ali Tufan <br><span class="address">alitufan@gmail.com</span></p>
                            </div>
                            <div class="user_setting_content">
                                <a
                                    class="dropdown-item active"
                                    href="#"
                                >My Profile</a>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                >Messages</a>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                >Purchase history</a>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                >Help</a>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                >Log out</a>
                            </div>
                        </div>
                    </div>
                </li> --}}
            </ul>
        </nav>
    </div>
</header>

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
                    src="{{ asset('images/header-logo2.png') }}"
                    alt="header-logo2.png"
                >
                <span class="mt20">FindHouse</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav
        id="menu"
        class="stylehome1"
    >
        <ul>
            <li><span>Home</span>
            </li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
            <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
            <li class="cl_btn"><a
                    class="btn btn-block btn-lg btn-thm circle"
                    href="#"
                ><span class="flaticon-plus"></span> Create Listing</a></li>
        </ul>
    </nav>
</div>
