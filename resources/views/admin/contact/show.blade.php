@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid ovh">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard_navigationbar dn db-992">
                            <div class="dropdown">
                                <button
                                    onclick="myFunction()"
                                    class="dropbtn"
                                ><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                                <ul
                                    id="myDropdown"
                                    class="dropdown-content"
                                >
                                    <li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
                                    <li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
                                    <li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
                                    <li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
                                    <li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
                                    <li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
                                    <li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
                                    <li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
                                    <li class="active"><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
                                    <li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb10">
                        <div class="breadcrumb_content style2">
                            <h2 class="breadcrumb_title">{{ $property->title }}</h2>
                        </div>
                    </div>
                    <div class="my_dashboard_review">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Property Title: <b>{{ $property->title }}</b></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Property Type: <b>{{ $property->property_type }}</b></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Property Service Type: <b>{{ $property->service_type }}</b></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Property Location: <b>{{ $property->location_id }}</b></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Bedroom: <b>{{ $property->bedroom }}</b></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Bathroom: <b>{{ $property->bathroom }}</b></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Area: <b>{{ $property->size }}</b></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="my_profile_setting_input form-group">
                                    <label for="formGroupExamplePrice">Price: <b>{{ $property->price }}</b></label>
                                </div>
                            </div>
                        </div>
                        <ul>
                            @if (is_array($property->images) || is_object($property->images))
                                @foreach ($property->images as $key => $imagee)
                                    <li class="splide__slide">
                                        <img
                                            class="pre_serve"
                                            src="{{ asset('upload/Property/' . $imagee) }}"
                                            alt=""
                                        >
                                    </li>
                                @endforeach
                            @else
                                <li class="splide__slide">
                                    <img
                                        class="pre_serve"
                                        src="{{ asset('upload/Property/' . $imagee) }}"
                                        alt=""
                                    >
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div
                    class="col-md-12 mt-3 "
                    style="display: flex; justify-content: center;"
                >
                </div>
            </div>
        </div>
    </section>
@endsection
