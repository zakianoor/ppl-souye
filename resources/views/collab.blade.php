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
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/other1.jpg" class="product-thumb" alt="">
                    <form action="" method="">
                        @csrf
                        <fieldset>
                            <input type="text" name="price" value="Rp79,000" class="card-btn"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/cream2.jpg" class="product-thumb" alt="">
                    <form action="" method="">
                        @csrf
                        <fieldset>
                            <input type="text" name="price" value="Rp99,000" class="card-btn"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/mask1.jpg" class="product-thumb" alt="">
                    <form action="" method="">
                        @csrf
                        <fieldset>
                            <input type="text" name="price" value="Rp219,000" class="card-btn"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/oil1.jpg" class="product-thumb" alt="">
                    <form action="" method="">
                        @csrf
                        <fieldset>
                            <input type="text" name="price" value="Rp299,000" class="card-btn"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/moist2.jpg" class="product-thumb" alt="">
                    <form action="" method="">
                        @csrf
                        <fieldset>
                            <input type="text" name="price" value="Rp249,000" class="card-btn"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/assets/img/other2.jpg" class="product-thumb" alt="">
                    <form action="" method="">
                        @csrf
                        <fieldset>
                            <input type="text" name="price" value="Rp89,000" class="card-btn"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection