@extends('layouts.main')

@section('title', 'home')

@section('content')
<section class="head">
  <div class="message">
    <img src="assets/img/homejia1.jpg" style=" margin-left: 125px;">
    <div class="content">
      <p>From 지아,<br>
        <br>
        Ever wondered how I achieved my radiant complexion?<br>
        Together with Souye, I've formulated a powerful skincare line of products inspired by my beauty secrets.<br>
        <br>
        Get ready to discover your own radiance! 
      </p>
    </div>
    <img src="assets/img/homejia2.jpg" style=" margin-right: 125px;">
  </div>
</section>
<section class="banner-about">
  <div class="about">
      <div class="collab">
        <h2>DEAR지아’s Night Skincare Routine</h2>
      </div>
  </div>
</section>
<section class="collab-content">
  <div class="home">
      <img src="assets/img/home1.jpg">
  </div>
  <div class="content">
      <div class="banner">
        <img src="assets/img/home2.jpg">
      </div>
      <div class="collab-container">
        <div class="product-card">
          <div class="product-image">
            <img src="assets/img/cream1.jpg" class="product-thumb" alt="">
            <button class="card-btn">Rp109000</button>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="assets/img/moist2.jpg" class="product-thumb" alt="">
            <button class="card-btn">Rp249000</button>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="assets/img/other1.jpg" class="product-thumb" alt="">
            <button class="card-btn">Rp79000</button>
          </div>
        </div>
      </div>
  </div>
</section>
<section class="product" id="bestseller">
  <div class="content">
    <h2 class="product-category">Best Sellers!</h2>
    <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
    <div class="product-container">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/other1.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <p class="product-short-description">souye sleeping eye cover</p>
          <span class="price">Rp79000</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">10% off</span>
          <img src="assets/img/moist2.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <p class="product-short-description">souye niacinamide moisturizer</p>
          <span class="price">Rp224100</span><span class="actual-price">Rp249000</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/cream1.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <p class="product-short-description">souye hand cream</p>
          <span class="price">Rp109000</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">15% off</span>
          <img src="assets/img/moist1.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <p class="product-short-description">souye retinol moisturizer</p>
          <span class="price">Rp211650</span><span class="actual-price">Rp249000</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/oil1.jpg" class="product-thumb" alt="">
          <button class="card-btn">Add To Cart</button>
        </div>
        <div class="product-info">
          <p class="product-short-description">souye tea tree oil</p>
          <span class="price">Rp299000</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection