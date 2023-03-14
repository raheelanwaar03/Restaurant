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
                <h1><span>Order Items & Status</span></h1>
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
                    <div class="card">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Item Quantity</th>
                                    <th>Item Image</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
                                        <td>
                                            <a href="{{ route('User.Cancel.Order', ['id' => $food->id]) }}"
                                                class="btn btn-danger">Cancel</a>
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
                    {{ $orderFoods->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
@endsection
