<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollabController extends Controller
{
    public function index()
    {
        return view('collab');
    }
}
