@extends('front.index')
@section('title', 'Properties')
@section('content')
    <section class="our-listing bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_content style2 mb0-991">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li
                                class="breadcrumb-item active text-thm"
                                aria-current="page"
                            > <a
                                    href="{{ url('properties') }}"
                                    class="breadcrumb-item active text-thm"
                                > Properties </a></li>
                        </ol>
                        <h2 class="breadcrumb_title">Properties</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="listing_list_style mb20-xsd tal-991">
                        <ul class="mb0">
                            <li class="list-inline-item"><a href="{{ url('properties') }}"><span class="fa fa-th-large"> All</span></a></li>
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
                        <form
                            action="{{ route('search') }}"
                            method="GET"
                        >
                            <div class="sidebar_listing_list">
                                <div class="sidebar_advanced_search_widget">
                                    <ul class="sasw_list mb0">
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName12"
                                                    name="search"
                                                    placeholder="keyword"
                                                >
                                            </div>
                                        </li>
                                        <li class="search_area">
                                            <div class="form-group">
                                                <select
                                                    class="selectpicker apartment-filter"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="location_id"
                                                >
                                                    <option
                                                        data-tokens="Status1"
                                                        disabled
                                                        selected
                                                    >Location</option>
                                                    @foreach ($location as $item)
                                                        <option
                                                            data-tokens="Status1"
                                                            value="{{ $item->id }}"
                                                        >{{ $item->sub_city }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="form-group">
                                                    <select
                                                        class="selectpicker apartment-filter"
                                                        data-live-search="true"
                                                        data-width="100%"
                                                        name="property_type"
                                                    >
                                                        <option
                                                            data-tokens="type1"
                                                            disabled
                                                            selected
                                                        >Property Type</option>
                                                        <option data-tokens="type1">Apartama</option>
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
                                        </li>
                                        <li class="min_area list-inline-item">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName2"
                                                    placeholder="Min Price"
                                                    name="min_price"
                                                >
                                            </div>
                                        </li>
                                        <li class="max_area list-inline-item">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName3"
                                                    placeholder="Max Price"
                                                    name="max_price"
                                                >
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="form-group">
                                                    <select
                                                        class="selectpicker apartment-filter"
                                                        data-live-search="true"
                                                        data-width="100%"
                                                        name="service_type"
                                                    >
                                                        <option
                                                            data-tokens="type1"
                                                            disabled
                                                            selected
                                                        >Rent/Sell</option>
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
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="form-group">
                                                    <select
                                                        class="selectpicker apartment-filter"
                                                        data-live-search="true"
                                                        data-width="100%"
                                                        name="bedroom"
                                                    >
                                                        <option
                                                            data-tokens="Status1"
                                                            disabled
                                                            selected
                                                        >Bedroom</option>
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
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="form-group">
                                                    <select
                                                        class="selectpicker apartment-filter"
                                                        data-live-search="true"
                                                        data-width="100%"
                                                        name="bathroom"
                                                    >
                                                        <option
                                                            data-tokens="Status1"
                                                            disabled
                                                            selected
                                                        >Bathroom</option>
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
                                        </li>
                                        <li class="min_area list-inline-item">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName2"
                                                    placeholder="Min Area"
                                                    name="min_area"
                                                >
                                            </div>
                                        </li>
                                        <li class="max_area list-inline-item">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputName3"
                                                    name="max_area"
                                                    placeholder="Max Area"
                                                >
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
                        </form>
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
                                <div class="feat_property home7 style4">
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
                                                <h4>{{ $item->title }}</h4>
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
    <script>
        $(document).ready(function() {
            $('.apartment-filter').on('change', function() {
                var selectedValues = $('.apartment-filter').map(function() {
                    return $(this).val();
                }).get();

                $('.apartment-filter option').each(function() {
                    var optionValue = $(this).val();
                    if ($.inArray(optionValue, selectedValues) > -1 || optionValue === '') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
@endsection
