<ul class="nav navbar-nav text-light" id="accordionSidebar">
    <li class="nav-item" role="presentation"><a class="nav-link {{$pages == 'dash' ? 'active' : ''}}" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
    <li class="nav-item" role="presentation">
        <a class="btn btn-link nav-link @if($pages=='uadm' || $pages=='ucrt' || $pages=='ureg' || $pages=='uadd' || $pages=='uedt') active @endif" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#user" role="button">
            <i class="fas fa-user-cog"></i><span>Users Management</span>
        </a>
        <div class="collapse @if($pages=='uadm' || $pages=='ucrt' || $pages=='ureg' || $pages=='uadd' || $pages=='uedt') show @endif" id="user">
            <div class="bg-white border rounded py-2 collapse-inner">
                <a class="collapse-item @if($pages=='uadm') active @endif" href="{{ route('admin.admin') }}">Administrator</a>
                <a class="collapse-item @if($pages=='ucrt') active @endif" href="{{ route('admin.creator') }}">Event Creator</a>
                <a class="collapse-item @if($pages=='ureg') active @endif" href="{{ route('admin.users.index') }}">Regular User</a>
                <a class="collapse-item @if($pages=='uadd') active @endif" href="{{ route('admin.users.create') }}">Add New User</a>
            </div>
        </div>
    </li>

    <li class="nav-item" role="presentation"><a class="nav-link {{ $pages == 'event' ? 'active' : ''}} " href="{{ route('admin.events.index') }}"><i class="fas fa-ticket-alt"></i><span>Event List</span></a></li>
</ul>
