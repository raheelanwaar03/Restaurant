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
                <h1><span>All Categories</span></h1>
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
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="row">
                                @forelse ($categorys as $category)
                                    <div class="col-md-3 mx-3">
                                        <div class="card" style="width: 18rem;">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ asset('images/'.$category->image) }}" alt="Card image cap">
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title text-dark">{{ $category->title }}</h5>
                                                <p class="card-text text-dark">{{ $category->des }}.</p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                            </div>
                            <h3>Admin have not added any category yet!</h3>
                            @endforelse
                            <div class="col-md-12 text-center">
                                {{ $categorys->withQueryString()->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!--Location form Section-->
        <div class="auto-container">
            <div class="c-page-form-box">
                <div class="row clearfix">
                    <!--form Section-->
                    <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                        <div class="title-box centered">
                            <h2>Message us</h2>
                            <div class="text desc">Have a question about the our service? We're here to help, contact us
                                today</div>
                        </div>
                        <div class="default-form reservation-form">
                            <form method="post"
                                action="https://kalanidhithemes.com/live-preview/landing-page/delici/all-demo/Delici-Defoult/index.html">
                                <div class="clearfix">
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="fieldname" value="" placeholder="Your Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="fieldname" value="" placeholder="Your Email"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="field-inner">
                                            <input type="text" name="fieldname" value="" placeholder="Phone Number"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="field-inner">
                                            <textarea name="fieldname" placeholder="Special Request" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one clearfix">
                                            <span class="btn-wrap">
                                                <span class="text-one">send your message</span>
                                                <span class="text-two">send your message</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--form image Section-->
                    <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('assets/images/resource/restaurant.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
