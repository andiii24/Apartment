@extends('front.index')
@section('title', 'Properties')
@section('content')
    <section class="our-listing bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="listing_sidebar dn db-991">
                        <div class="sidebar_content_details style3">
                            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                            <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                                <div class="sidebar_advanced_search_widget">
                                    <h4 class="mb25">Advanced Search <a
                                            class="filter_closed_btn float-right"
                                            href="#"
                                        ><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
                                    <ul class="sasw_list style2 mb0">
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName1"
                                                    placeholder="keyword"
                                                >
                                                <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                                            </div>
                                        </li>
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputEmail1"
                                                    placeholder="Location"
                                                >
                                                <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Status</option>
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
                                        <li>
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
                                        <li>
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
                                                        <span id="slider-range-value1"></span>
                                                        <span
                                                            class="mt0"
                                                            id="slider-range-value2"
                                                        ></span>
                                                        <div id="slider"></div>
                                                        <!-- <input type="text" class="amount" placeholder="$52,239">
                                                                                                                                                                                                                                                                                                                                                                                    <input type="text" class="amount2" placeholder="$985,14">
                                                                                                                                                                                                                                                                                                                                                                                    <div class="slider-range"></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Bathrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Bedrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Garages</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
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
                                            </div>
                                        </li>
                                        <li class="min_area style2 list-inline-item">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName22"
                                                    placeholder="Min Area"
                                                >
                                            </div>
                                        </li>
                                        <li class="max_area list-inline-item">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName33"
                                                    placeholder="Max Area"
                                                >
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                id="accordion"
                                                class="panel-group"
                                            >
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a
                                                                href="#panelBodyRating"
                                                                class="accordion-toggle link"
                                                                data-toggle="collapse"
                                                                data-parent="#accordion"
                                                            ><i class="flaticon-more"></i> Advanced features</a>
                                                        </h4>
                                                    </div>
                                                    <div
                                                        id="panelBodyRating"
                                                        class="panel-collapse collapse"
                                                    >
                                                        <div class="panel-body row">
                                                            <div class="col-lg-12">
                                                                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="customCheck1"
                                                                            >
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
                                                                                id="customCheck4"
                                                                            >
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
                                                                                id="customCheck10"
                                                                            >
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
                                                                                id="customCheck5"
                                                                            >
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
                                                                            >
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="customCheck6"
                                                                            >TV Cable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="customCheck2"
                                                                            >
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
                                                                                id="customCheck11"
                                                                            >
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
                                                                                id="customCheck3"
                                                                            >
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="customCheck3"
                                                                            >Swimming Pool</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="customCheck12"
                                                                            >
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="customCheck12"
                                                                            >WiFi</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="customCheck14"
                                                                            >
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
                                                                                id="customCheck7"
                                                                            >
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
                                                                                id="customCheck9"
                                                                            >
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="customCheck9"
                                                                            >Washer</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input
                                                                                type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="customCheck13"
                                                                            >
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
                                                                                id="customCheck8"
                                                                            >
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
                                                                                id="customCheck15"
                                                                            >
                                                                            <label
                                                                                class="custom-control-label"
                                                                                for="customCheck15"
                                                                            >Window Coverings</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button">
                                                <button
                                                    type="submit"
                                                    class="btn btn-block btn-thm"
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_content style2 mb0-991">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li
                                class="breadcrumb-item active text-thm"
                                aria-current="page"
                            >Properties</li>
                        </ol>
                        <h2 class="breadcrumb_title">Properties</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="listing_list_style mb20-xsd tal-991">
                        <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
                        </ul>
                    </div>
                    <div class="dn db-991 mt30 mb0">
                        <div id="main2">
                            <span
                                id="open2"
                                class="flaticon-filter-results-button filter_open_btn style2"
                            > Show Filter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="sidebar_listing_grid1 dn-991">
                        <div class="sidebar_listing_list">
                            <div class="sidebar_advanced_search_widget">
                                <ul class="sasw_list mb0">
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputName12"
                                                placeholder="keyword"
                                            >
                                            <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail"
                                                placeholder="Location"
                                            >
                                            <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Status</option>
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
                                    <li>
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
                                    <li>
                                        <div class="small_dropdown2">
                                            <div
                                                id="prncgs2"
                                                class="btn dd_btn"
                                            >
                                                <span>Price</span>
                                                <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                            </div>
                                            <div class="dd_content2 style2">
                                                <div class="pricing_acontent">
                                                    <input
                                                        type="text"
                                                        class="amount"
                                                        placeholder="$52,239"
                                                    >
                                                    <input
                                                        type="text"
                                                        class="amount2"
                                                        placeholder="$985,14"
                                                    >
                                                    <div class="slider-range"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Bathrooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Bedrooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Garages</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
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
                                        </div>
                                    </li>
                                    <li class="min_area list-inline-item">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputName2"
                                                placeholder="Min Area"
                                            >
                                        </div>
                                    </li>
                                    <li class="max_area list-inline-item">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputName3"
                                                placeholder="Max Area"
                                            >
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            id="accordion"
                                            class="panel-group"
                                        >
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a
                                                            href="#panelBodyRating"
                                                            class="accordion-toggle link"
                                                            data-toggle="collapse"
                                                            data-parent="#accordion"
                                                        ><i class="flaticon-more"></i> Advanced features</a>
                                                    </h4>
                                                </div>
                                                <div
                                                    id="panelBodyRating"
                                                    class="panel-collapse collapse"
                                                >
                                                    <div class="panel-body row">
                                                        <div class="col-lg-12">
                                                            <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck16"
                                                                        >
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
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck17"
                                                                        >Barbeque</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck18"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck18"
                                                                        >Gym</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck19"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck19"
                                                                        >Microwave</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck20"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck20"
                                                                        >TV Cable</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck21"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck21"
                                                                        >Lawn</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck22"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck22"
                                                                        >Refrigerator</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck23"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck23"
                                                                        >Swimming Pool</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck24"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck24"
                                                                        >WiFi</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck25"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck25"
                                                                        >Sauna</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck26"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck26"
                                                                        >Dryer</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck27"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck27"
                                                                        >Washer</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck28"
                                                                        >
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
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck29"
                                                                        >Outdoor Shower</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck30"
                                                                        >
                                                                        <label
                                                                            class="custom-control-label"
                                                                            for="customCheck30"
                                                                        >Window Coverings</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_button">
                                            <button
                                                type="submit"
                                                class="btn btn-block btn-thm"
                                            >Search</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="grid_list_search_result">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                                <div class="left_area tac-xsd">
                                    <p>{{ $properties->count() }} Search results</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        @foreach ($properties as $item)
                            <div class="col-md-6 col-lg-6">
                                <div class="feat_property style4">
                                    <div class="thumb">
                                        @if (is_array($item->images) || is_object($item->images))
                                            <div class="fp_single_item_slider">
                                                @foreach ($item->images as $key => $imagee)
                                                    <div class="item">
                                                        <img
                                                            class="img-whp"
                                                            src="{{ asset('upload/Property/' . $imagee) }}"
                                                            alt="fp1.jpg"
                                                            style="height: 300px; object-fit: cover;"
                                                        >
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="fp_single_item_slider">
                                                <div class="item">
                                                    <img
                                                        class="img-whp"
                                                        src="{{ asset('upload/Property/' . $imagee) }}"
                                                        alt="fp1.jpg"
                                                        style="height: 300px; object-fit: cover;"
                                                    >
                                                </div>
                                            </div>
                                        @endif
                                        <div class="thmb_cntnt style2">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">
                                                        @if ($item->service_type == 'loan')
                                                            For Rent
                                                        @else
                                                            For Sell
                                                        @endif
                                                    </a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Featured</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="thmb_cntnt style3">
                                            <ul class="icon mb0">
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                            </ul>
                                            <a
                                                class="fp_price"
                                                href="#"
                                            >{{ $item->price }} Birr
                                                @if ($item->service_type == 'loan')
                                                    @if ($item->payment_type == 'monthly')
                                                        <small>/mo</small>
                                                    @else
                                                        <small>/term</small>
                                                    @endif
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ url('selected-property/' . $item->id) }}">
                                        <div class="details">
                                            <div class="tc_content">
                                                <p class="text-thm">{{ $item->property_type }}</p>
                                                <h4>{{ $item->name }}</h4>
                                                <p><span class="flaticon-placeholder"></span>{{ $item->location->sub_city }}</p>
                                                <ul class="prop_details mb0">
                                                    <li class="list-inline-item"><a href="#">Beds:{{ $item->bedroom }}</a></li>
                                                    <li class="list-inline-item"><a href="#">Baths:{{ $item->bathroom }}</a></li>
                                                    <li class="list-inline-item"><a href="#">Sq Ft: {{ $item->size }}square</a></li>
                                                </ul>
                                            </div>
                                            <div class="fp_footer">
                                                <ul class="fp_meta float-left mb0">
                                                    <li class="list-inline-item"><a href="#">{{ $item->location->city }}</a></li>
                                                </ul>
                                                <div class="fp_pdate float-right">{{ $item->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <ul class="pagination justify-content-center">
                                @if ($properties->currentPage() != 1)
                                    <li class="page-item">
                                        <a
                                            class="page-link"
                                            href="{{ $properties->previousPageUrl() }}"
                                            tabindex="-1"
                                        >Previous</a>
                                    </li>
                                @endif
                                @for ($i = 1; $i <= $properties->lastPage(); $i++)
                                    <li class="page-item {{ $properties->currentPage() == $i ? ' active' : '' }}">
                                        <a
                                            class="page-link"
                                            href="{{ $properties->url($i) }}"
                                        >{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($properties->currentPage() != $properties->lastPage())
                                    <li class="page-item">
                                        <a
                                            class="page-link"
                                            href="{{ $properties->nextPageUrl() }}"
                                        >Next</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
