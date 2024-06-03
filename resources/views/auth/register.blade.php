@extends('layouts.main')

@section('title', 'create account')

@section('content')
  <section class="login">
    <div class="form-container">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <h2>Create Account</h2>
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-input" placeholder="Name"/>
            <x-input-error :messages="$errors->get('name')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-input" placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')"/>
            <x-text-input id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" class="form-input" placeholder="Password"/>
            <x-input-error :messages="$errors->get('password')"/>
            <x-text-input id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" class="form-input" placeholder="Confirm Password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" />
        <input type="submit" name="register" value="register" class="form-btn">
        @if (session('error'))
        <p>
          {{ session('error') }}
        </p>
        @endif
        <p>already have an account? sign in <a class="sign-cta" href="{{ route('login') }}">here!</a></p>
        <!-- <p>Sign Up as Admin? <a class="sign-cta" href="admin/regist.php"><u>Sign Up Here!</u></a></p> -->
      </form>
    </div>
  </section>
  @endsection