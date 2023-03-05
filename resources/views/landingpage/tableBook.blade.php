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
                <form method="post" action="{{ route('Welcome.Reserve.Table') }}">
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
                    <button type="submit" class="theme-btn btn-style-one clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">book a table</span>
                            <span class="text-two">book a table</span>
                        </span>
                    </button>
                </form>
            </div>
        </div>

        <!--map Section-->
        <div class="map-location-section">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="row clearfix">
                        <div class="reserv-col col-lg-8 col-md-12 col-sm-12">
                            <div class="inner">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81392.11276571127!2d-74.03116502768826!3d40.70144849986174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1667928043843!5m2!1sen!2sin"
                                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="info-col col-lg-4 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="title">
                                    <h2>New York</h2>
                                </div>
                                <div class="data">
                                    <ul class="info">
                                        <li><strong>Contact Us</strong><br>Restaurant St, Delicious City,<br> London 9578,
                                            UK <br> Call : +88-123-123456 <br> Email : booking@domainname.com </li>
                                        <div class="separator"><span></span></div>
                                        <li><strong>Lunch Time</strong><br>Monday to Sunday <br>11.00 am - 2.30pm</li>
                                        <li><strong>Dinner Time</strong><br>Monday to Sunday <br>05.00 pm - 10.00pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
