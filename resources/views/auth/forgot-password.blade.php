<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication</title>
</head>

<body style="background-image: url({{ asset('assets/images/background/image-7.jpg') }});">
    <x-alert />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Password Reset Link</h1>
            </div>
        </div>
        <div style="margin-top: -150px" class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-white w-100">
                    <div class="card-header text-white text-center">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    <div class="card-body">
                        <x-auth-session-status class="mb-4 text-white" :status="session('status')" />
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div>
                                <div class="form-group">
                                    <label class="text-white">Email</label>
                                    <input type="email" name="email" :value="old('email')" class="form-control text-dark" required autofocus>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                </div>
                                {{-- <x-input-label for="email" class="form-group text-white" :value="__('Email')" />
                                <x-text-input id="email" class="form-control text-dark" class="block mt-1 w-100" type="email" name="email"
                                    :value="old('email')" class="text-dark" required autofocus /> --}}
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="btn btn-primary">
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -150px">
            <div class="col-md-12">
                <h1 class="text-center text-light">haven't register yet?<span><a href="{{ route('register') }}"
                            style="text-decoration: none"> Register</a></span></h1>
            </div>
        </div>
    </div>
</body>

</html>
