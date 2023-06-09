<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Login / Registration</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ url('css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <div id="undefined-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 56px;">
            <header class="default-header" style="width: 1349px; position: fixed; top: 0px;">
                <header class="default-header">
                    <nav class="navbar navbar-expand-lg  navbar-light">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ url('img/logo1.png') }}" alt="" width=200px>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="text-white lnr lnr-menu"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-end align-items-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/service') }}">Service</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>

                                    <!-- Dropdown -->
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="navbardrop"
                                            data-toggle="dropdown">
                                            CRUD
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('/admin/category/') }}">Category</a>
                                            <a class="dropdown-item" href="{{ url('/admin/products/') }}">Product</a>
                                        </div>
                                    </li>

                                    <!-- Dropdown -->
                                    <li class="dropdown">
                                        @guest
                                            <a class="dropdown-toggle" href="#" id="navbardrop"
                                                data-toggle="dropdown">
                                                Login
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('login') }}">Login</a>
                                                <a class="dropdown-item" href="{{ url('register') }}">Register</a>
                                            </div>
                                        @else
                                            <a class="dropdown-toggle" href="#" id="navbardrop"
                                                data-toggle="dropdown">
                                                {{ Auth::user()->name }}
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        @endguest
                                    </li>
                                </ul>
                            </div>

                        </div>
        </div>
        </nav>
        </header>
        <!-- End Header Area -->
    </section>
