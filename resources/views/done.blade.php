@extends('layouts.main')

@section('title', 'checkout success')

@section('content')
<section class="intro">
  <div class="content">
    <img src="/assets/img/logo.png" style="width: 30%;">
    <h2 class="product-category">Checkout Succeed!</h2>
    <div>
      <button class="done-btn" type="button"><a href="{{ route('home') }}" style="color: #212121;"><span class="cover"></span>Shop Again!</a></button>
      <button class="done-btn" type="button"><a href="{{ route('logout') }}" style="color: #212121;"><span class="cover"></span>Sign Out</a></button>
    </div>
  </div>
</section>
@endsection