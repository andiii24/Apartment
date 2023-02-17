@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid ovh">
            <div class="card">
                <div class="card-header">
                    <h4>Category Page</h4>
                    <hr style="background-color: black">
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($category as $cat) --}}
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td><img
                                        style="width: 70px;height:70px;"
                                        class="cate-img"
                                        src=""
                                        alt="image"
                                    ></td>
                                <td>
                                    <a
                                        href=""
                                        class="btn btn-primary btn-sm"
                                    >Edit</a>
                                    <a
                                        href=""
                                        class="btn btn-danger btn-sm"
                                    >Delete</a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
