@extends('layouts.main')

@section('title', 'sign in')

<style>
  #hover:hover {    background: #3C2F1C;
    color: #FDFBF9;
    transition: ease;
    padding: -15px;
    padding: 15px;
    margin: -15px;
    border-radius: 30px;
    text-transform: none;
  }
    
</style>
@section('content')
  <section class="login">
    <div class="form-container">
      <form action="{{ route('login') }}" method="POST">
        @csrf

        <h2>Sign In</h2>
            <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="email" class="form-input"/>
            <x-input-error :messages="$errors->get('email')" />
            <x-text-input id="password" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" class="form-input"/>
            <x-input-error :messages="$errors->get('password')"/>
        <x-primary-button style="
    background: #888783;
    color: #FDFBF9;
    width: 50%;
    opacity: 100%;
    border-radius: 30px;
    text-transform: none;
    font-size: 14px;
    cursor: pointer;
    border: 0;
    padding: 15px;
    margin: 8px;">
              <div id="hover" >
                {{ __('sign in') }}
        </div>
        </x-primary-button>
        <div>
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span style="color: #888783; cursor: pointer;">{{ __('Remember me') }}</span>
            </label>
        </div>
                <div>
            @if (Route::has('password.request'))
              <div class="forgot">
                  <a href="{{ route('password.request') }}" style="color: #888783; cursor: pointer;">
                      {{ __('Forgot your password?') }}
                  </a>
              </div>
            @endif
        </div>
        @if (session('error'))
        <p>
          {{ session('error') }}
        </p>
        @endif
        <p>don't have an account? sign up <a class="sign-cta" href="{{ route('register') }}"><u>here!</u></a></p>
        <!-- <p>sign in as admin? <a class="sign-cta" href="admin/login.php"><u>sign in here!</u></a></p> -->
      </form>
    </div>
  </section>
  @endsection