@extends('landingpage.layout.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Orders </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area start -->
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <h3 class="page-title">My Orders</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Item Price</th>
                                    <th>Qty</th>
                                    <th>Image</th>
                                    <th>Order Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orderFoods as $food)
                                    <tr>
                                        <td>{{ $food->title }}</td>
                                        <td>{{ $food->item_price }}</td>
                                        <td>{{ $food->item_qty }}</td>
                                        <td>
                                            <img src="{{ asset('images/' . $food->image) }}" class="img-fluid img-thumbnail"
                                                width="90px" height="90px" alt="{{ $food->image }}">
                                        </td>
                                        <td>{{ $food->total_price }}</td>
                                        <td>{{ $food->status }}</td>
                                    </tr>
                                @empty
                                    <h4 class="text-dark text-center">You have not added any Food into cart <a
                                            href="{{ route('Welcome.All.Products') }}">vist our food menu</a> </h4>
                                @endforelse
                                <div class="col-md-12 text-center">
                                    {{ $orderFoods->withQueryString()->links('pagination::bootstrap-5') }}
                                </div>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{ route('Welcome.All.Products') }}">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
