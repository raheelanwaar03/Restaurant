@extends('layouts.app')

@section('content')
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/images/background/banner-image-4.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>book your table</span></div>
                <div class="pattern-image"><img src="{{ asset('assets/images/icons/separator.svg') }}" alt=""
                        title=""></div>
                <h1><span>Address To Deliver</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Online Reservation Section-->
    <section class="online-reservation inner-page">
        <div class="left-bg"><img src="{{ asset('assets/images/background/bg-5.png') }}" alt="" title="">
        </div>
        <div class="right-bg"><img src="{{ asset('assets/images/background/bg-6.png') }}" alt="" title="">
        </div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>Address</span></div>
                <div class="pattern-image"><img src="{{ asset('assets/images/icons/separator.svg') }}" alt=""
                        title=""></div>
                <h2>Type Your Address</h2>
            </div>
            <div class="default-form reservation-form">
                <form method="post" action="{{ route('Store.Address') }}" method="POST">
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group">
                            <label for="">Enter Your Address</label>
                            <textarea name="address" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="theme-btn btn-style-one clearfix mt-5">
                            <span class="btn-wrap">
                                <span class="text-one">Add Address</span>
                                <span class="text-two">Add Address</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
