@extends('layouts.app')

@section('content')
    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/images/background/banner-image-4.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>our menu</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h1><span>All Cart Items</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Contact Info Section-->
    <section class="contact-page">
        <div class="left-bg"><img src="{{ asset('assets/images/background/bg-25.png') }}" alt="" title="">
        </div>
        <div class="right-bg"><img src="{{ asset('assets/images/background/bg-6.png') }}" alt="" title="">
        </div>
        <!--location Section-->
        <div class="location-center">
            <div class="container-fluid">
                <div class="cinfo-box">
                    <div class="">
                        <h4 class="text-center my-4">{{ auth()->user()->name }} Please Add Your Address To Receive Your Order <span><a href="{{ route('Add.Address') }}" class="btn btn-success">Add Address</a></span> </h2>
                    </div>
                    <div class="card">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Item Quantity</th>
                                    <th>Item Image</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($foods as $food)
                                    @csrf
                                    <tr>
                                        <td>{{ $food->title }}</td>
                                        <td>{{ $food->price }}</td>
                                        <td>
                                            <form action="{{ route('User.Update.Cart.Item', ['id' => $food->id]) }}"
                                                method='POST'>
                                                @csrf
                                                <input type="number" name="qty" value="{{ $food->qty }}"
                                                    min="1" style="width:55px;height:35px;padding:6px">
                                                <button type="submit" style="background: transparent;color:white;">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </button>
                                        </td>
                                        </form>
                                        <td>
                                            <img src="{{ asset('images/' . $food->image) }}" class="img-fluid img-thumbnail"
                                                width="90px" height="90px" alt="{{ $food->image }}">
                                        </td>
                                        <td>{{ $food->total_price }}</td>
                                        <td>
                                            <a href="{{ route('User.Delete.Cart.Item', ['id' => $food->id]) }}"
                                                class="btn btn-danger">Remove</a>
                                            <a href="{{ route('User.Store.Order', ['id' => $food->id]) }}"
                                                class="btn btn-warning text-white">Order Now</a>
                                        </td>
                                    </tr>
                                @empty
                                    <h4 class="text-dark text-center">You have not added any Food into cart <a
                                            href="{{ route('Welcome.All.Products') }}">vist our food menu</a> </h4>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    {{ $foods->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
@endsection
