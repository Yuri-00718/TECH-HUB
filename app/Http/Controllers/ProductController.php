<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
           //gets the id of the authenticated user
           $user = Auth::user();
           $admin = false;
            // get all the products
            $products = Product::all();
        // if there is an authenticated user, check if admin
        // if yes, get only the products with his id
        if ($user != null) {
            if ($user->isAdmin) {
                $admin = true;
                $products = Product::where('user_id', '=', $user->id)->get();
            }
        }
        //pass the data to the view
        return view('shop', ['products' => $products, 'admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProduct');
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    // get the filename of image uploaded
    $filename = $request->img->getClientOriginalName();
    // store in public folder
    $request->img->move(public_path('img'), $filename);

    $product = new Product([
        'product_name' => $request->input('product_name'),
        'price' => $request->input('product_price'),
        'img' => $filename,
        'user_id' => Auth::id(),
        'product_for' => $request->input('product_for')
    ]);

    $product->save();
    return redirect('shop');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('editProduct', ['product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_name = $request->input('product_name');
        $product->price = $request->input('product_price');
    
        // Set the product_for field
        $product->product_for = $request->input('product_for');
    
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('img/' . $filename));
            $product->img = $filename;
        }
        
        $product->save();
        return redirect('/shop');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $product = Product::find($id);


        $product->delete();
        return redirect("shop");
    }

}