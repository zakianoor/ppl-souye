@extends('layouts.main')

@section('title', 'shop')

@section('content')

<section class="product">
    <div class="content">
        <h2 class="product-category">toner</h2>
        <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
        <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
        <div class="product-container">
            @foreach($shop as $product)
                <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/{{ $product->img_brg }}" class="product-thumb" alt="">
                    <form action="{{ route('addToCart') }}" method="post">
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
                    <span class="price">Rp{{ number_format($product->harga_brg) }}</span>
                </div>
        </div>
            @endforeach
    </div>
</section>
<section class="product">
    <div class="content">
        <h2 class="product-category">moisturizer</h2>
        <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
        <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
        <div class="product-container">
            @foreach($shop as $product)
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/{{ $product->img_brg }}" class="product-thumb" alt="">
                    <form action="{{ route('addToCart') }}" method="post">
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
                    <span class="price">Rp{{ number_format($product->harga_brg) }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="product">
    <div class="content">
        <h2 class="product-category">serum</h2>
        <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
        <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
        <div class="product-container">
            @foreach($shop as $product)
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/{{ $product->img_brg }}" class="product-thumb" alt="">
                    <form action="{{ route('addToCart') }}" method="post">
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
                    <span class="price">Rp{{ number_format($product->harga_brg) }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection