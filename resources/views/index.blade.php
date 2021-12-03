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
            <a href="javascript:void(0)" class="closebtn text-info" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Clients</a>
                    <a href="#">Contact</a>
                </div>
            </div>
    </div>
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <h4 class="text-white">Collapsed content</h4>
                        <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div>
                <nav class="navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-icon text-info" onclick="openNav()">&#9776;</span>
                    </button>
                </nav>

    <div class="master-head pt-5">
        <div class="row justify-content-center pt-4">
            <img class="profileImage img-fluid" src="https://cdn.pixabay.com/photo/2016/02/17/15/37/laptop-1205256_1280.jpg" alt="">
            <h1 class="text-white text-center mt-5">Hello.</h1>
        </div>
       </div>
    </div>

    <div class="page-section" style="height: 100vh;">

    </div>





        </div> <!--Closing of App-->
     
</body>
</html>
