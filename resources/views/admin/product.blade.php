@include('layouts.navigation')

<x-app-layout>
    <div class="py-8">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto my-8">
                    <div class="py-4">
                        <h1 class="text-2xl font-bold mb-4">Products</h1>
                        @if (session('success'))
                            <div class="bg-green-500 text-white p-3 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="py-2 px-4">ID</th>
                                        <th class="py-2 px-4">Name</th>
                                        <th class="py-2 px-4">Price</th>
                                        <th class="py-2 px-4">Stock</th>
                                        <th class="py-2 px-4">Image</th>
                                        <th class="py-2 px-4">Description</th>
                                        <th class="py-2 px-4">Category ID</th>
                                        <th class="py-2 px-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    @foreach ($products as $product)
                                        <tr class="border-b">
                                            <td class="py-2 px-4 text-center">{{ $product->id_brg }}</td>
                                            <td class="py-2 px-4 text-center">{{ $product->nama_brg }}</td>
                                            <td class="py-2 px-4 text-center">{{ $product->harga_brg }}</td>
                                            <td class="py-2 px-4 text-center">{{ $product->stok_brg }}</td>
                                            <td class="py-2 px-4 text-center">
                                                @if ($product->img_brg)
                                                    <img src="/assets/img/{{$product->img_brg}}" alt="{{ $product->nama_brg }}" class="w-12 h-12 object-cover rounded">
                                                @endif
                                            </td>
                                            <td class="py-2 px-4">{{ $product->ket_brg }}</td>
                                            <td class="py-2 px-4 text-center">{{ $product->id_kategori }}</td>
                                            <td class="py-2 px-4 flex flex-col space-y-2">
                                                <a href="{{ route('admin.products.edit', $product->id_brg) }}" class="w-20 bg-yellow-500 text-white px-3 py-1 rounded">Update</a>
                                                <form action="{{ route('admin.products.destroy', $product->id_brg) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="w-20 bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('admin.products.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
