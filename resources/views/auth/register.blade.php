@extends('layouts.app')

@section('content')

        <div class="register-con">
            <form class="registre" method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="registre-titre">creé un compte </h1>
            
                <span class="client-parent">
                    <div id="client_child1" class=" rg ">
                        <input type="radio" id="client_chek" checked >
                        <div for='client' class="client-child2">
                            <i id="client" class="fas fa-user"></i>
                            <h6>Client</h6>
                        </div>
                    </div>
                    <div id="Travail_child1" class="rg ">
                        <input  type="radio"  id="Travailleur_chek" >
                        <div class="client-child2">
                            <i class="fas fa-users"></i>
                            <h6>Travailleur</h6>
                        </div>
                    </div>
                </span>

                <label for="name" class="name">{{ __('Name') }}</label>
            
            
                <input id="name" placeholder=" &#xf007;   taper votre nom" type="text" class=" @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" >
            
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            
                <label for="email" class="email">{{ __('Email Address') }}</label>
            
            
                <input id="email" placeholder=" &#xf0e0;   taper votre email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
            
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            
            
            
                <label for="Adresse" class="">{{ __('Adresse') }}</label>
            
            
                <input id="Adresse" placeholder=" &#xf3c5;   taper votre Adresse" type="text" class=" @error('Adresse') is-invalid @enderror" name="Adresse"
                    value="{{ old('Adresse') }}" required autocomplete="Adresse" autofocus>
            
                @error('Adresse')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            
            
            
                <label for="password" class="">{{ __('Password') }}</label>
            
            
                <input id="password" placeholder=" &#xf023;   taper votre mot de passe" type="password" class=" @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
            
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            
            
            
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
            
            
                <input id="password-confirm"  placeholder=" &#xf023;   password-confirm" type="password" class="" name="password_confirmation" required
                    autocomplete="new-password">
            
                    <span class="accepte">
                        <input type="checkbox" name="" id="">
                        <p>  J’ai lu et j’accepte <a href="">les conditions d’utilisation</a>.
                            Et je donne mon accord  <a href="">au traitement de mes données
                            personnelles</a></p>
                    </span>
                    
            
                <button type="submit" class="btn-register">
                    {{ __('creé un compte') }}
                </button>
            
            
            </form>
            
        </div class="register-con">
@endsection
