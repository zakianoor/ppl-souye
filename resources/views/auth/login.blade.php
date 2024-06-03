@extends('layouts.main')

@section('title', 'sign in')

@section('content')
  <section class="login">
    <div class="form-container">
      <form action="{{ route('login') }}" method="POST">
        @csrf

        <h2>Sign In</h2>
            <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" class="form-input"/>
            <x-input-error :messages="$errors->get('email')" />
            <x-text-input id="password" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" class="form-input"/>
            <x-input-error :messages="$errors->get('password')"/>
        <div>
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>
                <div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
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