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
    <script src="{{ asset('js/jquery3.3.1.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom/cards.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom/slideshow.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom/allcustom.css')}}">
    <link rel="stylesheet" href="{{ asset('css/material-icons-min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom/homecontact.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom/services.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom/team.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom/property-form.css') }}" />

    <style>
        .full-height {
            min-height: 100vh;
            border: 1px solid red;
        }

        .page-section{
            min-height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            border: 2px solid red;
        }
    </style>
</head>
<body>
    <div id="app" class="flex">
        <nav class="py-4 bg-white shadow-sm navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand text-uppercase font-weight-bold" href="{{ url('/') }}" style="font-family: 'Courier New', Courier, monospace; font-size: 20px;">
                    Uniquep
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="mr-auto navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="ml-auto navbar-nav nav-pills">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="/properties" class="nav-link">Properties</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="p-2 nav-item">
                                <a class="text-white rounded-lg nav-link btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="p-2 nav-item">
                                    <a class="text-white rounded-lg nav-link btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <div class="d-flex flex-column h-100">
            <!-- FOOTER -->
            <footer class="flex-shrink-0 py-4 w-100">
                <div class="container py-4">
                    <div class="row gy-4 gx-5">
                        <div class="col-lg-4 col-md-6">
                            <h5 class="text-white h1">UNIQUEP.</h5>
                            <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <p class="mb-0 small text-muted">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <h5 class="mb-3 text-white">Quick links</h5>
                            <ul class="list-unstyled text-muted">
                                <li><a href="/">Home</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/properties">Properties</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <h5 class="mb-3 text-white">Useful links</h5>
                            <ul class="list-unstyled text-muted">
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Get started</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h5 class="mb-3 text-white">Newsletter</h5>
                            <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <form action="#">
                                <div class="mb-3 input-group">
                                    <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>
