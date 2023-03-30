@extends('layouts.app')

@section('content')
    <div class=" m-0 img-bg-login " >

        <div class="">
            <div class="">
                <div class=" login-container ">
                    <h1 class="login-titre">CONNECTER </h1>

                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="">
                                <label for="email"
                                    class=" co1">{{ __('E-mail')}}
                                </label>

                                <div class="">
                                    <input id="email" type="email"
                                        class=" @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <label for="password"
                                    class="">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password"
                                        class=" @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <div class="">
                                    <div class="">
                                        <input class="" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="">
                                    <button type="submit" class="">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
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
@endsection
