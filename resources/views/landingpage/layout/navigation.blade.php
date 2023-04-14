<!DOCTYPE html>
<html lang="en">
{{-- This website is design and developed by Raheel Anwaar
    Whats'up:   03149720318
    For Email : raheelanwaar05@gmail.com
--}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
    <title>{{ env('APP_NAME') }} - Online Food Ordering Website</title>

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/osahan.css" rel="stylesheet">

    <link href="assets/font/stylesheet.css" rel="stylesheet">

    <link href="assets/vendor/mdi-icons/css/materialdesignicons.min.css" rel="stylesheet">

    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid">
                </div>
            </a>

            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="mdi mdi-home-variant-outline"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="explore.html">
                    <i class="mdi mdi-grid-large"></i>
                    <span>Explore</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="favourities.html">
                    <i class="mdi mdi-bookmark-outline"></i>
                    <span>Favourities</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="orders.html">
                    <i class="mdi mdi-book-open"></i>
                    <span>Orders</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex" href="messages.html">
                    <i class="mdi mdi-message-text-outline mr-2"></i>
                    <span>Messages</span>
                    <span class="rounded-circle bg-white text-primary ml-auto px-2 py-1">2</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="settings.html">
                    <i class="mdi mdi-cog"></i>
                    <span>Settings</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Extra Pages</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pages:</h6>
                        <a class="collapse-item" href="detail.html">Details</a>
                        <a class="collapse-item" href="listing.html">Listing</a>
                        <a class="collapse-item" href="messages.html">Messages</a>
                        <a class="collapse-item" href="search.html">Search</a>
                        <a class="collapse-item" href="buttons.html">Components</a>
                        <a class="collapse-item" href="404.html">Page Not Found</a>
                        <h6 class="collapse-header">Account:</h6>
                        <a class="collapse-item" href="signin.html">Signin</a>
                        <a class="collapse-item" href="signup.html">Signup</a>
                        <a class="collapse-item" href="forgot.html">Forgot Password</a>
                    </div>
                </div>
            </li>
            <div class="d-none d-md-block">
                <div class="user d-flex align-items-center p-3">
                    <div class="pr-3"><i class="mdi mdi-account-circle-outline text-white h3 mb-0"></i></div>
                    <div>
                        @if (auth()->user())
                            <p class="mb-0 text-white">{{ auth()->user()->name }}</p>
                        @else
                            <p class="mb-0 text-white">User name</p>
                        @endif
                    </div>
                </div>
            </div>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>


        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav
                    class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm osahan-nav-top">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="mdi mdi-magnify"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-2 osahan-t-loc">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-toggle="modal"
                                data-target="#companyAddress">
                                <span class="mdi mdi-crosshairs-gps"></span><span class="ml-2">Company Address: {{env('APP_ADDRESS')}}</span>
                            </a>
                        </li>
                    </ul>

                    <div class="ml-auto">
                        <a href="search.html">
                            <form class="d-none d-sm-inline-block form-inline mx-2 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light" placeholder="Search for..."
                                        aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="mdi mdi-magnify"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#cartModal"><i
                                class="mdi mdi-shopping-outline"></i></a>
                    </div>
                </nav>
