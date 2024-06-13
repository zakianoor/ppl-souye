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
        $carts = Cart::where('id_user', Auth::id())->where('status', 1)->get();
        $totalCart = $carts->count();

        return view('cart', [
            'carts' => $carts,
            'totalCart' => $totalCart
        ]);
    }

    public function addToCart(Request $request, $id_brg)
    {
        Cart::create([
            'nama_brg' => $request->nama_brg,
            'harga_brg' => $request->harga_brg,
            'qty_brg' => 1,
            'img_brg' => $request->img_brg,
            'id_user' => Auth::id(),
            'id_brg' => $request->id_brg,
            'status' => 1,
            'id_transaksi' => null
        ]);

        return redirect()->route('shop');
    }
    
    public function addToCartSale(Request $request)
    {
        Cart::create([
            'nama_brg' => $request->nama_brg,
            'harga_brg' => $request->harga_brg,
            'qty_brg' => 1,
            'img_brg' => $request->img_brg,
            'id_user' => Auth::id(),
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
            'id_user' => Auth::id(),
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
