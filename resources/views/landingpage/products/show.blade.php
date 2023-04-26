@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('Welcome') }}">Home</a></li>
                    <li class="active">Product Details </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-img">
                        <img class="zoompro" src="{{ asset('images/' . $food->image) }}"
                            data-zoom-image="{{ asset('images/' . $food->image) }}" alt="zoom" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h4>{{ $food->name }}</h4>
                        <div class="rating-review">
                            <div class="pro-dec-rating">
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline"></i>
                            </div>
                            <div class="pro-dec-review">
                                <ul>
                                    <li>32 Reviews </li>
                                    <li> Add Your Reviews</li>
                                </ul>
                            </div>
                        </div>
                        <span>${{ $food->price }}</span>
                        <div class="in-stock">
                            <p>Available: <span>In stock</span></p>
                        </div>
                        <p>{{ $food->des }}</p>
                        <div class="pro-dec-feature">
                            <label for="">Extera Topin:</label>
                            <select name="extera[]" class="livesearch" multiple style="width: 250px;">
                                <option value="Cheese">Cheese</option>
                                <option value="Lettuce">Lettuce</option>
                                <option value="Tomato">Tomato</option>
                                <option value="Onion">Onion</option>
                                <option value="Cilantro">Cilantro</option>
                                <option value="Jalapeno">Jalapeno</option>
                                <option value="Pickles">Pickles</option>
                                <option value="Black Olives">Black Olives</option>
                                <option value="Green Olives">Green Olives</option>
                                <option value="Guancamole">Guancamole</option>
                                <option value="Sour Cream">Sour Cream</option>
                            </select>
                        </div>
                        <div class="pro-details-cart-wrap d-flex align-items-center">
                            <div class="product-quantity m-2">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" min="1">
                                </div>
                            </div>
                            <div class="shop-list-cart-wishlist">
                                <form action="{{ route('User.Add.To.Cart',['id'=>$food->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="ion-android-cart"></i> Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="pro-dec-categories">
                            <ul>
                                <li class="categories-title">Categories:</li>
                                <li><a href="#">Fast Foods,</a></li>
                                <li><a href="#"> Rich Foods, </a></li>
                                <li><a href="#">Custom Orders,</a></li>
                                <li><a href="#">Home Decor,</a></li>
                                <li><a href="#">Weddings, </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
