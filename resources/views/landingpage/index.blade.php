{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="text-center">
                        <h1>
                            Web is in UnderConsturction
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> --}}

 @extends('landingpage.layout.app')

@section('content')
    <div class="slider-area-2">
        <div class="slider-active owl-dot-style owl-carousel">
            <div class="single-slider pt-210 pb-220 bg-img"
                style="background-image:url({{ 'assets/img/slider/slider-3.jpg' }});">
                <div class="container">
                    <div class="slider-content slider-animated-2 text-center">
                        <h1 class="animated">Order Your Favourite Food</h1>
                        <h3 class="animated">Fresh Heathy and Organic.</h3>
                        <div class="slider-btn mt-90">
                            <a class="animated" href="{{ route('Welcome.All.Products') }}">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider pt-210 pb-220 bg-img"
                style="background-image:url({{ 'assets/img/slider/slider-3.jpg' }});">
                <div class="container">
                    <div class="slider-content slider-animated-2 text-center">
                        <h1 class="animated">Order Your Favourite Food</h1>
                        <h3 class="animated">Fresh Heathy and Organic.</h3>
                        <div class="slider-btn mt-90">
                            <a class="animated" href="{{ route('Welcome.All.Products') }}">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pt-95 pb-70">
        <div class="custom-container">
            <div class="product-tab-list-wrap text-center mb-40 yellow-color">
                <div class="product-tab-list nav">
                    <a class="active" href="#tab1" data-bs-toggle="tab">
                        <h4>All Food Items</h4>
                    </a>
                </div>
                <p>Our food is simply the best. We use only the finest ingredients, prepared with skill and passion by our
                    expert chefs. Every dish is a work of art, bursting with flavor and aroma, and served with care and
                    attention. Come and experience the very best in food and hospitality.</p>
            </div>
            <div class="tab-content jump yellow-color">
                <div id="tab1" class="tab-pane active">
                    <div class="row">
                        @forelse ($foods as $food)
                        <div class="custom-col-5">
                            <div class="product-wrapper mb-25">
                                <div class="product-img">
                                    <a href="{{ route('Welcome.Show.Product', ['slug' => $food->slug]) }}">
                                        <img src="{{ asset('images/' . $food->image) }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <div class="pro-action-left">
                                            <form action="{{ route('User.Add.To.Cart', ['id' => $food->id]) }}"
                                                method="POST">
                                                @csrf
                                                <button class="cartBtn bg-transparent" type="submit"
                                                    title="Add To Cart"><i class="ion-android-cart"></i> Add to
                                                    Cart</button>

                                        </div>
                                        <div class="pro-action-right">
                                            <input type="number" name="qty" value="1" min="1"
                                                class="bg-transparent" style="width:50px;height:30px">
                                            <a title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#{{ $food->slug }}"><i
                                                    class="ion-android-open"></i></a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a
                                            href="{{ route('Welcome.Show.Product', ['slug' => $food->slug]) }}">{{ $food->title }}</a>
                                    </h4>
                                    <div class="product-price-wrapper">
                                        <span>${{ $food->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h4>No food added yet</h4>
                        @endforelse
                        <div class="">
                            {{ $foods->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area row-col-decrease pb-75 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="hover-style">
                            <a href="#"><img src="{{ 'assets/img/banner/banner-7.jpg' }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <div class="hover-style">
                            <a href="#"><img src="{{ 'assets/img/banner/banner-8.jpg' }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="best-food-area pb-95">
        <div class="custom-container">
            <div class="row">
                <div class="best-food-width-1">
                    <div class="single-banner">
                        <div class="hover-style">
                            <a href="#"><img src="{{ 'assets/img/banner/banner-5.jpg' }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="best-food-width-2">
                    <div class="product-top-bar section-border mb-25 yellow-color">
                        <div class="section-title-wrap">
                            <h3 class="section-title section-bg-white">Best Food In Our Shop</h3>
                        </div>
                        <div class="product-tab-list-2 nav section-bg-white">
                            <a class="active" href="#tab4" data-bs-toggle="tab">
                                <h4>Our Best Food </h4>
                            </a>
                        </div>
                    </div>
                    <div class="tab-content jump yellow-color">
                        <div id="tab4" class="tab-pane active">
                            <div class="product-slider-active owl-carousel product-nav">
                                @forelse ($foods as $food)
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('images/' . $food->image) }}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-action-left">
                                                    <form action="{{ route('User.Add.To.Cart', ['id' => $food->id]) }}">
                                                        @csrf
                                                        <button type="submit" class="cartBtn bg-transparent"
                                                            title="Add To Cart"><i class="ion-android-cart"></i>Add To
                                                            Cart</button>
                                                    </form>
                                                </div>
                                                <div class="pro-action-right">
                                                    <a title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#{{ $food->slug }}" href="#"><i
                                                            class="ion-android-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4>
                                                <a href="product-details.html">{{ $food->title }} </a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>${{ $food->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h4>NO Food Added Yet</h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="best-food-width-1 mrg-small-35">
                    <div class="single-banner">
                        <div class="hover-style">
                            <a href="#"><img src="{{ 'assets/img/banner/banner-6.jpg' }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area">
        <div class="container">
            <div class="discount-overlay bg-img pt-130 pb-130"
                style="background-image:url({{ 'assets/img/banner/banner-4.jpg' }});">
                <div class="discount-content text-center">
                    <h3>It’s Time To Start <br>Your Own Revolution By Laurent</h3>
                    <p>Exclusive Offer -10% Off This Week</p>
                    <div class="banner-btn">
                        <a href="{{ route('Welcome.All.Products') }}">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pt-100 pb-100">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <img alt="" src="{{ 'assets/img/brand-logo/logo-1.png' }}">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="{{ 'assets/img/brand-logo/logo-2.png' }}">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="{{ 'assets/img/brand-logo/logo-3.png' }}">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="{{ 'assets/img/brand-logo/logo-4.png' }}">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="{{ 'assets/img/brand-logo/logo-5.png' }}">
                </div>
                <div class="single-brand-logo">
                    <img alt="" src="{{ 'assets/img/brand-logo/logo-2.png' }}">
                </div>
            </div>
        </div>
    </div>
@endsection
