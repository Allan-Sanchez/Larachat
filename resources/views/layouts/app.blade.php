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

        <b-navbar toggleable="sm" type="dark" variant="info">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
        
            <b-navbar-brand href="{{ url('/') }}">LaraChat</b-navbar-brand>
        
            <b-collapse id="nav-text-collapse" is-nav class="font-weight-bold ml-auto">
            @guest
              <b-navbar-nav class="ml-auto text-white">
                <b-nav-item  href="{{ route('login') }}">{{ __('Login') }}</b-nav-item>

                @if (Route::has('register'))
                <b-nav-item class="text-white" href="{{ route('register') }}">{{ __('Register') }}</b-nav-item>
                @endif

             @else
                <b-nav-item-dropdown class="ml-auto" text="{{Auth::user()->name}}" right style="list-style: none;">
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
