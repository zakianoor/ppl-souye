@extends('layouts.main')

@section('title', 'Shop')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('images/' . $product->img_brg) }}" class="card-img-top" alt="{{ $product->nama_brg }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nama_brg }}</h5>
                        <p class="card-text">{{ $product->ket_brg }}</p>
                        <p class="card-text"><strong>Harga: </strong>Rp {{ number_format($product->harga_brg, 0, ',', '.') }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form action="{{ route('cart.add', $product->id_brg) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                </form>
                            </div>
                            <small class="text-muted">Stok: {{ $product->stok_brg }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
