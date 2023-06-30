<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('assetsFront/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assetsFront/scss/style.scss')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{route('user.home')}}"><img src="{{asset('assetsFront/img/core-img/logo.png')}}" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="{{route('user.shop')}}">Dresses</a></li>
                                        <li><a href="{{route('user.shop')}}">Blouses &amp; Shirts</a></li>
                                        <li><a href="{{route('user.shop')}}">T-shirts</a></li>
                                        <li><a href="{{route('user.shop')}}">Rompers</a></li>
                                        <li><a href="{{route('user.shop')}}">Bras &amp; Panties</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="{{route('user.shop')}}">T-Shirts</a></li>
                                        <li><a href="{{route('user.shop')}}">Polo</a></li>
                                        <li><a href="{{route('user.shop')}}">Shirts</a></li>
                                        <li><a href="{{route('user.shop')}}">Jackets</a></li>
                                        <li><a href="{{route('user.shop')}}">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="{{route('user.shop')}}">Dresses</a></li>
                                        <li><a href="{{route('user.shop')}}">Shirts</a></li>
                                        <li><a href="{{route('user.shop')}}">T-shirts</a></li>
                                        <li><a href="{{route('user.shop')}}">Jackets</a></li>
                                        <li><a href="{{route('user.shop')}}">Trench</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="{{asset('assetsFront/img/bg-img/bg-6.jpg')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('user.home')}}">Home</a></li>
                                    <li><a href="{{route('user.shop')}}">Shop</a></li>
                                    <li><a href="{{route('user.product')}}">Product Details</a></li>
                                    <li><a href="{{route('user.checkout')}}">Checkout</a></li>
                                    <li><a href="{{route('user.contact')}}">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('user.contact')}}">Contact</a></li>
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                            <!-- Authentication Links -->

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="{{asset('assetsFront/img/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="{{asset('assetsFront/img/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="{{asset('assetsFront/img/core-img/bag.svg')}}" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>

