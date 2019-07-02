@section('navbar')
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            @if(Auth::user())
                <div>
                    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
                        <div class="container"><a class="navbar-brand" href="#">Logo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse"
                                 id="navcol-1">
                                <ul class="nav navbar-nav mr-auto">
                                    <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('welcome')}}">Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">&nbsp;Notification</a></li>
                                    <li clas
                                        s="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
        @endif




        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('profile')}}">&nbsp;{{ Auth::user()->name }} <span class="caret"></span></a></li>


                    <div class="" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                @endguest
            </ul>
        </div>

    </nav>


@endsection
