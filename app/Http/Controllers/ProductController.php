<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view("products",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create-products");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields= $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $filename=$request->file('image')->store('/images/products2','public');
        $fields['image']=$filename;
        Product::create($fields);
        return redirect()->route('products.index')->with('success',"Successfully product created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("update",compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $fields= $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required|max:100',
            'image' => 'image|mimes:jpeg,png,jpg',

        ]);
        if($request->image!=null){
            $filename=$request->file('image')->store('/images/products2','public');
            $fields['image']=$filename;
        }
        $product->update($fields);
        return redirect()->route('products.index')->with('success','Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $product)
    {
        Product::destroy( $product );

        return redirect()->route('products.index')->with('success',"Product deleted successful");
    }
}
