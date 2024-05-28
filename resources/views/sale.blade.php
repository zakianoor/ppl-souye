@extends('layouts.main')

@section('title', 'sale')

@section('content')
<section class="banner">
    <div class="sale">
        <div class="content">
            <h1>matcha edition</h1>
        </div>
        <div class="content">
            <img src="assets/img/sale1.jpg">
        </div>
        <div class="content">
            <p>Introducing our newest Matcha Mask, formulated<br>
                to brighten and revitalize your skin!<br>
                Don't forget to share your <strong><em>#MatchaGlow</em></strong> moments<br>
                on Instagram for a chance to be featured!</p>
        </div>
    </div>
</section>
<section class="sale-content">
    <div class="content">
        <h2 class="product-category">on sale</h2>
        <div class="sale-container">
            @foreach($sale as $product)
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/{{ $product->img_brg }}" class="product-thumb" alt="">
                    <form action="{{ route('addToCartSale') }}" method="post">
                        @csrf
                        <fieldset>
                            <input type="hidden" name="id_brg" value="{{ $product->id_brg }}" />
                            <input type="hidden" name="nama_brg" value="{{ $product->nama_brg }}" />
                            <input type="hidden" name="harga_brg" value="{{ $product->harga_brg }}" />
                            <input type="hidden" name="img_brg" value="{{ $product->img_brg }}">
                            <input type="hidden" name="currency_code" value="IDR" />
                            <input type="submit" name="add_to_cart" value="Add to cart" class="card-btn" onclick="return confirm('Product added to cart!')" />
                        </fieldset>
                    </form>
                </div>
                <div class=" product-info">
                    <p class="product-short-description">{{ $product->nama_brg }}</p>
                    <span class="price">Rp{{ $product->harga_brg }}</span>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection