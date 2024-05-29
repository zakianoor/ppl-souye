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
                    <form action="" method="">
                        @csrf
                        <fieldset>
                            <input type="text" name="price" value="Rp{{ $product->harga_brg }}" class="card-btn"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection