@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid ovh">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-lg-9 col-xl-10 maxw100flex-992">
                    <form
                        action="{{ url('register-properties') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
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
                                    <h2 class="breadcrumb_title">Add New Property</h2>
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
                                                    >Loan</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="sell"
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
                                                    >Apartma</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="condominum"
                                                    >Condominium</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="town house"
                                                    >Town House</option>
                                                    <option
                                                        data-tokens="type1"
                                                        value="villa"
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
                                                    >monthly</option>
                                                    <option
                                                        value="termly"
                                                        data-tokens="type1"
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
                                                ></textarea>
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
                                                    >1</option>
                                                    <option
                                                        data-tokens="Status2"
                                                        value="2"
                                                    >2</option>
                                                    <option
                                                        data-tokens="Status3"
                                                        value="3"
                                                    >3</option>
                                                    <option
                                                        data-tokens="Status4"
                                                        value="4"
                                                    >4</option>
                                                    <option
                                                        data-tokens="Status5"
                                                        value="5"
                                                    >5</option>
                                                    <option
                                                        data-tokens="Status6"
                                                        value="6"
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
                                                    >Bole</option>
                                                    <option
                                                        data-tokens="Status2"
                                                        value="2"
                                                    >Lafto</option>
                                                    <option
                                                        data-tokens="Status3"
                                                        value="3"
                                                    >Arada</option>
                                                    <option
                                                        data-tokens="Status4"
                                                        value="4"
                                                    >Yeka</option>
                                                    <option
                                                        data-tokens="Status5"
                                                        value="5"
                                                    >Lemi Kura</option>
                                                    <option
                                                        data-tokens="Status6"
                                                        value="6"
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
                                                    >1</option>
                                                    <option
                                                        data-tokens="Status2"
                                                        value="2"
                                                    >2</option>
                                                    <option
                                                        data-tokens="Status3"
                                                        value="3"
                                                    >3</option>
                                                    <option
                                                        data-tokens="Status4"
                                                        value="4"
                                                    >4</option>
                                                    <option
                                                        data-tokens="Status5"
                                                        value="5"
                                                    >5</option>
                                                    <option
                                                        data-tokens="Status6"
                                                        value="6"
                                                    >6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="my_dashboard_review mt30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb30">Location</h4>
                                    <div class="my_profile_setting_input form-group">
                                        <label for="propertyAddress">Address</label>
                                        <input type="text" class="form-control" id="propertyAddress">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="propertyState">County / State</label>
                                        <input type="text" class="form-control" id="propertyState">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="propertyCity">City</label>
                                        <input type="text" class="form-control" id="propertyCity">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="neighborHood">Neighborhood</label>
                                        <input type="text" class="form-control" id="neighborHood">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="zipCode">Zip</label>
                                        <input type="text" class="form-control" id="zipCode">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>Country</label>
                                        <select class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="Turkey">Turkey</option>
                                            <option data-tokens="Iran">Iran</option>
                                            <option data-tokens="Iraq">Iraq</option>
                                            <option data-tokens="Spain">Spain</option>
                                            <option data-tokens="Greece">Greece</option>
                                            <option data-tokens="Portugal">Portugal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="my_profile_setting_input form-group">
                                        <div class="h400 bdrs8" id="map-canvas"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="googleMapLat">Latitude (for Google Maps)</label>
                                        <input type="text" class="form-control" id="googleMapLat">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="googleMapLong">Longitude (for Google Maps)</label>
                                        <input type="text" class="form-control" id="googleMapLong">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>Google Map Street View</label>
                                        <select class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="Turkey">Street View v1</option>
                                            <option data-tokens="Iran">Street View v2</option>
                                            <option data-tokens="Iraq">Street View v3</option>
                                            <option data-tokens="Spain">Street View v4</option>
                                            <option data-tokens="Greece">Street View v5</option>
                                            <option data-tokens="Portugal">Street View v6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="my_profile_setting_input">
                                        <button class="btn btn1 float-left">Back</button>
                                        <button class="btn btn2 float-right">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_dashboard_review mt30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb30">Detailed Information</h4>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="propertyId">Property ID</label>
                                        <input type="text" class="form-control" id="propertyId">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="propertyASize">Area Size</label>
                                        <input type="text" class="form-control" id="propertyASize">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="sizePrefix">Size Prefix</label>
                                        <input type="text" class="form-control" id="sizePrefix">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="landArea">Land Area</label>
                                        <input type="text" class="form-control" id="landArea">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="LASPostfix">Land Area Size Postfix</label>
                                        <input type="text" class="form-control" id="LASPostfix">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="bedRooms">Bedrooms</label>
                                        <input type="text" class="form-control" id="bedRooms">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="bathRooms">Bathrooms</label>
                                        <input type="text" class="form-control" id="bathRooms">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="garages">Garages</label>
                                        <input type="text" class="form-control" id="garages">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="garagesSize">Garages Size</label>
                                        <input type="text" class="form-control" id="garagesSize">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="yearBuild">Year Built</label>
                                        <input type="text" class="form-control" id="yearBuild">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="videoUrl">Video URL</label>
                                        <input type="text" class="form-control" id="videoUrl">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="virtualTour">360° Virtual Tour</label>
                                        <input type="text" class="form-control" id="virtualTour">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4>Amenities</h4>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
                                    <ul class="ui_kit_checkbox selectable-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Lawn</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Swimming Pool</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Barbeque</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Microwave</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
                                    <ul class="ui_kit_checkbox selectable-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">TV Cable</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">Dryer</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">Washer</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">Gym</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
                                    <ul class="ui_kit_checkbox selectable-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">Refrigerator</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">WiFi</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">Laundry</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">Sauna</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">Window Coverings</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-12">
                                    <div class="my_profile_setting_input">
                                        <button class="btn btn1 float-left">Back</button>
                                        <button class="btn btn2 float-right">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
