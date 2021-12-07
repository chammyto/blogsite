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
    <script src="{{ asset('js/main.js') }}" defer></script>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
   
    <div id="app">

        <div id="reychamNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn text-info" onclick="closeNav()"><i class="fa fa-times"></i></a>
                <div class="overlay-content">
                    <a class="navbar-brand" href="http://127.0.0.1:8000/">
                    <img src=" {{ url('/images/reycham-logo.png') }} " id="logo-ko" class="img-fluid" alt="logo">
                    </a>
                    <a href="http://127.0.0.1:8000/#about" onclick="closeNav()">About</a>
                    <a href="http://127.0.0.1:8000/#skills" onclick="closeNav()">Skills</a>
                    <a href="http://127.0.0.1:8000/#services" onclick="closeNav()">Services</a>
                    <a href="http://127.0.0.1:8000/#portfolio" onclick="closeNav()">Portfolio</a>
                    <a href="http://127.0.0.1:8000/#contact" onclick="closeNav()">Contact</a>
                    <a href="/blog" onclick="closeNav()">Blog</a>

                </div> 
            </div>
    </div>         
                <nav class="navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="menu-icon text-info fa fa-bars" onclick="openNav()"> </i>
                    </button>
                </nav>
            <div class="page-section">
                <h1 class="blog-heading text-center"> Blogs </h1>
            </div>
</div> <!--End of App-->
</body>