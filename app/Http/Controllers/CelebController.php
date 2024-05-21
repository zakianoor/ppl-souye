<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelebController extends Controller
{
    public function index()
    {
        return view('celeb');
    }
}
