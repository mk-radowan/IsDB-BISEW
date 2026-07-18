<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        if (session('cart')) {
            return view('checkout');
        }
        return redirect()->back();
    }
}
