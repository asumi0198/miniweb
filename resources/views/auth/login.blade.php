@extends('layouts.guest')

@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('index') }}">{{ config('app.name') }}</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body rounded-lg">
                <p class="login-box-msg">Sign in to start your session</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p class="text-sm">Sign in with</p>
                    <a href="#" class="btn btn-block btn-facebook">
                        <i class="fab fa-facebook-f mr-2"></i>
                        Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-google">
                        <i class="fab fa-google mr-2"></i>
                        Sign in using Google
                    </a>
                </div>

                <p class="mb-0">
                    <a href="{{ route('password.request') }}" class="text-sm">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center text-sm">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>
</body>
@endsection
