@extends('layouts.main')

@section('title', 'Cart')

@section('content')
@php
$grand_total = 0; // Initialize grand total
@endphp

@if ($carts->isNotEmpty())
<section class="product">
    <div class="content">
        <h2 class="product-category">Cart</h2>
        <h4 class="cart-products">Your shopping cart contains: <span>{{ $totalCart }} products.</span></h4>
        <div class="product-container">
            @foreach($carts as $cart)
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/' . $cart->img_brg) }}" class="product-thumb" alt="{{ $cart->nama_brg }}">
                    <form id="removeForm{{ $cart->id }}" action="{{ route('removeCart', ['id' => $cart->id_cart]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Remove item from cart?')" class="card-btn">Remove</button>
                    </form>
                </div>
                <div class="product-info">
                    <p class="product-short-description">{{ $cart->nama_brg }}</p>
                    <p class="product-short-description">Quantity: {{ $cart->qty_brg }}</p>
                    @php
                        // harga_brg to float before calculation
                        $harga_brg = floatval($cart->harga_brg);
                        $sub_total = $harga_brg * $cart->qty_brg;
                        $grand_total += $sub_total; // update grand total
                    @endphp
                    <span class="price">Rp{{ number_format($sub_total) }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="grand-total">
    <div class="content">
        <h2 class="product-category">Grand Total : <span>Rp{{ number_format($grand_total) }}</span></h2>
        <div>
            <a class="btn-cart" href="{{ route('home') }}">Continue Shopping <i class="fa fa-cart-plus"></i></a>
            <a class="btn-cart" href="{{ route('checkout') }}">Proceed to Checkout <i class="fa fa-chevron-circle-right"></i></a>
        </div>
    </div>
</section>
@else
<section class="product">
    <div class="content">
        <h2 class="product-category">Cart</h2>
        <h4 class="cart-products">Your shopping cart is empty.</h4>
    </div>
</section>
<section class="grand-total">
    <div class="content">
        <h2 class="product-category">Shop now!</h2>
        <div>
            <a class="btn-cart" href="{{ route('home') }}">Continue Shopping <i class="fa fa-cart-plus"></i></a>
        </div>
    </div>
</section>
@endif
@endsection
