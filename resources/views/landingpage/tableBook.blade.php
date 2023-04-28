@extends('auth.layout.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('login') }}">Home</a></li>
                    <li class="active">Find a Table </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active">
                                <h4> Book a Table </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-register-form">
                                            <form action="{{ route('Welcome.Reserve.Table') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="Persons">Persons</label>
                                                    <select name="person" class="form-control">
                                                        <option value="1 person">1 Person</option>
                                                        <option value="2 person">2 Person</option>
                                                        <option value="3 person">3 Person</option>
                                                        <option value="4 person">4 Person</option>
                                                        <option value="5 person">5 Person</option>
                                                        <option value="6 person">6 Person</option>
                                                        <option value="7 person">7 Person</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Date">Date</label>
                                                    <input class="form-control datepicker" type="text" name="calendar"
                                                        value="" placeholder="DD-MM-YYYY" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Time">Time</label>
                                                    <select name="time" class="form-control">
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
                                                </div>
                                                <div class="form-group">
                                                    <label for="massage">Additional Massage</label>
                                                    <textarea name="massage" class="form-control" placeholder="Message" required></textarea>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-warning text-white">Request for Booking</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <form method="post" action="{{ route('Welcome.Reserve.Table') }}" method='POST'>
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
</form> --}}
