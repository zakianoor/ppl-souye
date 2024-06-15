<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function create()
    {
        return view('admin.add-product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_brg' => 'required',
            'harga_brg' => 'required|numeric',
            'stok_brg' => 'required|numeric',
            'img_brg' => 'nullable|image',
            'ket_brg' => 'required',
            'id_kategori' => 'required|numeric',
        ]);

        $input = $request->all();
        $input['img_brg'] = 'mask1.jpg';

        Product::create($input);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_brg' => 'required',
            'harga_brg' => 'required|numeric',
            'stok_brg' => 'required|numeric',
            'img_brg' => 'nullable|image',
            'ket_brg' => 'required',
            'id_kategori' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $input = $request->all();

        $product->update($input);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
