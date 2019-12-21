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













        /** {*/
        /*    -webkit-box-sizing: border-box;*/
        /*    box-sizing: border-box;*/
        /*}*/
        /*body {*/
        /*    display: -webkit-box;*/
        /*    display: -ms-flexbox;*/
        /*    display: flex;*/
        /*    -webkit-box-orient: vertical;*/
        /*    -webkit-box-direction: normal;*/
        /*    -ms-flex-direction: column;*/
        /*    flex-direction: column;*/
        /*    min-height: 100vh;*/
        /*    margin: 0;*/
        /*    color: #000;*/
        /*    background: #fff;*/
        /*    font-family: "Gotham Pro","Helvetica Neue";*/
        /*}*/
        /*html {*/
        /*    position: relative;*/
        /*}*/
        /*a {*/
        /*    color: inherit;*/
        /*    text-decoration: none;*/
        /*    cursor: pointer;*/
        /*}*/
        /*img {*/
        /*    border-style: none;*/
        /*}*/
        /**, ::after, ::before {*/
        /*    -webkit-box-sizing: border-box;*/
        /*    box-sizing: border-box;*/
        /*}*/
        /*a {*/
        /*    color: #007bff;*/
        /*    text-decoration: none;*/
        /*    background-color: transparent;*/
        /*    -webkit-text-decoration-skip: objects;*/
        /*}*/
        /*img {*/
        /*    vertical-align: middle;*/
        /*    border-style: none;*/
        /*}*/
        /*body * {*/
        /*    -ms-overflow-style: none;*/
        /*    overflow: -moz-scrollbars-none;*/
        /*}*/
        /*.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {*/
        /*    position: relative;*/
        /*    width: 100%;*/
        /*    min-height: 1px;*/
        /*    padding-right: 15px;*/
        /*    padding-left: 15px;*/
        /*}*/
        /*!* @media all and (min-width:768px) *!*/
        /*.col-md-6 {*/
        /*    -ms-flex: 0 0 50%;*/
        /*    -webkit-box-flex: 0;*/
        /*    flex: 0 0 50%;*/
        /*    max-width: 50%;*/
        /*}*/
        /*.menu_list .item {*/
        /*    background-color: #fff;*/
        /*    -webkit-box-flex: 1;*/
        /*    -moz-flex: 1 1 auto;*/
        /*    -ms-flex: 1 1 auto;*/
        /*    flex: 1 1 auto;*/
        /*    overflow: hidden;*/
        /*}*/
        /*.menu_list :nth-child(2n+1).item {*/
        /*    background-color: #eee;*/
        /*}*/
        /*!* @media only screen and (min-width:768px) *!*/
        /*.menu_list :nth-child(1).item {*/
        /*    -webkit-box-ordinal-group: 2;*/
        /*    -moz-order: 1;*/
        /*    -ms-flex-order: 1;*/
        /*    order: 1;*/
        /*}*/
        /*.row {*/
        /*    display: -ms-flexbox;*/
        /*    display: -webkit-box;*/
        /*    display: flex;*/
        /*    -ms-flex-wrap: wrap;*/
        /*    flex-wrap: wrap;*/
        /*    margin-right: -15px;*/
        /*    margin-left: -15px;*/
        /*}*/
        /*.menu_list {*/
        /*    position: relative;*/
        /*    z-index: 1;*/
        /*    -webkit-box-direction: normal;*/
        /*    -webkit-box-orient: vertical;*/
        /*    -moz-flex-direction: column;*/
        /*    -ms-flex-direction: column;*/
        /*    flex-direction: column;*/
        /*}*/
        /*!* @media only screen and (min-width:768px) *!*/
        /*.menu_list {*/
        /*    -webkit-box-direction: normal;*/
        /*    -webkit-box-orient: horizontal;*/
        /*    -moz-flex-direction: row;*/
        /*    -ms-flex-direction: row;*/
        /*    flex-direction: row;*/
        /*}*/
        /*.container {*/
        /*    width: 100%;*/
        /*    padding-right: 15px;*/
        /*    padding-left: 15px;*/
        /*    margin-right: auto;*/
        /*    margin-left: auto;*/
        /*}*/
        /*!* @media all and (min-width:576px) *!*/
        /*.container {*/
        /*    max-width: 540px;*/
        /*}*/
        /*!* @media all and (min-width:768px) *!*/
        /*.container {*/
        /*    max-width: 720px;*/
        /*}*/
        /*!* @media all and (min-width:992px) *!*/
        /*.container {*/
        /*    max-width: 960px;*/
        /*}*/
        /*.wrapper {*/
        /*    overflow: hidden;*/
        /*    padding-top: 50px;*/
        /*}*/
        /*!* @media only screen and (min-width:768px) *!*/
        /*.wrapper {*/
        /*    padding-top: 0px;*/
        /*}*/
        /*body {*/
        /*    margin: 0;*/
        /*}*/
        /*body {*/
        /*    margin: 0;*/
        /*    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";*/
        /*    font-size: 1rem;*/
        /*    font-weight: 400;*/
        /*    line-height: 1.5;*/
        /*    color: #212529;*/
        /*    text-align: left;*/
        /*    background-color: #fff;*/
        /*}*/
        /*body {*/
        /*    font-family: "Gotham Pro","Helvetica Neue";*/
        /*    line-height: 1.2;*/
        /*    font-weight: 400;*/
        /*    width: 100%;*/
        /*    background: #fff;*/
        /*    font-size: 16px;*/
        /*    -webkit-appearance: none;*/
        /*}*/
        /*html {*/
        /*    font-family: sans-serif;*/
        /*    -ms-text-size-adjust: 100%;*/
        /*    -webkit-text-size-adjust: 100%;*/
        /*}*/
        /*html {*/
        /*    font-family: sans-serif;*/
        /*    line-height: 1.15;*/
        /*    -webkit-text-size-adjust: 100%;*/
        /*    -ms-text-size-adjust: 100%;*/
        /*    -ms-overflow-style: scrollbar;*/
        /*    -webkit-tap-highlight-color: transparent;*/
        /*}*/
        /*:root {*/
        /*    --blue: #007bff;*/
        /*    --indigo: #6610f2;*/
        /*    --purple: #6f42c1;*/
        /*    --pink: #e83e8c;*/
        /*    --red: #dc3545;*/
        /*    --orange: #fd7e14;*/
        /*    --yellow: #ffc107;*/
        /*    --green: #28a745;*/
        /*    --teal: #20c997;*/
        /*    --cyan: #17a2b8;*/
        /*    --white: #fff;*/
        /*    --gray: #6c757d;*/
        /*    --gray-dark: #343a40;*/
        /*    --primary: #007bff;*/
        /*    --secondary: #6c757d;*/
        /*    --success: #28a745;*/
        /*    --info: #17a2b8;*/
        /*    --warning: #ffc107;*/
        /*    --danger: #dc3545;*/
        /*    --light: #f8f9fa;*/
        /*    --dark: #343a40;*/
        /*    --breakpoint-xs: 0;*/
        /*    --breakpoint-sm: 576px;*/
        /*    --breakpoint-md: 768px;*/
        /*    --breakpoint-lg: 992px;*/
        /*    --breakpoint-xl: 1200px;*/
        /*    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";*/
        /*    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;*/
        /*}*/
        /*.menu_list .item .inner {*/
        /*    height: 100%;*/
        /*}*/
        /*a {*/
        /*    background-color: transparent;*/
        /*}*/
        /*.menu_list .item .inner a {*/
        /*    height: 100%;*/
        /*    display: -webkit-box;*/
        /*    display: -moz-flex;*/
        /*    display: -ms-flexbox;*/
        /*    display: flex;*/
        /*    -webkit-box-direction: normal;*/
        /*    -webkit-box-orient: horizontal;*/
        /*    -moz-flex-direction: row;*/
        /*    -ms-flex-direction: row;*/
        /*    flex-direction: row;*/
        /*    -webkit-box-align: center;*/
        /*    -ms-flex-align: center;*/
        /*    -moz-align-items: center;*/
        /*    align-items: center;*/
        /*    line-height: 0;*/
        /*}*/
        /*.menu_list :nth-child(2n+1).item .photo {*/
        /*    -webkit-box-ordinal-group: 2;*/
        /*    -moz-order: 1;*/
        /*    -ms-flex-order: 1;*/
        /*    order: 1;*/
        /*}*/
        /*.menu_list .item .inner a .photo {*/
        /*    -webkit-box-flex: 1;*/
        /*    -moz-flex: 1 1 100px;*/
        /*    -ms-flex: 1 1 100px;*/
        /*    flex: 1 1 100px;*/
        /*}*/
        /*!* @media only screen and (min-width:768px) *!*/
        /*.menu_list .item .inner a .photo {*/
        /*    -webkit-box-ordinal-group: 0;*/
        /*    -moz-order: -1;*/
        /*    -ms-flex-order: -1;*/
        /*    order: -1;*/
        /*}*/
        /*.menu_list .item .inner a .title {*/
        /*    font-family: m_Brody;*/
        /*    font-size: 2em;*/
        /*    color: #000;*/
        /*    text-align: center;*/
        /*    -webkit-box-flex: 1;*/
        /*    -moz-flex: 1 1 auto;*/
        /*    -ms-flex: 1 1 auto;*/
        /*    flex: 1 1 auto;*/
        /*    line-height: 1;*/
        /*    position: relative;*/
        /*}*/
        /*!* @media only screen and (min-width:576px) *!*/
        /*.menu_list .item .inner a .title {*/
        /*    font-size: 2.62em;*/
        /*}*/
        /*.menu_list .item .inner a .photo img {*/
        /*    max-width: 100%;*/
        /*    -webkit-transition-duration: 0.3s;*/
        /*    transition-duration: 0.3s;*/
        /*    -webkit-transition-property: transform;*/
        /*    -webkit-transition-property: transform;*/
        /*    transition-property: transform;*/
        /*    transition-property: transform;*/
        /*    transition-property: transform, transform;*/
        /*    -webkit-transform: scale(1);*/
        /*    transform: scale(1);*/
        /*}*/
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
                                <a href="{{route('showbasket')}}">Basket</a>
                            </li>
                            <li>
                                <a href="/contacts/">User account</a>
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

