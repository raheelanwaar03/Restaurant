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
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

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
                                        <li class="dropdown has-mega-menu"><a href="menu-list.html">Menus</a>
                                            <ul>
                                                <li>
                                                    <div class="mega-menu">
                                                        <div class="menu-inner">
                                                            <div class="auto-container">
                                                                <div class="row clearfix">
                                                                    <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                        <div class="image"><a
                                                                                href="menu-list-1.html"><img
                                                                                    src="{{ asset('assets/images/resource/menu-image-1.jpg') }}"
                                                                                    alt=""></a></div>
                                                                        <div class="title"><a
                                                                                href="menu-list-1.html">Menu list 1</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                        <div class="image"><a
                                                                                href="menu-list-2.html"><img
                                                                                    src="{{ asset('assets/images/resource/menu-image-2.jpg') }}"
                                                                                    alt=""></a></div>
                                                                        <div class="title"><a
                                                                                href="menu-list-2.html">Menu list 2</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                        <div class="image"><a
                                                                                href="menu-list-3.html"><img
                                                                                    src="{{ asset('assets/images/resource/menu-image-3.jpg') }}"
                                                                                    alt=""></a></div>
                                                                        <div class="title"><a
                                                                                href="menu-list-3.html">Menu list 3</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                        <div class="image"><a
                                                                                href="menu-list-4.html"><img
                                                                                    src="{{ asset('assets/images/resource/menu-image-4.jpg') }}"
                                                                                    alt=""></a></div>
                                                                        <div class="title"><a
                                                                                href="menu-list-4.html">Menu list 4</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('Welcome.About-Us') }}">About Us</a></li>
                                        <li><a href="{{ route('User.Dashboard') }}">Dashboard</a></li>
                                        <li class="dropdown"><a href="#">Authentication</a>
                                            <ul>
                                                @if (auth()->user())
                                                    <li><a href="{{ route('User.Dashboard') }}">Dashboard</a></li>
                                                @else
                                                    <li><a href="{{ route('login') }}">Login</a></li>
                                                    <li><a href="{{ route('register') }}">Register</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('Welcome.Contact-Us') }}">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                            <!--Nav Outer End-->

                            <div class="links-box clearfix">
                                <div class="link link-btn">
                                    <a href="{{ route('Welcome.Find.Table') }}"
                                        class="theme-btn btn-style-one clearfix">
                                        <span class="btn-wrap">
                                            <span class="text-one">find a table</span>
                                            <span class="text-two">find a table</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="link info-toggler">
                                    <button class="info-btn">
                                        <span class="hamburger">
                                            <span class="top-bun"></span>
                                            <span class="meat"></span>
                                            <span class="bottom-bun"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <!-- Hidden Nav Toggler -->
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
        </header>
