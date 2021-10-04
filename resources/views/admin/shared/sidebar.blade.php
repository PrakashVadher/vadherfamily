<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
    <div class="admin-block d-flex">
        <div>
            <img src="{{asset('/admin/assets/img/admin-avatar.png')}}" width="45px" />
        </div>
        <div class="admin-info">
            <div class="font-strong">Prakash Vadher</div><small>Admin</small></div>
    </div>
    <ul class="side-menu metismenu">
        <li>
            <a href="#"><i class="sidebar-item-icon fa fa-th-large"></i>
                <span class="nav-label">Dashboard</span>
            </a>
        </li>
        <li class="active">
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                <span class="nav-label">Family Members</span><i class="fa fa-angle-left arrow"></i></a>
            <ul class="nav-2-level collapse in">
                <li>
                    <a class="{{ request()->is('people') ? 'active' : '' }}" href="{{route('people.index')}}">List All</a>
                </li>
                <li>
                    <a class="{{ request()->is('people/create') ? 'active' : '' }}" href="{{route('people.create')}}">Add Member</a>
                </li>                
            </ul>
        </li>
        </ul>
    </div>
</nav>