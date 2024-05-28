@extends('layouts.main')

@section('title', 'create account')

@section('content')
  <section class="login">
    <div class="form-container">
      <form action="{{ route('regist.register') }}" method="post">
        @csrf

        <h2>Create Account</h2>
        <input type="text" name="usn" placeholder="username" required=" ">
        <input type="password" name="pass" placeholder="password" required=" ">
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