@extends('landingpage.layout.app')

@section('content')
    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/images/background/banner-image-4.jpg') }});"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>any query ?</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h1><span>Contact Us</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Map Section-->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81392.11276571127!2d-74.03116502768826!3d40.70144849986174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1667928043843!5m2!1sen!2sin"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!--Contact Info Section-->
    <section class="contact-page">
        <div class="left-bg"><img src="{{ asset('assets/images/background/bg-25.png') }}" alt="" title=""></div>
        <div class="right-bg"><img src="{{ asset('assets/images/background/bg-6.png') }}" alt="" title=""></div>
        <!--location Section-->
        <div class="location-center">
            <div class="auto-container">
                <div class="cinfo-box">
                    <div class="row clearfix">
                        <!--Block-->
                        <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                                <h4>Lunch Time</h4>
                                <div class="text">Monday to Sunday <br> 11.00 am - 2.30pm</div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box cp-seprator wow fadeInUp" data-wow-duration="1500ms"
                                data-wow-delay="300ms">
                                <h4>Contact Info</h4>
                                <div class="text">{{env('APP_ADDRESS')}}<br>Email :
                                    {{ env('APP_EMAIL') }}</div>
                                <div class="more-link"><a href="#">Booking : {{ env('APP_NUM') }}</a></div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                                <h4>Dinner Time</h4>
                                <div class="text">{{ env('APP_TIMING') }}</div>
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
                                action="#">
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
