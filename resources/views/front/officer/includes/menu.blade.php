<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="./assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">James Brown</div><small>Officer</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href={{route('officers-dashboard')}}><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">New Registration</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('add-new-nid')}}">Add</a>
                    </li>
                    <li>
                        <a href="typography.html">Edit</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-handcuffs"></i>
                    <span class="nav-label">File Case</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="form_basic.html">Basic Forms</a>
                    </li>
                    <li>
                        <a href="form_advanced.html">Advanced Plugins</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-square-xmark"></i>
                    <span class="nav-label">Dismiss</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="table_basic.html">Basic Tables</a>
                    </li>
                    <li>
                        <a href="datatables.html">Datatables</a>
                    </li>
                </ul>
            </li>

            <li class="heading">PAGES</li>

            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="javascript:;">Level 2</a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="javascript:;">Level 3</a>
                            </li>
                            <li>
                                <a href="javascript:;">Level 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>