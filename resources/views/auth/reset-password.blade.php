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
                <h1 class="text-center text-light">Reset Your Password</h1>
            </div>
        </div>
        <div style="margin-top: -150px" class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-white w-100">
                    <div class="card-header text-white text-center">
                        You can easily change your password from here.
                    </div>
                    <div class="card-body">
                        <x-auth-session-status class="mb-4 text-white" :status="session('status')" />

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-input-label for="email" class="text-white" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full form-control" type="email"
                                    name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4 form-group">
                                <x-input-label for="password" class="text-white" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full form-control" type="password"
                                    name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4 form-group">
                                <x-input-label for="password_confirmation" class="text-white" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                                    type="password" name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
