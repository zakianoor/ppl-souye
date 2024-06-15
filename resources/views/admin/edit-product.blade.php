@include('layouts.navigation')

<x-app-layout>
    <div class="py-8">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto my-8">
                    <div class="py-4">
                        <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
                        @if ($errors->any())
                            <div class="bg-red-500 text-white p-3 rounded mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.products.update', $product->id_brg) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="nama_brg" class="block text-gray-700">Name</label>
                                <input type="text" id="nama_brg" name="nama_brg" value="{{ $product->nama_brg }}" class="form-input mt-1 block w-full">
                            </div>
                            <div class="mb-4">
                                <label for="harga_brg" class="block text-gray-700">Price</label>
                                <input type="number" id="harga_brg" name="harga_brg" value="{{ $product->harga_brg }}" class="form-input mt-1 block w-full">
                            </div>
                            <div class="mb-4">
                                <label for="stok_brg" class="block text-gray-700">Stock</label>
                                <input type="number" id="stok_brg" name="stok_brg" value="{{ $product->stok_brg }}" class="form-input mt-1 block w-full">
                            </div>
                            <div class="mb-4">
                                <label for="ket_brg" class="block text-gray-700">Description</label>
                                <textarea id="ket_brg" name="ket_brg" class="form-textarea mt-1 block w-full" rows="3">{{ $product->ket_brg }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="id_kategori" class="block text-gray-700">Category ID</label>
                                <input type="number" id="id_kategori" name="id_kategori" value="{{ $product->id_kategori }}" class="form-input mt-1 block w-full">
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
