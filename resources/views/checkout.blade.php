@extends('layouts.main')

@section('title', 'checkout')

@section('content')
@php
$grand_total = 0; // Initialize grand total
@endphp

<section class="product">
  <div class="content">
    <h2 class="product-category">checkout</h2>
    <h4 class="cart-products">your shopping cart contains:
      <span>{{ $totalCart }} products.
    </h4>
    <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
    <div class="product-container">
      @if ($carts->isNotEmpty())
      @foreach($carts as $cart)
      <div class="product-card">
        <div class="product-image">
          <img src="/assets/img/{{ $cart->img_brg }}" class="product-thumb" alt="">
          <form id="removeForm{{ $cart->id_cart }}" action="{{ route('removeCart', ['id' => $cart->id_cart]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Remove item from cart?')" class="card-btn">remove</button>
          </form>

        </div>
        <div class="product-info">
          <h2 class="product-brand">{{ $cart->nama_artis }}</h2>
          <p class="product-short-description">{{ $cart->nama_brg }}</p>
          <p class="product-short-description">quantity: {{ $cart->qty_brg }}</p>
          @php
          // Convert harga_brg to float before calculation
          $harga_brg = floatval($cart->harga_brg);
          $sub_total = $harga_brg * $cart->qty_brg;
          $grand_total += $sub_total; // Update grand total
          @endphp
          <span class="price">Rp{{ number_format($sub_total) }}</span>
        </div>
      </div>
      @endforeach
      @else
      <center>Your cart is still empty!</center>
      @endif
    </div>
</section>
<section class="grand-total">
  <div class="content">
    <h2 class="product-category">grand total : <span>Rp{{ number_format($grand_total) }}</span></h2>
    <div>
      <a class="btn-cart" href="{{ route('cart') }}">Back to Cart<i class="fa fa-cart-arrow-down"></i></a>
      <a class="btn-cart" href="{{ route('shop') }}">Continue Shopping<i class="fa fa-forward"></i></a>
    </div>
  </div>
</section>
<section class="checkout">
  <div class="form-container">
    <form action="{{ route('processCheckout') }}" method="post">
      @csrf

      <input type="hidden" name="grand_total" value="{{ $grand_total }}" />
      <h2>Complete Your Shiping Address</h2>
      <input type="text" name="nama" placeholder="full name" required=" ">
      <input type="text" name="nohp" placeholder="phone number" required=" ">
      <input type="text" name="alamat" placeholder="address (city, province, zip code, etc)" required=" ">
      <input type="submit" name="order_btn" value="payment now!" class="form-btn">
    </form>
  </div>
</section>
@endsection