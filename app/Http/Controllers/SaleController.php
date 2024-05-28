<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        return view('sale', [
            'sale' => Product::all(),
        ]);
    }
}
