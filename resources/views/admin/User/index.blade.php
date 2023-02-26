@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid ovh">
            <div class="card">
                <div class=" style2 mt-4 ml-5 mb-3 mb30-991">
                    <h2 class="breadcrumb_title">Users</h2>
                </div>
                <div class="card-body my_dashboard_review mb40">
                    <div class="table-responsive mt0">
                        <table
                            class="table table-bordered table-striped"
                            id="data_table"
                        >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            @if ($item->role == 0)
                                                <span class="status_tag badge3">User</span>
                                            @else
                                                <span class="status_tag badge2">Admin</span>
                                            @endif
                                        </td>
                                        <td>
                                            <ul class="view_edit_delete_list mb0">
                                                <li
                                                    class="list-inline-item"
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Edit"
                                                ><a href="{{ url('edit-user/' . $item->id) }}"><span class="flaticon-edit"></span></a></li>
                                                <li
                                                    class="list-inline-item"
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Show"
                                                ><a href="{{ url('show-user/' . $item->id) }}"><span class="flaticon-view"></span></a></li>
                                                <li
                                                    class="list-inline-item"
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Delete"
                                                ><a href="{{ url('delete-user/' . $item->id) }}"><span class="flaticon-garbage"></span></a></li>
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
