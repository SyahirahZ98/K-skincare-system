<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        $cart_product = Cart::all();
        return view('layout.cart', compact('products'));
    }
}
