<div class="">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin') }}">
                <i class="fas fa-home"></i> HOME
            </a>
            <ul class="navbar-nav">
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fa fa-film"></i> Movie
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/movie/create')}}"><i class="fas fa-plus-square"></i> New</a>
                        <a class="dropdown-item" href="{{url('/all_movie')}}"><i class="fas fa-th-list"></i> All Movie</a>
                    </div>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fas fa-layer-group"></i> Series
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/series/create')}}"><i class="fas fa-plus-square"></i> New</a>
                        <a class="dropdown-item" href="{{url('/all_series')}}"><i class="fas fa-th-list"></i> All Series</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/users')}}"><i class="fas fa-users"></i> Users</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fas fa-print"></i> Print
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fas fa-file-video"></i> Movie Print</a>
                        <a class="dropdown-item" href="{{url('print/series')}}"><i class="fas fa-object-ungroup"></i> Series Print</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/setting')}}"><i class="fas fa-cogs"></i> Setting</a>
                </li>



            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-registered"></i> {{ __('Register') }}</a>
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
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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