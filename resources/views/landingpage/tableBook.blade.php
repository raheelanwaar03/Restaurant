@extends('layouts.app')

@section('content')
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/images/background/banner-image-3.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>book your table</span></div>
                <div class="pattern-image"><img src="{{ asset('assets/images/icons/separator.svg') }}" alt=""
                        title=""></div>
                <h1><span>Reservation</span></h1>
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
                <div class="subtitle"><span>Reservation</span></div>
                <div class="pattern-image"><img src="{{ asset('assets/images/icons/separator.svg') }}" alt=""
                        title=""></div>
                <h2>Book A Table</h2>
                <div class="text desc">Restaurant will be open for all days, Sunday night will be closed, All booking
                    payment is secured with credit card, no charges will be aplly for online booking. no refundable.</div>
                <div class="text request-info">Booking request <a href="#">+88-123-123456</a> or fill out the order
                    form</div>
            </div>
            <div class="default-form reservation-form">
                <form method="post" action="{{ route('Welcome.Reserve.Table') }}" method='POST'>
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <span class="alt-icon far fa-user"></span>
                                <select name="person" class="l-icon">
                                    <option value="1 person">1 Person</option>
                                    <option value="2 person">2 Person</option>
                                    <option value="3 person">3 Person</option>
                                    <option value="4 person">4 Person</option>
                                    <option value="5 person">5 Person</option>
                                    <option value="6 person">6 Person</option>
                                    <option value="7 person">7 Person</option>
                                </select>
                                <span class="arrow-icon far fa-angle-down"></span>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <span class="alt-icon far fa-calendar"></span>
                                <input class="l-icon datepicker" type="text" name="calendar" value=""
                                    placeholder="DD-MM-YYYY" required readonly>
                                <span class="arrow-icon far fa-angle-down"></span>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <span class="alt-icon far fa-clock"></span>
                                <select name="time" class="l-icon">
                                    <option value="08 : 00 am">08 : 00 am</option>
                                    <option value="09 : 00 am">09 : 00 am</option>
                                    <option value="10 : 00 am">10 : 00 am</option>
                                    <option value="11 : 00 am">11 : 00 am</option>
                                    <option value="12 : 00 am">12 : 00 pm</option>
                                    <option value="01 : 00 am">01 : 00 pm</option>
                                    <option value="02 : 00 am">02 : 00 pm</option>
                                    <option value="03 : 00 am">03 : 00 pm</option>
                                    <option value="04 : 00 am">04 : 00 pm</option>
                                    <option value="05 : 00 am">05 : 00 pm</option>
                                    <option value="06 : 00 am">06 : 00 pm</option>
                                    <option value="07 : 00 am">07 : 00 pm</option>
                                    <option value="08 : 00 am">08 : 00 pm</option>
                                    <option value="09 : 00 am">09 : 00 pm</option>
                                    <option value="10 : 00 am">10 : 00 pm</option>
                                </select>
                                <span class="arrow-icon far fa-angle-down"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <div class="field-inner">
                            <textarea name="massage" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="theme-btn btn-style-one clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">book a table</span>
                            <span class="text-two">book a table</span>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
