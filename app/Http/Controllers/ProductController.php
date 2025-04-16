<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    // show all products / list all products
    public function index(): View
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    // show single product
    public function show(Product $product){}

    // create product
    public function create(){}

    // update product
    public function edit(){}

    // delete product
    public function delete(){}
}
