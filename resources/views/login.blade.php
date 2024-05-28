@extends('layouts.main')

@section('title', 'sign in')

@section('content')
  <section class="login">
    <div class="form-container">
      <form action="{{ route('login.loginBuyer') }}" method="post">
        @csrf

        <h2>Sign In</h2>
        <input type="text" name="usn" placeholder="username" required=" ">
        <input type="password" name="pass" placeholder="password" required=" ">
        <input type="submit" name="login" value="sign in" class="form-btn">
        @if (session('error'))
        <p>
          {{ session('error') }}
        </p>
        @endif
        <p>don't have an account? sign up <a class="sign-cta" href="{{ route('regist') }}"><u>here!</u></a></p>
        <!-- <p>sign in as admin? <a class="sign-cta" href="admin/login.php"><u>sign in here!</u></a></p> -->
      </form>
    </div>
  </section>
  @endsection