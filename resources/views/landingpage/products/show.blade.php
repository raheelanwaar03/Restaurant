@extends('layouts.app')

@section('content')
    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('images/' . $food->image) }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>our menu</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h1><span>Product Details</span></h1>
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
    </section>

    {{-- product detalis --}}

    <section class="menu-one">
        <div class="right-bg"><img src="images/background/bg-16.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>single</span></div>
                <div class="pattern-image"><img src="{{ asset('assets/images/icons/separator.svg') }}" alt=""
                        title=""></div>
                <h2>{{ $food->title }}</h2>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <form action="{{ route('User.Add.To.Cart', ['id' => $food->id]) }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="card w-25 bg-transparent" style="border:none">
                                <div class="card-body">
                                    <img src="{{ asset('images/' . $food->image) }}" alt="{{ $food->image }}" style="border-radius:10px" height="250px" width="250px">
                                </div>
                            </div>
                            <div class="ml-5">
                                <h5><a href="#">{{ $food->title }}</a></h5>
                                <div class="price"><span>${{ $food->price }}</span></div>
                                <div class="text desc"><a href="#">{{ $food->des }}</a></div>
                                <div class="mt-3">
                                    <input type="number" name="qty" min='1' value="1"
                                        style="width:35px;background: rgb(153, 148, 148);color:black;border-radius:7px;padding-left:5px">
                                    <button class="btn btn-danger">AddToCart</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
