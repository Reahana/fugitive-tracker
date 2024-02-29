<header class="header">
    <div class="page-brand">
        <a class="link" href="index.html">
                    <span class="brand">Fugitive Tracker
                        <span class="brand-tip"></span>
                    </span>
            <span class="brand-mini">FT</span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
            <li>
                <form class="navbar-search" action="javascript:;">
                    <div class="rel">
                        <span class="search-icon"><i class="ti-search"></i></span>
                        <input class="form-control" placeholder="Search here...">
                    </div>
                </form>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    @if(auth()->user()->role_id== 1)

                        <img  src="{{asset($officer->image)}}"   />
                    @endif
                    {{--<img src="{{asset('/')}}officer-images" />--}}
                    <span></span>{{auth()->user()->name}}<i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Change Password</a>
                    <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="fa fa-power-off"></i>Logout</a>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>