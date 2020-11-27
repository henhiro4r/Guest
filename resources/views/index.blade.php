<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('pages/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset('pages/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('pages/css/smoothproducts.css')}}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="/">{{ config('app.name', 'Laravel') }}</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                @auth
                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route(strtolower(\Illuminate\Support\Facades\Auth::user()->role->name).'.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href=" {{ route('login' )}}">Login</a></li>
                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
<main class="page blog-post-list">
    <section class="clean-block clean-blog-list dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Ongoing Event List</h2>
            </div>
            <div class="block-content">
                @if(count($events) > 0)
                    @foreach($events as $event)
                        <div class="clean-blog-post">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid"
                                                           src="https://picsum.photos/id/237/370/252"></div>
                                <div class="col-lg-7">
                                    <h3>{{$event->title}}</h3>
                                    <div class="info"><span
                                            class="text-muted">{{ "Event Date: ". \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}</span>
                                    </div>
                                    <p>{{ $event->description }}</p>
                                    @auth
                                        <button class="btn btn-outline-primary btn-sm" type="button">Request to join!
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid"
                                                       src="https://picsum.photos/id/237/370/252"></div>
                            <div class="col-lg-7">
                                <h3>No Data</h3>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
</main>
<footer class="page-footer dark">
    <div class="footer-copyright" style="bottom: 0">
        <p>© 2020 Copyright {{ config('app.name', 'Laravel') }}</p>
    </div>
</footer>
<script src="{{asset('pages/js/jquery.min.js')}}"></script>
<script src="{{asset('pages/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{asset('pages/js/smoothproducts.min.js')}}"></script>
<script src="{{asset('pages/js/theme.js')}}"></script>
</body>

</html>
