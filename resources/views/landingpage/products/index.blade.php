@extends('auth.layout.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop List Style </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-page-area pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="banner-area pb-30">
                        <a href="product-details.html"><img alt="" src="{{asset('assets/img/banner/banner-49.jpg')}}"></a>
                    </div>
                    <div class="grid-list-product-wrapper">
                        <div class="product-list product-view pb-20">
                            <div class="row">
                                <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i>
                                                        Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i class="ion-android-cart"></i>
                                                        Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$200.00</span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$90.00</span>
                                                <span class="product-price-old">$100.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-4.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$60.00</span>
                                                <span class="product-price-old">$70.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-6.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$190.00</span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-7.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$150.00</span>
                                                <span class="product-price-old">$170.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-8.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-9.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$180.00</span>
                                                <span class="product-price-old">$190.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-10.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$70.00</span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-width pro-list-none col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/product/product-2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <a title="Add Tto Cart" href="#"><i
                                                            class="ion-android-cart"></i> Add Tto Cart</a>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$200.00</span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="product-details.html">PRODUCTS NAME HERE </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>$100.00</span>
                                                <span class="product-price-old">$120.00 </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor
                                                labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            <div class="shop-list-cart-wishlist">
                                                <a href="#" title="Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                <a href="#" title="Add To Cart"><i
                                                        class="ion-android-cart"></i></a>
                                                <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                    title="Quick View">
                                                    <i class="ion-android-open"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-total-pages">
                            <div class="pagination-style">
                                <ul>
                                    <li><a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i>
                                            Prev</a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="total-pages">
                                <p>Showing 1 - 20 of 30 results </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
