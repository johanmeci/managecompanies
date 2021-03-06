<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Manage Companies</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="@yield('title')">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Manage Companies
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
                            <a class="nav-link" href="locale/en"><img src="{{ asset('img/en.png') }}" alt="English" width="20"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="locale/es"><img src="{{ asset('img/es.png') }}" alt="Spanish" width="20"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">@lang('home.lg_login')</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <div class="container-locale">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}/locale/en"><img src="{{ asset('img/en.png') }}" alt="English" width="20"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}/locale/es"><img src="{{ asset('img/es.png') }}" alt="Spanish" width="20"></a>
                            </li>
                        </div>
                        <div class="container-actions">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('companies.index') }}">@lang('home_companies.cp_companies')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employees.index') }}">@lang('home_employees.em_employees')</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('home.lg_logout')
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>