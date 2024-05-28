@extends('layouts.main')

@section('title', 'your account')

@section('content')
<section class="account">
  <div class="form-container">
    <form action="#" method="post">
      <h2>Your Account</h2>
      <p class="username">Username : {{ Session::get('user')->usn_user }}</p>
    </form>
  </div>
</section>
@endsection