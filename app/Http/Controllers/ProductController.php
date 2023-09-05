<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([

        'name'=>$request->input('name'),
        'price'=>$request->input('price'),
        'img'=>$request->file('img')->store('public/product'),
        'description'=>$request->input('description'),
        'user_id'=> Auth::user()->id

        ]);
return redirect()->route('welcome')->with('message','Prodotto aggiunto con successo !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $oldimg=$product->img;
        $product->update([
            'img'=> $request->file('img') == null ? $oldimg : $request->file('img')->store('public/product'),
            'name'=> $request->input('name'),
            'description'=> $request->input('description'),
            'price'=> $request->input('price'),
        ]);
        if($request->file('img') != null){
            Storage::delete($oldimg);
        }
        return redirect()->route('welcome')->with('message','prodotto modificato corretamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('message','prodotto eliminato correttamente');
    }
}
