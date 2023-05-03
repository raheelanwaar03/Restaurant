<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Order your favourite food online</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
</head>

<body>
    <!-- header start -->
    <header class="header-area">
        <div class="header-top black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                        <div class="welcome-area">
                            <p>Welcome to {{ env('APP_NAME') }}!</p>
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
                                <img alt="" src="{{ asset('assets/img/logo/logo.png') }}" height="100px"
                                    width="100px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                        <div class="header-middle-right f-right">
                            <div class="header-login">
                                @if (auth()->user())
                                    <a href="#">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons"></i>
                                        </div>
                                        <div class="login-text-content">
                                            <p><span>{{ auth()->user()->name }}</span></p>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons"></i>
                                        </div>
                                        <div class="login-text-content">
                                            <p>Register <br> or <span>Sign in</span></p>
                                        </div>
                                @endif
                            </div>
                            <div class="header-wishlist">
                                @if (auth()->user())
                                    <a href="#">
                                        <div class="header-icon-style">
                                        </div>
                                        <div class="wishlist-text">
                                            {{-- <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button class="btn btn-primary">Logout</button>
                                            </form> --}}
                                        </div>
                                    </a>
                                @endif
                            </div>
                            <div class="header-carts">
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
        <div class="header-bottom transparent-bar black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('Welcome') }}">home</a>
                                    </li>
                                    <li><a href="{{ route('Welcome.Find.Table') }}">Book a Table</a></li>
                                    <li class="mega-menu-position top-hover"><a
                                            href="{{ route('Welcome.All.Products') }}">Food</a>
                                    </li>
                                    <li class="top-hover"><a href="#">categories
                                            <i class="ion-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('Welcome.All.Categories') }}">All Categories</a>
                                            </li>
                                            @forelse ($categorys as $category)
                                                <li><a
                                                        href="{{ route('Welcome.Category', ['slug' => $category->slug]) }}">{{ $category->title }}
                                                    </a></li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('Welcome.About-Us') }}">about</a></li>
                                    <li><a href="{{ route('Welcome.Contact-Us') }}">contact us</a></li>
                                    <li><a href="{{ route('User.All.Orders') }}">My Order</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area-start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow" id="nav">
                                    <li><a href="{{ route('Welcome') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('Welcome.Find.Table') }}">Book a Table</a></li>
                                    <li><a href="{{ route('Welcome.All.Products') }}">Food</a>
                                    </li>
                                    <li><a href="{{ route('Welcome.All.Categories') }}">Categories</a>
                                        <ul>
                                            @forelse ($categorys as $category)
                                                <li><a
                                                        href="{{ route('Welcome.Category', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
                                                </li>
                                            @empty
                                                <h3>No category avaliable</h3>
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('Welcome.Contact-Us') }}">Contact us</a></li>
                                    <li><a href="{{ route('Welcome.About-Us') }}">About Us</a></li>
                                    <li><a href="{{ route('User.All.Orders') }}">My Orders</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area-end -->
    </header>
