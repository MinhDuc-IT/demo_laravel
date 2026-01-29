<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function add()
    {
        return view('product.add');
    }
    
    public function show($id)
    {
        return view('product.show', ['id' => $id]);
    }
}
