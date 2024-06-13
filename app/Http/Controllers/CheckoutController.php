<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function index()
    {
        $carts = Cart::where('id_user', Auth::id())->where('status', 1)->get();
        $totalCart = Cart::where('id_user', Auth::id())->where('status', 1)->count();

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
            'id_user' => Auth::id(),
            'nama_buyer' => $request->nama,
            'alamat_buyer' => $request->alamat,
            'nohp_buyer' => $request->nohp,
            'order' => null,
        ]);

        // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->grand_total,
            )
        );
        
        $snapToken = Snap::getSnapToken($params);

        Cart::where('status', 1)->where('id_user', Auth::id())->update([
            'status' => 2,
            'id_transaksi' => $transaksi->id_transaksi,
        ]);

        $transaksi->snap_token = $snapToken;
        $transaksi->save();

        return redirect()->route('payment', $transaksi->id_transaksi);
    }

    public function showPayment($id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);

        if (!$transaksi) {
            return redirect()->route('checkout')->withErrors('Transaction not found.');
        }

        return view('payment', compact('transaksi'));
    }

    public function success()
    {
        return view('done');
    }
}
