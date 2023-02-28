<div class="dashboard_sidebar_menu dn-992">
    <ul class="sidebar-menu">
        <li class="header"><img
                src="{{ asset('images/header-logo2.png') }}"
                alt="header-logo2.png"
            > FindHouse</li>
        <li class="title"><span>Main</span></li>
        <li class="treeview"><a href="page-dashboard.html"><i class="flaticon-layers"></i><span> Dashboard</span></a></li>
        <li class="title"><span>Manage Listings</span></li>
        <li class="treeview">
            <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Properties</span><i class="fa fa-angle-down pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/properties') }}"><i class="fa fa-circle"></i> Properties</a></li>
                <li><a href="{{ url('admin/add-properties') }}"><i class="fa fa-circle"></i> Add Properties</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="page-my-review.html"><i class="flaticon-user"></i><span> Users</span><i class="fa fa-angle-down pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/users') }}"><i class="fa fa-circle"></i> View Users</a></li>
                <li><a href="{{ url('admin/create-user') }}"><i class="fa fa-circle"></i> Add User</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="page-my-review.html"><i class="fa fa-globe"></i><span> Locations</span><i class="fa fa-angle-down pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/locations') }}"><i class="fa fa-circle"></i>Locations</a></li>
                <li><a href="{{ url('admin/add-location') }}"><i class="fa fa-circle"></i> Add Location</a></li>
            </ul>
        </li>
        <li class="title"><span>Manage Account</span></li>
        <li><a href="page-my-profile.html"><i class="flaticon-user"></i> <span>My Profile</span></a></li>
        <li><a href="page-login.html"><i class="flaticon-logout"></i> <span>Logout</span></a></li>
    </ul>
</div>
@section('script')
@endsection
