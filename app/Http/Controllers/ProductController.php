<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
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

    // create product
    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // validate request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0'
        ]);

        // create and save product using mass assignment
        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // update product
    public function edit(Request $request):View {
        return view('products.edit', [
            'product' => Product::findOrFail($request->route('products'))
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        // find product by id
        $product = Product::findOrFail($request->route('product'));

        // validate request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0'
        ]);

        // update product using mass assignment
        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // delete product
    public function destroy(Request $request): RedirectResponse
    {
        // find product by id
        $product = Product::findOrFail($request->route('product'));

        // delete product
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
