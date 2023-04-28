@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Cart </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area start -->
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <h3 class="page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Unit Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($foods as $food)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ asset('images/' . $food->image) }}"
                                                        class="img-thumbnail img-fluid" height="150px" width="150px"
                                                        alt="img"></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $food->title }}</a></td>
                                            <td class="product-price-cart"><span class="amount">${{ $food->price }}</span>
                                            </td>
                                            <td class="product-quantity">
                                                <form action="{{ route('User.Update.Cart.Item', ['id' => $food->id]) }}"
                                                    method='POST'>
                                                    @csrf
                                                    <div class="d-flex">
                                                        <input type="number" name="qty" value="{{ $food->qty }}"
                                                            style="width:100px;" class="bg-transparent" min="1">
                                                        <button type="submit">
                                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                {{-- <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="2">
                                            </div> --}}
                                            </td>
                                            <td class="product-subtotal">${{ $food->total_price }}</td>
                                            <td class="product-remove">
                                                <a href="{{ route('User.Delete.Cart.Item', ['id' => $food->id]) }}"
                                                    class="btn btn-danger text-white"><i class="fa fa-times"></i>Del</a>
                                                <a href="{{ route('User.Remove.Extera.Topin', ['id' => $food->id]) }}"
                                                    class="btn btn-sm btn-warning text-white">RemoveTopin</a>
                                                {{-- <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="fa fa-times"></i></a> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <h4>No Item in cart</h4>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{ route('Welcome.All.Products') }}">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Enter Your address to take delivery</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <div class="tax-select-wrapper">
                                        <form action="{{ route('Store.Address') }}" method="POST">
                                            @csrf
                                            <div class="tax-select">
                                                <label>
                                                    Type Address Down here
                                                </label>
                                                <input type="text" name="address">
                                            </div>
                                            <button class="cart-btn-2" type="submit">Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total products Quantity <span>{{ totalCartQty() }}</span></h5>
                                <h4 class="grand-totall-title">Grand Total <span>${{ orderTotalPrice() }}</span></h4>
                                <form action="{{ route('User.Store.Order') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-warning text-white">Order Now!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

