<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "Description" content = "OmniScience : Commands & Shortcuts" >

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rock'n'Burger | Bar & Restaurant | Biarritz</title>

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

        <div class="mobileDisplay header bg-white">
            <div class="container-fluid py-3 test">
                <div class="row">
                    <div class="col-sm-5 col-md-4 d-flex align-items-center"">
                        <span class="Iamarock">12 rue du Port Vieux <br> 64200 Biarritz</span>
                    </div>
                    <div class="col-sm-2 col-md-4 d-flex align-items-center justify-content-center">
                        <a class="Rockit redCustom" href="{{ route('public_home') }}">
                            Rock'n'Burger
                        </a>
                    </div>
                    <div class="col-sm-5 col-md-4 d-flex align-items-center justify-content-end">
                        <span class="Iamarock pr-3"><i class="fas fa-phone redCustom pr-1"></i> +33 6 64 64 64 64</span>
                        <a class="p-2 bd-highlight linkCustom" title="Facebook" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="p-2 bd-highlight linkCustom" title="Instagram" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="mobileDisplay navSize navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid d-flex justify-content-center">
                <div class="navbar-header">        
                    <ul class="navbar-nav Iamarock">
                        <a class="nav-link-custom" href="{{ route('public_home') }}">{{ __('Accueil') }}</a>
                        <a class={{ 'menu' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_menu') }}">{{ __('Menu') }}</a>
                        <a class={{ 'evenements' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_event') }}">{{ __('Evénements') }}</a>
                        <a class={{ 'galerie' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_photo') }}">{{ __('Photos') }}</a>
                        <a class={{ 'contact' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_contact') }}">{{ __('Contact') }}</a>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="mobileActive navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container p-1">
                <a class="Rockit redCustom" href="{{ route('public_home') }}">
                    Rock'n'Burger
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span><i class="fas fa-bars fa-2x"></i></span>
                </button>

                <div class="collapse navbar-collapse pt-4" id="navbarSupportedContent">
                    <ul class="navbar-nav Iamarock mobileLink">
                        <a class="nav-link-custom" href="{{ route('public_home') }}">{{ __('Accueil') }}</a>
                        <a class={{ 'menu' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_menu') }}">{{ __('Menu') }}</a>
                        <a class={{ 'evenements' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_event') }}">{{ __('Evénements') }}</a>
                        <a class={{ 'galerie' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_photo') }}">{{ __('Photos') }}</a>
                        <a class={{ 'contact' == request()->path() ? "active-link" : "nav-link-custom"}} href="{{ route('public_contact') }}">{{ __('Contact') }}</a>
                    </ul>
                    <div class="d-flex align-items-center justify-content-end mobileSocial">
                        <a class="p-2 bd-highlight linkCustom" title="Facebook" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="p-2 bd-highlight linkCustom" title="Instagram" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <div class="footer container-fluid text-white">
            <div class="container footer-info">
                <div class="row text-center">
                    <div class="col-4 footer-left">
                        
                    </div>
                    <div class="col-4">
                        
                    </div>
                    <div class="col-4 footer-right">
                        <p class="mt-5">Suivez-nous sur les réseaux sociaux</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="p-2 bd-highlight socialCustom d-flex align-items-center justify-content-center mx-2" title="Facebook" href=""><i class="fab fa-facebook-f fa-2x"></i></a>
                            <a class="p-2 bd-highlight socialCustom  d-flex align-items-center justify-content-center mx-2" title="Instagram" href=""><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center droit">
                <span>© 2020 - Le Rock'n'Burger - Tous droits réservés</span>
            </div>
        </div>
    </div>
</body>
</html>
