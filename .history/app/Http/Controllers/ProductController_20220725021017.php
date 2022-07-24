<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public 
    return view('product.index')
    ->with('products', Product::get());
}
