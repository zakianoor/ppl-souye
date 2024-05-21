@extends('layouts.main')

@section('title', 'Checkout Success')

@section('content')
<section class="intro">
  <div class="content">
    <img src="/assets/img/logo3.jpg" style="width: 50%;">
    <h2 class="product-category">Checkout Succeed!</h2>
    <div>
      <button class="login-btn" type="button"><a href="{{ route('products') }}" style="color: #212121;"><span class="cover"></span>Shop Again!</a></button>
      <button class="login-btn" type="button"><a href="{{ route('logout') }}" style="color: #212121;"><span class="cover"></span>Sign Out</a></button>
    </div>
  </div>
</section>
@endsection