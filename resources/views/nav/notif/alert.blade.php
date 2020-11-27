<li class="nav-item dropdown no-arrow mx-1" role="presentation">
    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
            <span class="badge badge-danger badge-counter">AAA</span><i class="fas fa-bell fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
             role="menu">
            <h6 class="dropdown-header">alerts center</h6>
{{--            @if(count($empty_gallons) > 0)--}}
{{--                @foreach($empty_gallons as $gallon)--}}
{{--                    <a class="d-flex align-items-center dropdown-item" href="{{ \Illuminate\Support\Facades\Auth::user()->isAdmin() ? route('gallon.index') : route('galon.index') }}">--}}
{{--                        <div class="mr-3">--}}
{{--                            <div class="bg-danger icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>--}}
{{--                        </div>--}}
{{--                        <div><span class="small text-gray-500">{{\Carbon\Carbon::parse($gallon->updated_at)->format('d F Y / H:m:s')}}</span>--}}
{{--                            <p>{{$gallon->description . ' habis!'}}</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            @else--}}
                <a class="d-flex align-items-center dropdown-item" href="#">
                    <p class="mt-3">No alerts found.</p>
                </a>
{{--            @endif--}}
        </div>
    </div>
</li>
