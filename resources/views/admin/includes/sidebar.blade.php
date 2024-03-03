<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-lg">
                        {{--<img src="{{asset('/')}}image/logo.png" alt="logo" height="22">--}}
                    <span class="font-20 text-white"> Fugitive Tracker</span>  </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}image/logo.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Logo Dark -->
    <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}image/logo.png" alt="dark logo" height="22">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}image/logo.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{asset('/')}}admin/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                     class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                   class="side-nav-link">
                    <i class="fa-solid fa-users"></i>

                    <span> Citizen </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-nid')}}">Add NID</a>
                        </li>
                        <li>
                            <a href="{{route('manage-nid')}}">Manage NID</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                   aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="fa-solid fa-user-secret"></i>
                    <span> Officer </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-officer')}}">Add Officer</a>
                        </li>
                        <li>
                            <a href="{{route('manage-officer')}}">Manage Officer</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                   aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="fa-solid fa-location-dot"></i>
                    <span> Area </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-area')}}">Add Area</a>
                        </li>
                        <li>
                            <a href="{{route('manage-area')}}">Manage Area</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
                   class="side-nav-link">
                    <i class="fa-solid fa-scale-balanced"></i>
                    <span> Law List </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-law')}}">Add Law</a>
                        </li>
                        <li>
                            <a href="{{route('manage-law')}}">Manage Law</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
                   class="side-nav-link">
                    <i class="fa-solid fa-file-circle-check"></i>
                    <span> Solution </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-tasks.html">List</a>
                        </li>
                        <li>
                            <a href="apps-tasks-details.html">Details</a>
                        </li>
                        <li>
                            <a href="apps-kanban.html">Kanban Board</a>
                        </li>
                    </ul>
                </div>
            </li>





            <li class="side-nav-item">
                <a href="{{route('dismiss-list')}}" class="side-nav-link">
                    <i class="fa-solid fa-trash"></i>
                    <span> Case Dismiss </span>
                </a>
            </li>
            


        </ul>
        <!--- End Sidemenu -->
        <div class="clearfix"></div>
    </div>
</div>