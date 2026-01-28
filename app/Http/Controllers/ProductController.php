<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller implements HasMiddleware
{
    public function middleware(): array
    {
        return [
            CheckTimeAccess::class,
        ];
    }

    public function index()
    {
        return view('product.index');
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
