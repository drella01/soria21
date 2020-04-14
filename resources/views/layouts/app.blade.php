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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @include('layouts.header.libs')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .button{
            color:#0000CC;
            text-align:center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            float:left;
            border: #85929e;
        }
        a:hover {
            font-size: 150%;
        }
        a h6{
            padding-top: 1px;
            font-weight: bolder;
            font-size: 10px;
        }

        nav.navbar.navbar-expand.navbar-light.bg-white.shadow-sm>ul.nav.navbar-nav>li.nav-item{
            max-width: 120px !important;
            display: inline-block !important;
        }
        .bgBlack{
            background-image: linear-gradient(to bottom right, #0000CC, #d3d3d3) !important;
        }

        li.parent>a{
            color: #ffffff !important;
        }
    </style>
</head>
<body>
    <div class="pre-loading loadingDone">
        <figure class="loading-logo"><img src="assets/img/logo.png" alt="ravish logo"></figure>
        <div class="loading-animation">
            <div class="loader-container arc-rotate2">
                <div class="loader">
                    <div class="arc">
                        <figure class="loading-logo"><img src="assets/img/logo.png" alt="ravish logo"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bodyWrap" id="app">
        @include('layouts.header.master')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer.master')
    @include('layouts.footer.libs')
</body>
</html>
