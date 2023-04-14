@extends('landingpage.layout.app')
@section('content')
    <div class="container-fluid">

        <div class="d-flex align-items-center justify-content-between mb-3 mt-2">
            <h5 class="mb-0">Explore categories</h5>
            <a href="listing.html" class="small font-weight-bold text-dark">See all <i
                    class="mdi mdi-chevron-right mr-2"></i></a>
        </div>

        <div class="row">

            <a href="listing.html" class="text-decoration-none col-xl-2 col-md-4 mb-4">
                <div class="rounded py-4 bg-white shadow-sm text-center">
                    <i class="mdi mdi-fire bg-danger text-white osahan-icon mx-auto rounded-pill"></i>
                    <h6 class="mb-1 mt-3">Popular</h6>
                    <p class="mb-0 small">286+ options</p>
                </div>
            </a>

            <a href="listing.html" class="text-decoration-none col-xl-2 col-md-4 mb-4">
                <div class="rounded py-4 bg-white shadow-sm text-center">
                    <i class="mdi mdi-motorbike bg-primary text-white osahan-icon mx-auto rounded-pill"></i>
                    <h6 class="mb-1 mt-3">Fast Delivery</h6>
                    <p class="mb-0 small">1,843+ options</p>
                </div>
            </a>

            <a href="listing.html" class="text-decoration-none col-xl-2 col-md-4 mb-4">
                <div class="rounded py-4 bg-white shadow-sm text-center">
                    <i class="mdi mdi-wallet-outline bg-warning text-white osahan-icon mx-auto rounded-pill"></i>
                    <h6 class="mb-1 mt-3">High class</h6>
                    <p class="mb-0 small">25+ options</p>
                </div>
            </a>

            <a href="listing.html" class="text-decoration-none col-xl-2 col-md-4 mb-4">
                <div class="rounded py-4 bg-white shadow-sm text-center">
                    <i class="mdi mdi-silverware-variant bg-danger text-white osahan-icon mx-auto rounded-pill"></i>
                    <h6 class="mb-1 mt-3">Dine in</h6>
                    <p class="mb-0 small">182+ options</p>
                </div>
            </a>

            <a href="listing.html" class="text-decoration-none col-xl-2 col-md-4 mb-4">
                <div class="rounded py-4 bg-white shadow-sm text-center">
                    <i class="mdi mdi-home-variant-outline bg-primary text-white osahan-icon mx-auto rounded-pill"></i>
                    <h6 class="mb-1 mt-3">Pick up</h6>
                    <p class="mb-0 small">3,548+ options</p>
                </div>
            </a>

            <a href="listing.html" class="text-decoration-none col-xl-2 col-md-4 mb-4">
                <div class="rounded py-4 bg-white shadow-sm text-center">
                    <i class="mdi mdi-map-outline bg-warning text-white osahan-icon mx-auto rounded-pill"></i>
                    <h6 class="mb-1 mt-3">Nearest</h6>
                    <p class="mb-0 small">44+ options</p>
                </div>
            </a>
        </div>

        <div class="d-flex align-items-center justify-content-between mb-3 mt-2">
            <h5 class="mb-0">Featured restaurants</h5>
            <a href="listing.html" class="small font-weight-bold text-dark">See all <i
                    class="mdi mdi-chevron-right mr-2"></i></a>
        </div>

        <div class="row">

            @forelse ($categorys as $item)
            <a href="#" class="text-dark text-decoration-none col-xl-4 col-lg-12 col-md-12">
                <div class="bg-white shadow-sm rounded d-flex align-items-center p-1 mb-4 osahan-list">
                    <div class="bg-light p-3 rounded">
                        <img src="{{ asset('images/'.$item->image) }}" class="img-fluid">
                    </div>
                    <div class="mx-3 py-2 w-100">
                        <p class="mb-2 text-black">{{ $item->title }}</p>
                        <p class="small mb-2">
                            <i class="mdi mdi-star text-warning mr-1"></i> <span
                                class="font-weight-bold text-dark">0.8</span> (873)
                            <i class="mdi mdi-currency-dollar ml-3"></i>starting from: 50/-
                        </p>
                    </div>
                </div>
            </a>
            @empty

            @endforelse

        </div>

        <div class="d-flex align-items-center justify-content-between mb-3 mt-2">
            <h5 class="mb-0">Asian food</h5>
            <a href="listing.html" class="small font-weight-bold text-dark">See all <i
                    class="mdi mdi-chevron-right mr-2"></i></a>
        </div>

        <div class="row">

            <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                data-target="#myitemsModal">
                <img src="{{ asset('assets/img/food1.jpg') }}" class="img-fluid rounded">
                <div class="d-flex align-items-center mt-3">
                    <p class="text-black h6 m-0">Spicy Na Thai Pizza</p>
                    <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i>
                        Free
                        delivery</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                data-target="#myitemsModal">
                <img src="{{ asset('assets/img/food2.jpg') }}" class="img-fluid rounded">
                <div class="d-flex align-items-center mt-3">
                    <p class="text-black h6 m-0">Special Burger</p>
                    <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i>
                        Free
                        delivery</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                data-target="#myitemsModal">
                <img src="{{ asset('assets/img/food3.jpg') }}" class="img-fluid rounded">
                <div class="d-flex align-items-center mt-3">
                    <p class="text-black h6 m-0">Tandoori</p>
                    <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i>
                        Free
                        delivery</span>
                </div>
            </a>
        </div>

        <div class="row">

            <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                data-target="#myitemsModal">
                <img src="{{ asset('assets/img/food4.jpg') }}" class="img-fluid rounded">
                <div class="d-flex align-items-center mt-3">
                    <p class="text-black h6 m-0">Special Thali</p>
                    <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i>
                        Free
                        delivery</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                data-target="#myitemsModal">
                <img src="{{ asset('assets/img/food5.jpg') }}" class="img-fluid rounded">
                <div class="d-flex align-items-center mt-3">
                    <p class="text-black h6 m-0">Diet Food</p>
                    <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i>
                        Free
                        delivery</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                data-target="#myitemsModal">
                <img src="{{ asset('assets/img/food6.jpg') }}" class="img-fluid rounded">
                <div class="d-flex align-items-center mt-3">
                    <p class="text-black h6 m-0">Sandwich</p>
                    <span class="badge badge-light ml-auto"><i class="mdi mdi-truck-fast-outline"></i>
                        Free
                        delivery</span>
                </div>
            </a>
        </div>
    </div>

    </div>
@endsection
