<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Order your favourite food</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!-- header start -->
    <header class="header-area">
        <div class="header-top black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                        <div class="welcome-area">
                            <p>Welcome to spicymexicanfood!</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                        <div class="account-curr-lang-wrap f-right">
                            <ul class="p-2">
                                <li class="text-white">Timing: {{ env('APP_TIMING') }}</li>
                                <li class="text-white">Email: {{ env('APP_EMAIL') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                        <div class="logo">
                            <a href="{{ route('Welcome') }}">
                                <img alt="" src="{{ asset('assets/img/logo/logo.png') }}" height="100px" width="100px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                        <div class="header-middle-right f-right">
                            <div class="header-login">
                                <a href="{{ route('login') }}">
                                    <div class="header-icon-style">
                                        <i class="icon-user icons"></i>
                                    </div>
                                    <div class="login-text-content">
                                        <p><span>Sign in</span></p>
                                    </div>
                                </a>or
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                            <div class="p-4"></div>
                            <div class="header-carts ml-3">
                                <a href="{{ route('User.All.Cart.Items') }}">
                                    <div class="header-icon-style">
                                        <i class="icon-handbag icons"></i>
                                        <span class="count-style">{{ cartItems() }}</span>
                                    </div>
                                    {{-- <div class="cart-text">
                                        <span class="digit">My Cart</span>
                                        <span class="cart-digit-bold">$209.00</span>
                                    </div> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
