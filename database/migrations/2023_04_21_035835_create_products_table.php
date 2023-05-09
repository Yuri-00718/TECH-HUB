<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'img' => 'required|image',
            'product_for' => 'nullable|string'
        ]);

        $product = new Product;
        $product->user_id = auth()->user()->id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->product_for = $request->product_for;

        // Handle file upload
        if ($request->hasFile('img')) {
            $filename = time() . '_' . $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/images', $filename);
            $product->img = $filename;
        }

        $product->save();

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'product_for' => 'nullable|string'
        ]);

        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->product_for = $request->product_for;

        // Handle file upload
        if ($request->hasFile('img')) {
            $filename = time() . '_' . $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/images', $filename);
            $product->img = $filename;
        }

        $product->save();

        return redirect()->route('products.index');
    }
}