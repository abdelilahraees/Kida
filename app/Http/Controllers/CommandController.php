<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commands=Command::all();
        return view("home",compact("commands"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'product_id' => 'required',
        ]);

        Command::create($fields);
        return redirect()->route('welcome')->with('success', 'Product Updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        $product = Product::query()->where("id", $product)->first();

        return view("command", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $command)
    {
        Command::destroy( $command );

        return redirect()->route('commands.index')->with('success',"Product deleted successful");
    }
}
