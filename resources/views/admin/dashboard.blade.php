@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-lg-9 col-xl-10 maxw100flex-992">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard_navigationbar dn db-992">
                                <div class="dropdown">
                                    <button
                                        onclick="myFunction()"
                                        class="dropbtn"
                                    ><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="ff_one">
                                <div class="icon"><span class="flaticon-home"></span></div>
                                <div class="detais">
                                    <div class="timer">37</div>
                                    <p>All Properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="ff_one style2">
                                <div class="icon"><span class="flaticon-view"></span></div>
                                <div class="detais">
                                    <div class="timer">24</div>
                                    <p>Total Views</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="ff_one style3">
                                <div class="icon"><span class="flaticon-chat"></span></div>
                                <div class="detais">
                                    <div class="timer">12</div>
                                    <p>Total Visitor Reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 ">
                            <div class="recent_job_activity">
                                <h4 class="title">Recent Activities</h4>
                                <div class="grid">
                                    <ul>
                                        <li class="list-inline-item">
                                            <div class="icon"><span class="flaticon-home"></span></div>
                                        </li>
                                        <li class="list-inline-item">
                                            <p>Your listing <strong>Luxury Family Home</strong> has been approved!.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid">
                                    <ul>
                                        <li class="list-inline-item">
                                            <div class="icon"><span class="flaticon-chat"></span></div>
                                        </li>
                                        <li class="list-inline-item">
                                            <p>Kathy Brown left a review on <strong>Renovated Apartment</strong></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid">
                                    <ul>
                                        <li class="list-inline-item">
                                            <div class="icon"><span class="flaticon-heart"></span></div>
                                        </li>
                                        <li class="list-inline-item">
                                            <p>Someone favorites your <strong>Gorgeous Villa Bay View</strong> listing!</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid">
                                    <ul>
                                        <li class="list-inline-item">
                                            <div class="icon"><span class="flaticon-home"></span></div>
                                        </li>
                                        <li class="list-inline-item">
                                            <p>Your listing <strong>Luxury Family Home</strong> has been approved!</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid">
                                    <ul>
                                        <li class="list-inline-item">
                                            <div class="icon"><span class="flaticon-chat"></span></div>
                                        </li>
                                        <li class="list-inline-item">
                                            <p>Kathy Brown left a review on <strong>Renovated Apartment</strong></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid mb0">
                                    <ul class="pb0 mb0 bb_none">
                                        <li class="list-inline-item">
                                            <div class="icon"><span class="flaticon-heart"></span></div>
                                        </li>
                                        <li class="list-inline-item">
                                            <p>Someone favorites your <strong>Gorgeous Villa Bay</strong> View listing!</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt50">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="copyright-widget text-center">
                                <p>© 2020 Find House. Made with love.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
