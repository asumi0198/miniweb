@extends('layouts.guest')

@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('index') }}">{{ config('app.name') }}</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body rounded-lg">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>z
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </div>
                </form>

                <p class="mt-3 mb-0">
                    <a href="{{ route('login') }}" class="text-sm">Login</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center text-sm">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>
</body>
@endsection
