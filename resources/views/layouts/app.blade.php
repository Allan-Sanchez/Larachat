<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .nav-link{
            color: white !important;
        }
        .nav-link:hover{
            color: rgba(255, 255, 255, 0.5) !important;
        }
        
    </style>
</head>
<body>
    
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav> --}}

        <b-navbar toggleable="sm" type="dark" variant="info">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
        
            <b-navbar-brand href="{{ url('/') }}">LaraChat</b-navbar-brand>
        
            <b-collapse id="nav-text-collapse" is-nav class="font-weight-bold">
            @guest
              <b-navbar-nav class="ml-auto text-white">
                <b-nav-item  href="{{ route('login') }}">{{ __('Login') }}</b-nav-item>

                @if (Route::has('register'))
                <b-nav-item class="text-white" href="{{ route('register') }}">{{ __('Register') }}</b-nav-item>
                @endif

             @else
                <b-nav-item-dropdown text="{{ Auth::user()->name }}" right>
                    <b-dropdown-item href="{{ route('logout') }}"
                        @click.prevent="logout">
                            {{ __('Logout') }}

                            <b-form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </b-form>
                    </b-dropdown-item>

                  </b-nav-item-dropdown>
              </b-navbar-nav>
            @endguest
            </b-collapse>
          </b-navbar>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
