@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid ovh">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-lg-9 col-xl-10 maxw100flex-992">
                    <form
                        action="{{ url('admin/update-properties/' . $property->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @method('PUT')
                        @csrf
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
                                    <h2 class="breadcrumb_title">Update {{ $property->title }}</h2>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="my_dashboard_review">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="propertyTitle">Property Title *</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="title"
                                                    id="propertyTitle"
                                                    value="{{ $property->title }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExamplePrice">Price *</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="formGroupExamplePrice"
                                                    value="{{ $property->price }}"
                                                    name="price"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label for="formGroupExamplePrice">Service Type *</label>
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="service_type"
                                                    required
                                                >
                                                    <option
                                                        data-tokens="type1"
                                                        value="loan"
                                                        @if ($property->service_type == 'loan') selected @endif
                                                    >Loan</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="sell"
                                                        @if ($property->service_type == 'sell') selected @endif
                                                    >Sell</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>Property type *</label>
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="property_type"
                                                    required
                                                >
                                                    <option
                                                        data-tokens="type1"
                                                        value="apratama"
                                                        @if ($property->property_type == 'Apartama') selected @endif
                                                    >Apartama</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="condominum"
                                                        @if ($property->property_type == 'condominum') selected @endif
                                                    >Condominium</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="town house"
                                                        @if ($property->property_type == 'town house') selected @endif
                                                    >Town House</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="villa"
                                                        @if ($property->property_type == 'villa') selected @endif
                                                    >Villa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>Payment type *</label>
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="payment_type"
                                                    required
                                                >
                                                    <option
                                                        value="monthly"
                                                        data-tokens="type1"
                                                        @if ($property->payment_type == 'monthly') selected @endif
                                                    >monthly</option>
                                                    <option
                                                        value="termly"
                                                        data-tokens="type1"
                                                        @if ($property->payment_type == 'termly') selected @endif
                                                    >termly(3 month)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my_profile_setting_textarea">
                                                <label for="propertyDescription">Property Description *</label>
                                                <textarea
                                                    class="form-control"
                                                    id="propertyDescription"
                                                    rows="7"
                                                    name="property_description"
                                                    required
                                                >{{ $property->property_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleArea">Area *</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    id="formGroupExampleArea"
                                                    name="size"
                                                    value="{{ $property->size }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>Bed Rooms *</label>
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="bedroom"
                                                    required
                                                >
                                                    <option
                                                        data-tokens="Status1"
                                                        value="1"
                                                        @if ($property->bedroom == '1') selected @endif
                                                    >1</option>
                                                    <option
                                                        data-tokens="Status2"
                                                        value="2"
                                                        @if ($property->bedroom == '2') selected @endif
                                                    >2</option>
                                                    <option
                                                        data-tokens="Status3"
                                                        value="3"
                                                        @if ($property->bedroom == '3') selected @endif
                                                    >3</option>
                                                    <option
                                                        data-tokens="Status4"
                                                        value="4"
                                                        @if ($property->bedroom == '4') selected @endif
                                                    >4</option>
                                                    <option
                                                        data-tokens="Status5"
                                                        value="5"
                                                        @if ($property->bedroom == '5') selected @endif
                                                    >5</option>
                                                    <option
                                                        data-tokens="Status6"
                                                        value="6"
                                                        @if ($property->bedroom == '6') selected @endif
                                                    >6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>Location *</label>
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="location_id"
                                                    required
                                                >
                                                    <option
                                                        data-tokens="Status1"
                                                        value="1"
                                                        @if ($property->location_id == '1') selected @endif
                                                    >Bole</option>
                                                    <option
                                                        data-tokens="Status2"
                                                        value="2"
                                                        @if ($property->location_id == '2') selected @endif
                                                    >Lafto</option>
                                                    <option
                                                        data-tokens="Status3"
                                                        value="3"
                                                        @if ($property->location_id == '3') selected @endif
                                                    >Arada</option>
                                                    <option
                                                        data-tokens="Status4"
                                                        value="4"
                                                        @if ($property->location_id == '4') selected @endif
                                                    >Yeka</option>
                                                    <option
                                                        data-tokens="Status5"
                                                        value="5"
                                                        @if ($property->location_id == '5') selected @endif
                                                    >Lemi Kura</option>
                                                    <option
                                                        data-tokens="Status6"
                                                        value="6"
                                                        @if ($property->location_id == '6') selected @endif
                                                    >Kotebe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                <label>Bathrooms *</label>
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="bathroom"
                                                    required
                                                >
                                                    <option
                                                        data-tokens="Status1"
                                                        value="1"
                                                        @if ($property->bathroom == '1') selected @endif
                                                    >1</option>
                                                    <option
                                                        data-tokens="Status2"
                                                        value="2"
                                                        @if ($property->bathroom == '2') selected @endif
                                                    >2</option>
                                                    <option
                                                        data-tokens="Status3"
                                                        value="3"
                                                        @if ($property->bathroom == '3') selected @endif
                                                    >3</option>
                                                    <option
                                                        data-tokens="Status4"
                                                        value="4"
                                                        @if ($property->bathroom == '4') selected @endif
                                                    >4</option>
                                                    <option
                                                        data-tokens="Status5"
                                                        value="5"
                                                        @if ($property->bathroom == '5') selected @endif
                                                    >5</option>
                                                    <option
                                                        data-tokens="Status6"
                                                        value="6"
                                                        @if ($property->bathroom == '6') selected @endif
                                                    >6</option>
                                                </select>
                                            </div>
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
                            <div class="my_dashboard_review mt30">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Property media *</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="portfolio_upload">
                                            <input
                                                type="file"
                                                name="images[]"
                                                class="form-control-file"
                                                id="image"
                                                multiple
                                                required
                                            >
                                            <div class="icon"><span class="flaticon-download"></span></div>
                                            <p>Drag and drop images here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-12 mt-3 "
                            style="display: flex; justify-content: center;"
                        >
                            <button
                                class="btn btn-success"
                                type="submit"
                            >Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
