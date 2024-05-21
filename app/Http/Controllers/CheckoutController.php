<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $carts = Cart::where('id_user', Session::get('user')->id_user)->where('status', 1)->get();
        $totalCart = Cart::where('id_user', Session::get('user')->id_user)->where('status', 1)->count();

        return view('checkout', [
            'carts' => $carts,
            'totalCart' => $totalCart,
        ]);
    }

    public function processCheckout(Request $request)
    {
        $transaksi = Transaksi::create([
            'total_transaksi' => $request->grand_total,
            'tgl_transaksi' => Carbon::now('Asia/Jakarta'),
            'norek_buyer' => $request->norek,
            'namarek_buyer' => $request->namarek,
            'bank_buyer' => $request->bank,
            'id_user' => Session::get('user')->id_user,
            'nama_buyer' => $request->nama,
            'alamat_buyer' => $request->alamat,
            'nohp_buyer' => $request->nohp,
            'order' => null,
        ]);

        Cart::where('status', 1)->where('id_user', Session::get('user')->id_user)->update([
            'status' => 2,
            'id_transaksi' => $transaksi->id
        ]);

        return redirect()->route('done');
    }
}
