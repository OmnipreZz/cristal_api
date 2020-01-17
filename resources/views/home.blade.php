<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "Description" content = "OmniScience : Commands & Shortcuts" >

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rock'n'Burger | Biarritz</title>

    <meta name="description" content="Le restaurant Rock'n'Burger vous accueille à Biarritz - Burger, Fish and Chips, Poulet Frites - Sur place ou à emporter"> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/388a6f036a.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>


<body>
    <div id="app">

        <div class="header bg-white">
            <div class="container-fluid py-3 test">
                <div class="row">
                    <div class="col-sm-4 col-md-3 d-flex align-items-center"">
                        <span class="Iamarock">12 rue du Port Vieux <br> 64200 Biarritz</span>

                    </div>
                    <div class="col-sm-4 col-md-6 d-flex align-items-center justify-content-center">
                        <a class="Rockit redCustom" href="{{ url('/') }}">
                            Rock'n'Burger
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 d-flex align-items-center justify-content-end">
                        <a class="p-2 bd-highlight linkCustom" title="Facebook" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="p-2 bd-highlight linkCustom" title="Instagram" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid d-flex justify-content-center">
                <div class="navbar-header">        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav Iamarock">
                            <a class="nav-link-custom mx-3" href="">{{ __('Menu') }}</a>
                            <a class="nav-link-custom mx-3" href="">{{ __('Evénements') }}</a>
                            <a class="nav-link-custom mx-3" href="">{{ __('Photos') }}</a>
                            <a class="nav-link-custom mx-3" href="">{{ __('Contact') }}</a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="container-fluid accueil">

        </div>

        <!-- <main class="py-4">
            @yield('content')
        </main> -->
    </div>
</body>
</html>
