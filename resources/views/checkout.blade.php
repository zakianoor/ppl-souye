@extends('layouts.main')

@section('title', 'Checkout')

@section('content')
@php
$grand_total = 0; // Initialize grand total
@endphp

<section class="product">
  <div class="content">
    <h2 class="product-category">Checkout</h2>
    <h4 class="cart-products">Your shopping cart contains:
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
</section>
<section class="grand-total">
  <div class="content">
    <h2 class="product-category">Grand Total : <span>${{ number_format($grand_total) }}</span></h2>
    <div>
      <a class="btn-cart" href="{{ route('cart') }}">Back to Cart<i class="fa fa-cart-arrow-down"></i></a>
      <a class="btn-cart" href="{{ route('products') }}">Continue Shopping<i class="fa fa-forward"></i></a>
    </div>
  </div>
</section>
<section class="login">
  <div class="form-container">
    <form action="{{ route('processCheckout') }}" method="post">
      @csrf

      <input type="hidden" name="grand_total" value="{{ $grand_total }}" />
      <h2>Complete Your Shiping Address</h2>
      <input type="text" name="nama" placeholder="Enter Your Full Name" required=" ">
      <input type="text" name="alamat" placeholder="Enter Your Address" required=" ">
      <input type="text" name="nohp" placeholder="Enter Your Mobile number" required=" ">

      <h2>Complete Your Payment</h2>
      <input type="text" name="namarek" placeholder="Enter Your Name on Card" required=" ">
      <input type="text" name="norek" placeholder="Enter Your Card Number" required=" ">
      <div>
        <select type="select" name="bank" required>
          <option>-- Choose Your Bank</option>
          <option value="MDR-BA">Mandiri</option>
          <option value="BCA-BA">BCA</option>
          <option value="CMB-BA">CIMB</option>
          <option value="BNI-BA">BNI</option>
          <option value="JBR-BA">Bank Jabar</option>
          <option value="DNM-BA">Danamon</option>
          <option value="BRI-BA">BRI</option>
          <option value="PMT-BA">Permata</option>
      </div>
      <input type="submit" name="order_btn" value="Checkout Now!" class="form-btn">
    </form>
  </div>
</section>
@endsection