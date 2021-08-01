<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>@yield('title')</title>

    @yield('facebookgraph')
        
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

</head>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=365301630151053&autoLogAppEvents=1"></script>



    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ route('ChicotekaProducciones') }}"><img src="{{ asset('assets/img/core-img/chicoteka-en-lima.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <!--li class="active"><a href="index.html">Inicio</a></li-->
 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('posts.index') }}">Publicaciones</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tags.index') }}">Etiquetas</a>
                            </li>

                            <li><a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown">
                                    <li>
                                    	<a href="{{ route('logout') }}"
                                    	onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                		</a>
                                		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    	</form>
                                	</li>
                                </ul>
                            </li>
                        @endguest

                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{ asset('assets/img/bg-img/chicoteka.jpg') }}); ">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Blog Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('chicotecas') }}">Ver Blog</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


    <!-- Blog Area Start -->
    <section class="confer-blog-details-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Details Area -->
                
                    	@yield('content')
                        <!-- Post Content -->
                        
                        
                
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- Footer Area Start -->

    @include('includes.footer')
