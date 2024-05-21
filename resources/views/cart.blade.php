@extends('layouts.main')

@section('title', 'Cart')

@section('content')
@php
$grand_total = 0; // Initialize grand total
@endphp

<section class="product">
  <div class="content">
    <h2 class="product-category">Cart</h2>
    <h4 class="cart-products">Your shopping cart contains: <span>{{ $totalCart }} products.</span></h4>
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
            <button type="submit" onclick="return confirm('Remove item from cart?')" class="card-btn">Remove</button>
          </form>

        </div>
        <div class="product-info">
          <h2 class="product-brand">{{ $cart->nama_artis }}</h2>
          <p class="product-short-description">{{ $cart->nama_brg }}</p>
          <p class="product-short-description">Quantity: {{ $cart->qty_brg }}</p>
          @php
          // Convert harga_brg to float before calculation
          $harga_brg = floatval($cart->harga_brg);
          $sub_total = $harga_brg * $cart->qty_brg;
          $grand_total += $sub_total; // Update grand total
          @endphp
          <span class="price">${{ number_format($sub_total) }}</span>
        </div>
      </div>
      @endforeach
      @else
      <center>Your cart is still empty!</center>
      @endif
    </div>
  </div>
</section>
<section class="grand-total">
  <div class="content">
    <h2 class="product-category">Grand Total : <span>${{ number_format($grand_total) }}</span></h2>
    <div>
      <a class="btn-cart" href="{{ route('products') }}">Continue Shopping<i class="fa fa-cart-plus"></i></a>
      <a class="btn-cart" href="{{ route('checkout') }}">Proceed to Checkout<i class="fa fa-chevron-circle-right"></i></a>
    </div>
  </div>
</section>
@endsection