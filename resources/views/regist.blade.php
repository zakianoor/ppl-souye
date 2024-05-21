<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up | {{ config('app.name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <nav>
    <img src="assets/img/logo.png">
    <ul>
      <li><a href="{{ route('shop') }}">shop</a></li>
      <li><a href="{{ route('bestseller') }}">best sellers</a></li>
      <li><a href="{{ route('collab') }}">x DEAR지아</a></li>
      <div class="sale"><li><a href="{{ route('sale') }}">sale</a></li></div>
      <li><a href="{{ route('about') }}">about</a></li>
    </ul>
    <div class="navbar">
      <ul>
        <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-in-alt" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </nav>
  <section class="login">
    <div class="form-container">
      <form action="{{ route('regist.register') }}" method="post">
        @csrf

        <div class="lexend-exa"><h2>Create Account</h2></div>
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


  @include('includes.footer')