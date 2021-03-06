<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Khit Thit Movie Store</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


<link rel="icon" href="{!! asset('logo.png') !!}"/>



    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    body{
        background: #636363;
    }
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #efeeee;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 1px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 10px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: white;
    }
    </style>
</head>

<body>
    <div id="app">


        <div class="col d-none d-md-block mb-4">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark shadow-sm fixed-top ">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <i class="fas fa-home"></i> Khit Thit
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/movie')}}"><i class="fa fa-film"></i> Movie</a>
                        </li>
                        
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fas fa-layer-group"></i> Series
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/series')}}/English">English Series</a>
                                <a class="dropdown-item" href="{{url('/series')}}/Korea">Korea Series</a>
                                <a class="dropdown-item" href="{{url('/series')}}/China">China Series</a>
                                <a class="dropdown-item" href="{{url('/series')}}/Thailian">Thailian Series</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/watchlist')}}"><i class="fas fa-clipboard-list"></i>
                                Watchlist</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/search')}}"><i class="fas fa-search"></i> Search</a>
                        </li>
                        @if(Auth::check())
                        @if( Auth::user()->admin == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin')}}"><i class="fas fa-user-cog"></i> Admin Panel</a>
                        </li>
                        @endif
                        @endif

                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-registered"></i>{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i>  {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{url('/about')}}">
                                        <i class="fas fa-user"></i> Profile
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div>

            <div class="d-block d-md-none ">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{url('/movie')}}"><i class="fa fa-film"></i> Movie</a>
                    <a href="{{url('/series')}}"><i class="fas fa-layer-group"></i> Series</a>



                    <hr class="ml-4 mr-4">

                    @guest
                    <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"><i class="fa fa-registered"></i> {{ __('Register') }}</a>
                    @endif
                    @else
                    <a href="{{url('/about')}}"><i class="fa fa-user"></i> About</a>
                    <a href="{{url('/watchlist')}}"><i class="fa fa-list-alt"></i> Watchlist</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </div>
                <nav class="navbar navbar-expand-md bg-dark navbar-dark shadow-sm">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon" onclick="openNav()"></span>
                            </button>
                        </div>

                    </div>
                </nav>

            </div>
        </div>

        <main class="">
            <div class="mt-5 d-none d-md-block d-lg-block"></div>
            @yield('content')
        </main>
    </div>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>

</body>

</html>