@extends('landingpage.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="banner-image p-0 mt-n4 mx-n4 position-relative">
            <div class="position-absolute heart-icon">
                <a href="#" class="bg-white text-decoration-none rounded p-2 text-dark font-weight-bold"><i
                        class="far fa-heart"></i></a>
            </div>
            <img src="img/banner.jpg" class="img-fluid shadow">
        </div>
        <div class="mt-n5 bg-white p-3 mb-4 rounded shadow position-relative">
            <div class="osahan-single-top-info d-flex">
                <img src="img/king-logo.png" class="img-fluid border p-2 mb-auto rounded brand-logo shadow-sm">
                <div class="ml-3">
                    <h3 class="mb-0 font-weight-bold">Burger King <small><i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> American, Fast Food</small></h3>
                    <div class="restaurant-detail mt-2 mb-3">
                        <span class="badge badge-light"><i class="mdi mdi-truck-fast-outline"></i> Free delivery</span>
                        <span class="badge badge-success"><i class="mdi mdi-ticket-percent-outline"></i> 55% OFF</span>
                        <span class="badge badge-info"><i class="mdi mdi-clock-outline"></i> Opens at 12 PM</span>
                    </div>
                    <p class="text-muted p-0 mt-2 mb-2">It is one of the most iconic and well-recognizable fast food
                        restaurants out there which offers really amazing food and drinks.</p>
                    <p class="mb-0 small">
                        <i class="mdi mdi-star text-warning"></i> <span class="font-weight-bold text-dark">4.8</span> - 500+
                        Ratings
                        <i class="fas fa-hand-holding-usd text-dark ml-3 mr-2"></i> 350 Cost for two
                        <i class="fas fa-map-marked-alt text-dark ml-3 mr-2"></i>4.3 km (Irving St, San Francisco,
                        California)
                    </p>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs border-0 mb-4" id="myTab" role="tablist">
            <li class="nav-item mr-2" role="presentation">
                <a class="nav-link active border-0 btn btn-light" id="popular-tab" data-toggle="tab" href="#popular"
                    role="tab" aria-controls="popular" aria-selected="true">Popular</a>
            </li>
            <li class="nav-item mx-2" role="presentation">
                <a class="nav-link border-0 btn btn-light" id="burger-tab" data-toggle="tab" href="#burger" role="tab"
                    aria-controls="burger" aria-selected="false">Burger</a>
            </li>
            <li class="nav-item mx-2" role="presentation">
                <a class="nav-link border-0 btn btn-light" id="fries-tab" data-toggle="tab" href="#fries" role="tab"
                    aria-controls="fries" aria-selected="false">Fries</a>
            </li>
            <li class="nav-item mx-2" role="presentation">
                <a class="nav-link border-0 btn btn-light" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab"
                    aria-controls="drinks" aria-selected="true">Drinks</a>
            </li>
            <li class="nav-item mx-2" role="presentation">
                <a class="nav-link border-0 btn btn-light" id="nuggets-tab" data-toggle="tab" href="#nuggets" role="tab"
                    aria-controls="nuggets" aria-selected="true">Nuggets</a>
            </li>
            <li class="nav-item ml-2" role="presentation">
                <a class="nav-link border-0 btn btn-light" id="wraps-tab" data-toggle="tab" href="#wraps" role="tab"
                    aria-controls="wraps" aria-selected="true">Wraps</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">

                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food5.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Diet Food</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food6.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Sandwich</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>

                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food1.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Spicy Na Thai Pizza</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food2.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Burger</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3 mt-2">
                    <h5 class="mb-0">Popular food</h5>
                    <a href="#" class="small text-dark bg-white shadow-sm px-2 py-1 rounded"><i
                            class="fas fa-box-open mr-2"></i>Today <i class="ml-1 mdi mdi-chevron-down"></i></a>
                </div>
                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food1.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Spicy Na Thai Pizza</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food2.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Burger</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food5.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Diet Food</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food6.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Sandwich</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="burger" role="tabpanel" aria-labelledby="burger-tab">

                <div class="row">
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>

                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food2.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Burger</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food5.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Diet Food</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food6.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Sandwich</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="fries" role="tabpanel" aria-labelledby="fries-tab">


                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food1.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Spicy Na Thai Pizza</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food2.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Burger</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>

                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food5.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Diet Food</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food6.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Sandwich</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>

                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food1.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Spicy Na Thai Pizza</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food2.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Burger</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-lg-3 col-md-6 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">


                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food1.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Spicy Na Thai Pizza</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food2.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Burger</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food3.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Tandoori</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>

                <div class="row">
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food6.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Sandwich</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="nuggets" role="tabpanel" aria-labelledby="nuggets-tab">


                <div class="row">

                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food4.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Special Thali</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food5.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Diet Food</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food6.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Sandwich</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="wraps" role="tabpanel" aria-labelledby="wraps-tab">


                <div class="row">
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food5.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Diet Food</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                    <a href="#" class="text-decoration-none text-dark col-xl-4 col-md-12 mb-4" data-toggle="modal"
                        data-target="#myitemsModal">
                        <img src="img/food6.jpg" class="img-fluid rounded">
                        <div class="d-flex align-items-center mt-3 mb-2">
                            <p class="text-black h6 m-0">Sandwich</p>
                            <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i> Free
                                delivery</span>
                        </div>
                        <p class="small mb-2"><i class="mdi mdi-star text-warning"></i> <span
                                class="font-weight-bold text-dark ml-1">4.8</span>(1,873) <i
                                class="mdi mdi-silverware-fork-knife ml-2 mr-1"></i> Burger <i
                                class="mdi mdi-motorbike ml-2 mr-2"></i>45
                            - 55 min
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
