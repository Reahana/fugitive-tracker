<!-- ========== Topbar Start ========== -->
<div class="navbar-custom topnav-navbar">
    <div class="container-fluid detached-nav">

        <!-- Topbar Logo -->
        <div class="logo-topbar">
            <!-- Logo light -->
            <a href="index.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="{{asset('/')}}admin/assets/images/logo.png" alt="logo" height="22">
                            </span>
                <span class="logo-sm">
                                <img src="{{asset('/')}}admin/assets/images/logo-sm.png" alt="small logo" height="22">
                            </span>
            </a>

            <!-- Logo Dark -->
            <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="dark logo" height="22">
                            </span>
                <span class="logo-sm">
                                <img src="{{asset('/')}}admin/assets/images/logo-dark-sm.png" alt="small logo" height="22">
                            </span>
            </a>
        </div>

        <!-- Sidebar Menu Toggle Button -->
        <button class="button-toggle-menu">
            <i class="mdi mdi-menu"></i>
        </button>

        <!-- Horizontal Menu Toggle Button -->
        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <ul class="list-unstyled topbar-menu float-end mb-0">
            <li class="dropdown notification-list d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-search-line noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <li class="notification-list d-none d-sm-inline-block">
                <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
                    <i class="ri-moon-line noti-icon"></i>
                </a>
            </li>

            <li class="notification-list d-none d-md-inline-block">
                <a class="nav-link" href="#" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line noti-icon"></i>
                </a>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                   aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{asset('/')}}admin/assets/images/admin.jpg" alt="user-image" class="rounded-circle">
                                </span>
                    <span>
                                    <span class="account-user-name">{{Auth::user()->name}}</span>
                                    <span class="account-position">Admin</span>
                                </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('change-password')}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-key me-1"></i>
                        <span>Password</span>
                    </a>



                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="mdi mdi-logout me-1"></i>
                        <span>Logout</span>
                    </a>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        <!-- Topbar Search Form -->
        <div class="app-search dropdo">
            <form>
                <div class="input-group">
                    <input type="search" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                    <span class="mdi mdi-magnify search-icon"></span>
                    <button class="input-group-text btn btn-primary" type="submit">Search</button>
                </div>
            </form>

        </div>
    </div>
</div>