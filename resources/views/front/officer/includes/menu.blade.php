<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img class="img-circle" src="{{asset($officer->image)}}"width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{auth()->user()->name}}</div><small>Officer</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href={{route('officers-dashboard')}}><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa-solid fa-user"></i>
                    <span class="nav-label">Profile</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">View</a>
                    </li>
                    <li>
                        <a href="">Edit</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="{{route('add-case')}}"><i class="sidebar-item-icon fa-solid fa-handcuffs"></i>
                    <span class="nav-label">File Case</span></a>

            </li>
            <li>
                <a href="{{route('manage-case')}}"><i class="sidebar-item-icon fa-solid fa-list-check"></i>
                    <span class="nav-label">Manage Case</span></a>

            </li>
            <li>
                <a href="{{route('request-list')}}"><i class="sidebar-item-icon fa-solid fa-file-circle-minus"></i>
                    <span class="nav-label">Dismiss Request List</span></a>

            </li>

        </ul>
    </div>
</nav>