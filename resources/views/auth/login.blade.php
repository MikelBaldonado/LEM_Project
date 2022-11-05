<title>Login</title>
<link href="{{asset('css/login.css')}}" rel="stylesheet">
@extends('layouts.app')

@section('content')
<section id="login">
    <div class="container">
        <br> <br> <br> <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control shadow @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border:#368D96 solid 1px">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control shadow @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border:#368D96 solid 1px";>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#368D96" fill-opacity="0.1" d="M0,288L0,320L48,320L48,128L96,128L96,288L144,288L144,224L192,224L192,64L240,64L240,256L288,256L288,64L336,64L336,96L384,96L384,224L432,224L432,320L480,320L480,96L528,96L528,224L576,224L576,96L624,96L624,256L672,256L672,224L720,224L720,96L768,96L768,256L816,256L816,160L864,160L864,64L912,64L912,256L960,256L960,256L1008,256L1008,160L1056,160L1056,160L1104,160L1104,96L1152,96L1152,256L1200,256L1200,192L1248,192L1248,32L1296,32L1296,32L1344,32L1344,96L1392,96L1392,160L1440,160L1440,320L1392,320L1392,320L1344,320L1344,320L1296,320L1296,320L1248,320L1248,320L1200,320L1200,320L1152,320L1152,320L1104,320L1104,320L1056,320L1056,320L1008,320L1008,320L960,320L960,320L912,320L912,320L864,320L864,320L816,320L816,320L768,320L768,320L720,320L720,320L672,320L672,320L624,320L624,320L576,320L576,320L528,320L528,320L480,320L480,320L432,320L432,320L384,320L384,320L336,320L336,320L288,320L288,320L240,320L240,320L192,320L192,320L144,320L144,320L96,320L96,320L48,320L48,320L0,320L0,320Z"></path></svg>
</section>
@endsection
