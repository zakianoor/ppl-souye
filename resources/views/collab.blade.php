@extends('layouts.main')

@section('title', 'collab')

@section('content')<section class="head">
    <div class="collab">
        <img src="assets/img/collab1.jpg">
        <div class="content">
            <h1>DEAR지아</h1>
        </div>
        <img src="assets/img/collab2.jpg">
    </div>
</section>
<section class="collab-content">
    <div class="image">
        <img src="assets/img/collab3.jpg">
    </div>
    <div class="content">
        <div class="collab-container">
            @foreach($collab as $product)
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/{{ $product->img_brg }}" class="product-thumb" alt="">
                    <form action="{{ route('addToCartCollab') }}" method="post">
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
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection