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
                <div class="image-col col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image image-thumbnail"><img src="{{ asset('images/' . $food->image) }}" height="150px"
                                width="50px" alt="{{ $food->image }}"></div>
                    </div>
                </div>
                <div class="menu-col col-lg-5 col-md-12 col-sm-12">
                    <div class="inner">
                        <!--Block-->
                        <div class="dish-block">
                            <div class="inner-box">
                                <div class="title clearfix">
                                    <div class="ttl clearfix">
                                        <h5><a href="#">{{ $food->title }}</a></h5>
                                    </div>
                                    <div class="price"><span>${{ $food->price }}</span></div>
                                </div>
                                <div class="text desc"><a href="#">{{ $food->des }}</a></div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-danger">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
