<title>Register</title>
<link href="{{asset('css/register.css')}}" rel="stylesheet">
@extends('layouts.app')

@section('content')

<section id="register">
    <br> <br> <br> <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control shadow @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" style="border:#368D96 solid 1px;">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control shadow @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border:#368D96 solid 1px">

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
                                    <input id="password" type="password" class="form-control shadow @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="border:#368D96 solid 1px">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control shadow" name="password_confirmation" required autocomplete="new-password" style="border:#368D96 solid 1px">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#368D96" fill-opacity="0.12" d="M0,96L0,256L36.9,256L36.9,96L73.8,96L73.8,288L110.8,288L110.8,0L147.7,0L147.7,96L184.6,96L184.6,192L221.5,192L221.5,96L258.5,96L258.5,128L295.4,128L295.4,224L332.3,224L332.3,160L369.2,160L369.2,160L406.2,160L406.2,256L443.1,256L443.1,224L480,224L480,160L516.9,160L516.9,288L553.8,288L553.8,320L590.8,320L590.8,64L627.7,64L627.7,128L664.6,128L664.6,320L701.5,320L701.5,32L738.5,32L738.5,160L775.4,160L775.4,224L812.3,224L812.3,64L849.2,64L849.2,32L886.2,32L886.2,288L923.1,288L923.1,256L960,256L960,64L996.9,64L996.9,320L1033.8,320L1033.8,224L1070.8,224L1070.8,192L1107.7,192L1107.7,32L1144.6,32L1144.6,32L1181.5,32L1181.5,0L1218.5,0L1218.5,288L1255.4,288L1255.4,96L1292.3,96L1292.3,0L1329.2,0L1329.2,64L1366.2,64L1366.2,256L1403.1,256L1403.1,128L1440,128L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path></svg>
</section>
@endsection
