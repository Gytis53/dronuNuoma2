<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view('store')->with('product', $products);
    }

    public function show($pid)
    {
        $product = Product::where('product_id', $pid)->firstOrFail();
        $interested = Product::where('product_id', '!=', $pid)->get()->random(4);

        return view('product')->with(['product' => $product, 'interested' => $interested]);
    }







}
