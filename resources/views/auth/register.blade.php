@extends('auth.layout.app')
@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('login') }}">Home</a></li>
                    <li class="active">Register </li>
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
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-register-form">
                                            <form action="{{ route('register') }}" method="POST">
                                                @csrf
                                                <input type="text" name="name" placeholder="Username">
                                                <input name="email" placeholder="Email" type="email">
                                                <input type="password" name="password" placeholder="Password">
                                                <input type="password" name="password_confirmation"
                                                    placeholder="Retype Password">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="button-box">
                                                            <button type="submit"><span>Register</span></button>
                                                        </div>
                                                        <div class="button-box">
                                                            <a href="{{ route('login') }}"
                                                                class="btn btn-danger"><span>Login</span></a>
                                                        </div>
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
