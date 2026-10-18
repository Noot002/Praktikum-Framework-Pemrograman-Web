<?php

namespace App\Http\Controllers;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::first();

        return view('dashboard', compact('product'));
    }
}
