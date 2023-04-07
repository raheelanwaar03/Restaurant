<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} - Restaurant With Best Food</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">


</head>

<body>
    <div class="page-wrapper">

        <!-- Main Header-->
        <header class="main-header header-down">
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="top-left clearfix">
                            <ul class="top-info clearfix">
                                <li><i class="icon far fa-map-marker-alt"></i> Restaurant St, Delicious City, London
                                    9578, UK</li>
                                <li><i class="icon far fa-clock"></i> Daily : 8.00 am to 10.00 pm</li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <ul class="top-info clearfix">
                                <li><a href="tel:+11234567890"><i class="icon far fa-phone"></i> +1 123 456 7890</a>
                                </li>
                                <li><a href="mailto:booking@restaurant.com"><i class="icon far fa-envelope"></i>
                                        booking@restaurant.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <!-- Main Box -->
                    <div class="main-box clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('Welcome') }}" title="{{ env('APP_NAME') }}"><img
                                        src="{{ asset('assets/images/logo.png') }}" alt=""
                                        title="{{ env('APP_NAME') }}"></a></div>
                        </div>

                        <div class="nav-box clearfix">
                            <!--Nav Outer-->
                            <div class="nav-outer clearfix">
                                <nav class="main-menu">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{ route('Welcome') }}">Home</a>
                                        </li>
                                        <li class="dropdown has-mega-menu"><a
                                                href="{{ route('Welcome.All.Categories') }}">Menus</a>
                                            <ul>
                                                <li>
                                                    <div class="mega-menu">
                                                        <div class="menu-inner">
                                                            <div class="auto-container">
                                                                <div class="row clearfix">
                                                                    @foreach ($categorys as $category)
                                                                        <div
                                                                            class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                            <div class="image"><a
                                                                                    href="{{ route('Welcome.Category', ['slug' => $category->slug]) }}"><img
                                                                                        src="{{ asset('images/' . $category->image) }}"
                                                                                        alt="{{ $category->image }}"></a>
                                                                            </div>
                                                                            <div class="title"><a
                                                                                    href="#">{{ $category->title }}</a>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('Welcome.About-Us') }}">About Us</a></li>
                                        @if (auth()->user())
                                            <li><a href="{{ route('User.All.Orders') }}">All Orders</a></li>
                                        @else
                                            <li class="dropdown"><a href="#">Authentication</a>
                                                <ul>
                                                    <li><a href="{{ route('login') }}">Login</a></li>
                                                    <li><a href="{{ route('register') }}">Register</a></li>
                                                </ul>
                                        @endif
                                        </li>
                                        <li><a href="{{ route('Welcome.Contact-Us') }}">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                            <!--Nav Outer End-->
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="links-box clearfix">
                                    <div class="link link-btn mr-3">
                                        <a href="{{ route('Welcome.Find.Table') }}"
                                            class="theme-btn btn-style-one clearfix">
                                            <span class="btn-wrap">
                                                <span class="text-one">find a table</span>
                                                <span class="text-two">find a table</span>
                                            </span>
                                        </a>
                                        <div class="link link-btn ml-3">
                                            <a href="{{ route('User.All.Cart.Items') }}"
                                                class="theme-btn btn-style-one clearfix text-white">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Cart Items( {{ cartItems() }} )</span>
                                                    <span class="text-two">Cart Items( {{ cartItems() }} )</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-toggler">
                                    <button class="hidden-bar-opener">
                                        <span class="hamburger">
                                            <span class="top-bun"></span>
                                            <span class="meat"></span>
                                            <span class="bottom-bun"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="menu-backdrop"></div>

        <!-- Hidden Navigation Bar -->
        <section class="hidden-bar">
            <!-- Hidden Bar Wrapper -->
            <div class="inner-box">
                <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
                <div class="logo-box"><a href="index.html" title="Delici - Restaurants HTML Template"><img
                            src="{{ asset('assets/images/logo.png') }}" alt=""
                            title="Delici - Restaurants HTML Template"></a></div>

                <!-- .Side-menu -->
                <div class="side-menu">
                    <ul class="navigation clearfix">
                        <li class="current"><a href="{{ route('Welcome') }}">Home</a>
                        </li>
                        <li class="dropdown"><a href="#">Menus</a>
                            <ul>
                                @foreach ($categorys as $category)
                                    <li><a
                                            href="{{ route('Welcome.Category', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('Welcome.About-Us') }}">About Us</a></li>
                        @if (auth()->user())
                            <li><a href="{{ route('User.All.Orders') }}">All Orders</a></li>
                        @else
                            <li class="dropdown"><a href="#">Authentication</a>
                                <ul>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                        @endif
                        <li><a href="{{ route('Welcome.Contact-Us') }}">Contact </a></li>
                    </ul>
                </div>
                <div class="link link-btn ml-3">
                    <a href="{{ route('User.All.Cart.Items') }}"
                        class="theme-btn btn-style-one clearfix text-white">
                        <span class="btn-wrap">
                            <span class="text-one">Cart Items( {{ cartItems() }} )</span>
                            <span class="text-two">Cart Items( {{ cartItems() }} )</span>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- / Hidden Bar -->
