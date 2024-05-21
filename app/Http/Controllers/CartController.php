<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('id_user', Session::get('user')->id_user)->where('status', 1)->get();
        $totalCart = Cart::where('id_user', Session::get('user')->id_user)->where('status', 1)->count();

        return view('cart', [
            'carts' => $carts,
            'totalCart' => $totalCart
        ]);
    }

    public function addToCart(Request $request)
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

        return redirect()->route('products');
    }

    public function removeCart($id)
    {
        $cart = Cart::where('id_cart', $id);

        $cart->delete();

        return redirect()->back();
    }
}
