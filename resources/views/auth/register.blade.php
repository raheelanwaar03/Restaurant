@extends('auth.layout.app')
@section('content')

    <body id="page-top">
        <div class="row osahan-login m-0">
            <div class="col-md-6 osahan-login-left px-0">
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column px-0">
                <div class="col-lg-6 mx-auto">
                    <h3 class="mb-1">Welcome</h3>
                    <p class="mb-5">Sign in to your account to continue</p>
                    <form href="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-4">
                            <div class="mr-3 bg-light rounded p-2 osahan-icon"><i class="mdi mdi-account-outline"></i></div>
                            <div class="w-100">
                                <p class="mb-0 small font-weight-bold text-dark">Full Name</p>
                                <input type="text" name="name"
                                    class="form-control form-control-sm p-0 border-input border-0 rounded-0"
                                    placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="mr-3 bg-light rounded p-2 osahan-icon"><i class="mdi mdi-email-outline"></i></div>
                            <div class="w-100">
                                <p class="mb-0 small font-weight-bold text-dark">Email Address</p>
                                <input type="email" name="email"
                                    class="form-control form-control-sm p-0 border-input border-0 rounded-0"
                                    placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="mr-3 bg-light rounded p-2 osahan-icon"><i class="mdi mdi-form-textbox-password"></i>
                            </div>
                            <div class="w-100">
                                <p class="mb-0 small font-weight-bold text-dark">Password</p>
                                <input type="password" name="password"
                                    class="form-control form-control-sm p-0 border-input border-0 rounded-0"
                                    placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="mr-3 bg-light rounded p-2 osahan-icon"><i class="mdi mdi-form-textbox-password"></i>
                            </div>
                            <div class="w-100">
                                <p class="mb-0 small font-weight-bold text-dark">Confirm Password</p>
                                <input type="password" name="password_confirmation"
                                    class="form-control form-control-sm p-0 border-input border-0 rounded-0"
                                    placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary btn-block mb-3">Register</button>
                            <a href="{{ route('login') }}" class="btn btn-light btn-block mb-2">Already have account!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
