<li class="nav-item dropdown no-arrow mx-1" role="presentation">
    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
            <i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">0</span></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
             role="menu">
            <h6 class="dropdown-header">pending tickets</h6>
{{--            @if(count($tickets) > 0)--}}
{{--                @foreach($tickets as $ticket)--}}
{{--                    <a class="d-flex align-items-center dropdown-item" href="{{ route('ticket.index') }}">--}}
{{--                        <div class="font-weight-bold">--}}
{{--                            <div class="text-truncate"><span>{{$ticket->title}}</span></div>--}}
{{--                            <p class="small text-gray-500 mb-0">{{$ticket->description}}</p>--}}
{{--                            <p class="small text-gray-500 mb-0">From : {{$ticket->submitter->name . ' ('.$ticket->submitter->role->name.')'}}</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            @else--}}
                <a class="d-flex align-items-center dropdown-item" href="#">
                    <p class="mt-3">No new tickets</p>
                </a>
{{--            @endif--}}
        </div>
    </div>
    <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
</li>
