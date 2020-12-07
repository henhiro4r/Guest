<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid">
        <ul class="nav navbar-nav flex-nowrap ml-auto">
            @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                @include('nav.notif.alert')
                @include('nav.notif.inbox')
            @endif
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow" role="presentation">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                        <span class="d-none d-lg-inline mr-2 text-gray-600 small">{{ Auth::user()->name }}</span>
                        <img class="border rounded-circle img-profile" src="{{asset('assets/img/profile-default.png')}}">
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                        <a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" role="presentation" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
