@extends('layouts.main')

@section('title', 'Our Products')

@section('content')
<section class="product">
  <div class="content">
    <h2 class="product-category">Our Products!</h2>
    <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
    <div class="product-container">
      @foreach($products as $product)
      <div class="product-card">
        <div class="product-image">
          <img src="/assets/img/{{ $product->img_brg }}" class="product-thumb" alt="">
          <form action="{{ route('addToCart') }}" method="post">
            @csrf

            <fieldset>
              <input type="hidden" name="id_brg" value="{{ $product->id_brg }}" />
              <input type="hidden" name="nama_artis" value="{{ $product->nama_artis }}" />
              <input type="hidden" name="nama_brg" value="{{ $product->nama_brg }}" />
              <input type="hidden" name="harga_brg" value="{{ $product->harga_brg }}" />
              <input type="hidden" name="img_brg" value="{{ $product->img_brg }}">
              <input type="hidden" name="currency_code" value="USD" />
              <input type="submit" name="add_to_cart" value="Add to cart" class="card-btn" onclick="return confirm('Product added to cart!')" />
            </fieldset>
          </form>
        </div>
        <div class=" product-info">
          <h2 class="product-brand">{{ $product->nama_artis }}</h2>
          <p class="product-short-description">{{ $product->nama_brg }}</p>
          <span class="price">${{ $product->harga_brg }}</span>
        </div>
      </div>
      @endforeach
</section>
<section class="product">
  <div class="content">
    <h2 class="product-category">Best Sellers!</h2>
    <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
    <div class="product-container">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/bs1.png" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <h2 class="product-brand">ITZY</h2>
          <p class="product-short-description">BEST FRIENDS FOREVER 2023 Season's Greetings</p>
          <span class="price">$65</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">10% off</span>
          <img src="assets/img/bs5.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <h2 class="product-brand">YUMI'S CELLS SEASON 2</h2>
          <p class="product-short-description">유미의 세포들 시즌2 - OST</p>
          <span class="price">$54</span><span class="actual-price">$60</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/bs3.png" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <h2 class="product-brand">SEVENTEEN</h2>
          <p class="product-short-description">Concert Power Of Love Digital Code 2021</p>
          <span class="price">$90</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/bs4.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <h2 class="product-brand">DKZ</h2>
          <p class="product-short-description">Summer Photobook Pause 2022</p>
          <span class="price">$60</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">15% off</span>
          <img src="assets/img/bs2.jpeg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <h2 class="product-brand">ASTRO</h2>
          <p class="product-short-description">Photobook Magazine Official MD 2022</p>
          <span class="price">$34</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/bs6.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <h2 class="product-brand">BTS</h2>
          <p class="product-short-description">Recipe Book</p>
          <span class="price">$65</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection