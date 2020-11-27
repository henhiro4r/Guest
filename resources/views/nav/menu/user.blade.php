<ul class="nav navbar-nav text-light" id="accordionSidebar">
    <li class="nav-item" role="presentation"><a class="nav-link {{$pages == 'dash' ? 'active' : ''}}" href="{{ route('user.dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
    <li class="nav-item" role="presentation"><a class="nav-link {{ $pages == 'event' ? 'active' : ''}} " href="{{ route('user.events.index') }}"><i class="fas fa-list-alt"></i><span>My Event</span></a></li>
</ul>
