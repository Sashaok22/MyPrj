<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        menu, ol, ul {
            padding: 0;
            list-style-type: none;
        }
        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 0;
            align-items: center;
        }
        .desktopmenu ul li {

        }
         .desktopmenu ul li:hover {
            background: #fc1a1a;
        }
        .desktopmenu ul {
            display: -webkit-box;
            display: -webkit-box;
            display: -moz-flex;
            display: -ms-flexbox;
            -webkit-box-direction: normal;
            -webkit-box-orient: horizontal;
            -moz-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -moz-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -moz-justify-content: center;
            justify-content: center;
            -ms-flex-line-pack: space-around;
            align-content: space-around;
            margin: 0;
        }
        .desktopmenu ul li a {
            color: inherit;
            padding: 10px 15px;
            text-decoration: none;
        }


</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="desktopmenu">
                    <div class="container">

                        <ul class="main_menu">
                            <li class="active first">
                                <a href="{{route('categories')}}">Menu</a>
                            </li>
                            <li>
                                <a href="/about/">Корзина</a>
                            </li>
                            <li>
                                <a href="/contacts/">Личный кабинет</a>
                            </li>
                            <li>
                                <a href="{{route('InsProd')}}">Insert product</a>
                            </li>
                        </ul>
                    </div>
                </div>

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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>

