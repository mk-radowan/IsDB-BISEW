<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('frontend.pages.home', compact('products'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
}
