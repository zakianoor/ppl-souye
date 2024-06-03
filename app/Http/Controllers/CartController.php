<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('id_user', Auth::id())->where('status', 'in_cart')->get();
        $totalCart = $carts->count();

        return view('cart', [
            'carts' => $carts,
            'totalCart' => $totalCart
        ]);
    }

    public function addToCart(Request $request, $id_brg)
    {
        $product = Product::find($id_brg);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = new Cart();
        $cart->nama_brg = $product->nama_brg;
        $cart->harga_brg = $product->harga_brg;
        $cart->qty_brg = 1; // Default quantity
        $cart->img_brg = $product->img_brg;
        $cart->id_user = Auth::id(); // Assuming the user is logged in
        $cart->id_brg = $product->id_brg;
        $cart->status = 'in_cart';
        $cart->id_transaksi = null;

        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart.');
    }
    
    public function addToCartSale(Request $request)
    {
        Cart::create([
            'nama_brg' => $request->nama_brg,
            'harga_brg' => $request->harga_brg,
            'qty_brg' => 1,
            'img_brg' => $request->img_brg,
            'id_user' => Session::get('user')->id_user,
            'id_brg' => $request->id_brg,
            'status' => 1,
            'id_transaksi' => null
        ]);

        return redirect()->route('sale');
    }

    public function addToCartCollab(Request $request)
    {
        Cart::create([
            'nama_brg' => $request->nama_brg,
            'harga_brg' => $request->harga_brg,
            'qty_brg' => 1,
            'img_brg' => $request->img_brg,
            'id_user' => Session::get('user')->id_user,
            'id_brg' => $request->id_brg,
            'status' => 1,
            'id_transaksi' => null
        ]);

        return redirect()->route('collab');
    }

    public function removeCart($id)
    {
        $cart = Cart::where('id_cart', $id);

        $cart->delete();

        return redirect()->back();
    }
}
