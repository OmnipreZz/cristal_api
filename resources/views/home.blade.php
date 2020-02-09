<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rock'n'Burger | Restaurant à Biarritz</title>

    <meta name="description" content="Le restaurant Rock'n'Burger vous accueille à Biarritz - Burgers, Wraps, Fish and Chips, Poulets Frites - Sur place ou à emporter"> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5 col-md-4 d-flex align-items-center">
                        <span class="Iamarock">12 rue du Port Vieux <br> 64200 Biarritz</span>
                    </div>
                    <div class="col-sm-2 col-md-4 d-flex align-items-center justify-content-center">
                        <a href="{{ route('public_home') }}">
                            <img class="img-fluid logoHome" alt="logo" src="/images/logo06.png"></img>
                        </a>
                    </div>
                    <div class="col-sm-5 col-md-4 d-flex align-items-center justify-content-end">
                        <span class="Iamarock pr-3"><i class="fas fa-phone redCustom pr-1"></i> +33 5 40 39 58 12</span>
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
                        <a class="{{ 'menu' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_menu') }}">{{ __('Menu') }}</a>
                        <a class="{{ 'galerie' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_photo') }}">{{ __('Photos') }}</a>
                        <a class="{{ 'evenements' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_event') }}">{{ __('Actualités') }}</a>
                        <a class="{{ 'contact' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_contact') }}">{{ __('Contact') }}</a>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="mobileActive navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">      
                    <div>
                        <a class="p-2 bd-highlight linkCustom" title="Facebook" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="p-2 bd-highlight linkCustom" title="Instagram" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <a href="{{ route('public_home') }}">
                        <img class="img-fluid logoHome" alt="logo" src="/images/logo06.png"></img>
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span><i class="fas fa-bars fa-2x"></i></span>
                </button>

                <div class="collapse navbar-collapse pt-4" id="navbarSupportedContent">
                    <ul class="navbar-nav Iamarock mobileLink">
                        <a class="nav-link-custom" href="{{ route('public_home') }}">{{ __('Accueil') }}</a>
                        <a class="{{ 'menu' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_menu') }}">{{ __('Menu') }}</a>
                        <a class="{{ 'galerie' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_photo') }}">{{ __('Photos') }}</a>
                        <a class="{{ 'evenements' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_event') }}">{{ __('Actualités') }}</a>
                        <a class="{{ 'contact' == request()->path() ? "active-link" : "nav-link-custom"}}" href="{{ route('public_contact') }}">{{ __('Contact') }}</a>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <div class="footer container-fluid text-white">
            <div class="container-fluid footer-info Iamarock">
                <div class="row">
                    <div class="col-xs-12 col-md-4 footer-left">
                        <p class="mt-4"><span class="Rockit">Le Rock'n Burger</span><br>12 rue du Port Vieux <br> 64200 Biarritz <br>+33 5 40 39 58 12</p>
                    </div>
                    <div class="col-xs-12 col-md-4 text-center">
                        <p class="mt-4">Ouvert tous les jours<br>Sur place ou à emporter<br><span class="horaire">Lun à Ven 12H - 15H / 19H - 22H<br>Sam - Dim 12H - 23H</span></p>
                    </div>
                    <div class="col-xs-12 col-md-4 footer-right text-center">
                        <p class="mt-4">Rejoignez-nous sur les réseaux sociaux</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="p-2 bd-highlight socialCustom d-flex align-items-center justify-content-center mx-2" title="Facebook" href=""><i class="fab fa-facebook-f fa-2x"></i></a>
                            <a class="p-2 bd-highlight socialCustom  d-flex align-items-center justify-content-center mx-2" title="Instagram" href=""><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center droit">
                <span>© 2020 - Le Rock'n Burger - Tous droits réservés | <a class="mentions" href="{{ route('public_mention') }}">Mentions Légales</a></span>
            </div>
        </div>
    </div>
</body>
</html>
