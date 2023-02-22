@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid ovh">
            <div class="card">
                <div class=" style2 mt-4 ml-5 mb-3 mb30-991">
                    <h2 class="breadcrumb_title">Properties</h2>
                </div>
                <select id="status-filter">
                    <option value="">All</option>
                    <option value="0">Available</option>
                    <option value="1">Sold</option>
                </select>
                <div class="card-body my_dashboard_review mb40">
                    <div class="table-responsive mt0">
                        <table
                            class="table table-bordered table-striped"
                            id="data_table"
                        >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>location</th>
                                    <th>property type</th>
                                    <th>property status</th>
                                    <th>Sale/Loan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->location_id }}</td>
                                        <td>{{ $item->property_type }}</td>
                                        <td>
                                            @if ($item->property_status == 0)
                                                <span class="status_tag badge2">Published</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->service_type }}</td>
                                        <td>
                                            <ul class="view_edit_delete_list mb0">
                                                <li
                                                    class="list-inline-item"
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Edit"
                                                ><a href="{{ url('edit-properties/' . $item->id) }}"><span class="flaticon-edit"></span></a></li>
                                                <li
                                                    class="list-inline-item"
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Show"
                                                ><a href="{{ url('show-property/' . $item->id) }}"><span class="flaticon-view"></span></a></li>
                                                <li
                                                    class="list-inline-item"
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Delete"
                                                ><a href="{{ url('delete-property/' . $item->id) }}"><span class="flaticon-garbage"></span></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
