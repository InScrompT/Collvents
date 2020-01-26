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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ route('index') }}" class="navbar-item">
                        <span class="navbar-item" style="font-size: 1.5em">Collvents</span>
                    </a>

                    {{--Hamburger menu, must have three spans to show three dashes--}}
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-end">
                        @guest
                            <a href="{{ route('auth.login') }}" class="navbar-item">Account</a>
                            <div class="navbar-item">
                                <a href="#" class="button is-primary">Submit Event</a>
                            </div>
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <span href="#" class="navbar-link">{{ Auth::user()->name ?? Auth::user()->email }}</span>
                                <div class="navbar-dropdown">
                                    <a href="{{ route('home') }}" class="navbar-item">Dashboard</a>
                                    <hr class="navbar-divider">
                                    <a href="{{ route('auth.logout') }}" class="navbar-item" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-item">
                                <a href="{{ route('event.create') }}" class="button is-primary">Submit Event</a>
                            </div>
                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>
