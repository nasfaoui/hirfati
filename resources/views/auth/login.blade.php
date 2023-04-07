@extends('layouts.app')

@section('content')
    <div class="login-parent">
        <div class="  login ">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="" srcset="">

            <form class="login-container" method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="login-titre">CONNECTER </h1>

                <label class="label-email" for="email">{{ __('E-mail') }}</label>
                <span class="input-con">
                    {{-- <i class="fa-solid fa-envelope"></i> --}}
                    <input id="email" placeholder=" &#xf0e0;  taper votre email " type="email"
                        class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
                </span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <label class="label-password" for="password">{{ __('Mot de passe') }}</label>
                <span>
                    {{-- <i class="fa-solid fa-lock"></i> --}}
                    <input id="password" placeholder=" &#xf084;  taper votre mot de passe" type="password"
                        class=" @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">

                </span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="remember" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>



                <button class="btn-login" type="submit">
                    {{ __('Se connecter') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <div class="hr">
                    <hr>
                    <h6> connecte avec </h6>
                    <hr>
                </div>

                <div class="btn-social">
                    <button type="button" class="login-with-google-btn">Google</button>
                    <button type="button" class="login-with-facebook-btn"> 
                      <i class="facebook fab fa-facebook-f"></i>Facebook</button>
                </div>

                <span class="inscrire">
                  <p>Pas encore de compte ? <a href="{{ route('register') }}"> S'inscrire </a></p>
                </span>
            </form>
        </div>
    </div>
@endsection
