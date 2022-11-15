<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ranbron - Official website</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--TAILWIND CDN-->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>


</head>

<body>
    <!--======================= TOP BAR ======================-->

    <div class="topB">
        <div class="row topBar__container">
            <div class="col-lg-6 col-sm-6 topBar__contact">
                <div class="col-lg-6 xpz">
                    <div class="email-icon">
                        <a href="mailto:bamidelebenjamin@gmail.com">
                            <i class="fa-solid fa-envelope"></i>
                            <p>example@ranbron.com</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="phone-icon">
                        <a href="tel:+234805642425">
                            <i class="fa-solid fa-phone"></i>
                            <p>08053642425</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 topBar__social-icons">
                <div class="top social-icons">
                    <a href=""><i class="fa-brands fa-facebook"></i></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></i></a>
                </div>
            </div>
        </div>
    </div>


    <!--==========================NAV BAR CONTAINER =========================-->

    <div class="container navBar__container">

        <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container-fluid">
                <a class="navbar-brand navBar-logo" href="/"><img src="{{ asset('images/ranlogo.jpg')}}" class="img-fluid" alt="Logo"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center navbar " id="navbarSupportedContent">
                    <ul class="navbar-nav auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="{{Request::routeIs('welcome') ? 'nav-link active' : 'nav-link'}}" href="{{route('welcome')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{Request::routeIs('about') ? 'nav-link active' : 'nav-link'}}" href="{{route('about')}}">About</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="{{Request::routeIs('services') ? 'nav-link active' : 'nav-link'}}" href="{{route('services')}}">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{Request::routeIs('blog') ? 'nav-link active' : 'nav-link'}}" href="{{route('blog')}}">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{Request::routeIs('contact') ? 'nav-link active' : 'nav-link'}}" href="{{route('contact')}}">Contact</a>
                        </li>


                        <li class="nav-item">
                            <a class="{{Request::routeIs('register') ? 'nav-link active' : 'nav-link'}}" href="{{route('register')}}">Register</a>
                        </li>


                        <li class="nav-item">
                            <a class="{{Request::routeIs('login') ? 'nav-link active' : 'nav-link'}}" href="{{route('login')}}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>



    <!--==========================END NAV BAR CONTAINER =========================-->
