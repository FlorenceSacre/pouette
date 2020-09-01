<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
<div class="container">
    <div id="content">
        <div id="login-form">
        <fieldset id="form-login">
            <legend>{{ __('Login') }}</legend>
            <div>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <label for="email" class="email-login">{{ __('Email') }}</label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <label for="password">{{ __('Mot de passe') }}</label>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </fieldset>
        </div>
    </div>
</div>
@endsection
