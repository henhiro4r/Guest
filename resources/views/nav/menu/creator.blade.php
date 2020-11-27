<ul class="nav navbar-nav text-light" id="accordionSidebar">
    <li class="nav-item" role="presentation"><a class="nav-link {{$pages == 'dash' ? 'active' : ''}}" href="{{ route('creator.dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>

    <li class="nav-item" role="presentation"><a class="nav-link {{ $pages == 'event' ? 'active' : ''}} " href="{{ route('creator.events.index') }}"><i class="fas fa-ticket-alt"></i><span>Event List</span></a></li>
</ul>
