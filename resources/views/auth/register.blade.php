@extends('layouts.guest')

@section('content')
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('index') }}">{{ config('app.name') }}</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body rounded-lg">
                <p class="login-box-msg">Register a new membership</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p class="text-sm">Sign up with</p>
                    <a href="#" class="btn btn-block btn-facebook">
                        <i class="fab fa-facebook-f mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-google">
                        <i class="fab fa-google mr-2"></i>
                        Sign up using Google
                    </a>
                </div>
                <a href="{{ route('login') }}" class="text-center text-sm">I already have a membership</a>
            </div>
        </div>
    </div>
</body>
@endsection
