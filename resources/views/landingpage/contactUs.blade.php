@extends('auth.layout.app')

@section('content')
<div class="breadcrumb-area gray-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ route('Welcome') }}">Home</a></li>
                <li class="active"> Contact Us </li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-info-wrapper text-center mb-30">
                    <div class="contact-info-icon">
                        <i class="ion-ios-location-outline"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Our Location</h4>
                        <p>{{ env('APP_ADDRESS') }}</p>
                        <p><a href="#">{{ env('APP_EMAIL') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-info-wrapper text-center mb-30">
                    <div class="contact-info-icon">
                        <i class="ion-ios-telephone-outline"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Contact us Anytime</h4>
                        <p>Mobile: {{ env('APP_NUM') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-info-wrapper text-center mb-30">
                    <div class="contact-info-icon">
                        <i class="ion-ios-email-outline"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Write Some Words</h4>
                        <p><a href="#">{{ env('APP_EMAIL') }} </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-message-wrapper">
                    <h4 class="contact-title">GET IN TOUCH</h4>
                    <div class="contact-message">
                        <form id="contact-form" action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Full Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="email" placeholder="Email Address" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="subject" placeholder="Subject" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-style">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
