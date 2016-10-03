<div id="sidebar" class="nav-collapse collapse">
    <div class="sidebar-toggler hidden-phone"></div>
    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
    <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
            <input type="text" class="search-query" placeholder="Search" />
        </form>
    </div>
    <!-- END RESPONSIVE QUICK SEARCH FORM -->
    <!-- BEGIN SIDEBAR MENU -->
    <ul>
        <li class="start ">
            <a href="{{ url('/home') }}">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <i class="icon-user"></i>
                <span class="title">Masterfile</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li ><a href="{{ url('/masterfile') }}">Add Masterfile</a></li>
                <li ><a href="{{ url('/all_mfs') }}">All Masterfiles</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <i class="icon-book"></i>
                <span class="title">Inventory</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li ><a href="{{ url('/add-item') }}">Create Inventory</a></li>
                <li ><a href="{{ url('/categories') }}">Manage Categories</a></li>
                <li ><a href="{{ url('/sub-categories') }}">Manage Sub Categories</a></li>
                <li ><a href="{{ url('/warehouses') }}">Manage Warehouses</a></li>
                <li ><a href="{{ url('/all-items') }}">All Items</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <i class="icon-user"></i>
                <span class="title">Revenue Manager</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li ><a href="{{ url('/revenue-channels') }}">Manage Revenue Channels</a></li>
                <li ><a href="{{ url('/service-channels') }}">Manage Service Channels</a></li>
                <li ><a href="{{ url('/service-bills') }}">Manage Service Bills</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <i class="icon-user"></i>
                <span class="title">User Management</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li ><a href="{{ url('/users') }}">All Users</a></li>
                <li ><a href="{{ url('/add_user_role') }}">Manage User Role</a></li>
                <li ><a href="{{ url('/audit_trail') }}">Audit Trail</a></li>
            </ul>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>