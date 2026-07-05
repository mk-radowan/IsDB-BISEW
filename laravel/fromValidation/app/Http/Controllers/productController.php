<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function show()
    {
        $products = product::latest()->get();

        return view('show', [
            'products' => $products,
            'editProduct' => null,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|min:3',
        ]);

        product::create($validated);

        return redirect()->route('product.index')->with('success', 'add product succesfully');
    }

    public function edit(product $product)
    {
        $products = product::latest()->get();

        return view('show', [
            'products' => $products,
            'editProduct' => $product,
        ]);
    }

    public function update(Request $request, product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|min:3',
        ]);

        $product->update($validated);

        return redirect()->route('show.index')->with('success', 'product updated successfully');
    }

    public function destroy(product $product)
    {
        $product->delete();

        return redirect()->route('show.index')->with('success', 'product deleted successfully');
    }
}
