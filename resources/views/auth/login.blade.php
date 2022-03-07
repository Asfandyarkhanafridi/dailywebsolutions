@extends('layouts.app')

@section('body-class','bg-account')
@section('title', 'Login')

@section('main-content')
<div class="container text-center text-dark">
    <div class="row mt-md-5">
        <div class="col-lg-4 d-block mx-auto">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>
                        <div class="card-body">
                            <div class="text-center mb-6">
                                <img src="{{asset('assets/images/brand/logo1.png')}}" class="" alt="">
                            </div>
                            <h3>Login</h3>
                            <p class="text-muted">Sign In to your account</p>
                            <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                <div class="input-group mb-3">
                                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                             <a class="btn btn-link" href="{{ route('register') }}">
                                                {{ __('Register with New Account') }}
                                            </a>
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
@endsection

