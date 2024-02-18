<nav class="navbar navbar-expand-lg menu-bar sticky-top  ">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href={{route('/')}}>
            <img src="{{asset('/')}}image/logo.png"  width="68" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="fs-4 navbar-nav me-auto  mb-2 mb-lg-0">
                <li class="nav-item menu ">
                    <a class="nav-link {{ request()->is('/') ? 'active-link' : ''}}" aria-current="page" href={{route('/')}}>Home</a>
                </li>
                <li class="nav-item menu ">
                    <a class="nav-link {{ request()->is('law-list') ? 'active-link' : ''}}" href={{route('law-list')}}>Law List</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link {{ request()->is('amount-of-fine') ? 'active-link' : ''}}" href={{route('amount-of-fine')}}>Amount of Fine</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link {{ request()->is('how-to-solve') ? 'active-link' : ''}}" href={{route('how-to-solve')}}>How to Solve</a>
                </li>
                <li class="nav-item  menu">
                    <a class="nav-link {{ request()->is('check-status') ? 'active-link' : ''}}" href={{route('check-status')}}>Check My Status </a>
                </li>
                <li class="nav-item  menu ">
                    <a class="nav-link login-btn" href={{route('officer-login')}} ><i class="fa-solid fa-user "></i> Log in</a>
                </li>
            </ul>



            <hr class="dropdown-divider">
        </div>

    </div>

</nav>