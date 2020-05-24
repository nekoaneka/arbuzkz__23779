<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function healthy_drink()
    {
        $products = Product::all();
        return view('catalog\healthy_eating\healthy_drink')->with(['products' => $products]);
    }

    public function flour()
    {
        $products = Product::all();
        return view('catalog\healthy_eating\flour')->with(['products' => $products]);
    }
}
