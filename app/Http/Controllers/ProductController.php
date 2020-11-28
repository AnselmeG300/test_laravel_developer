<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Utilities\Image;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;

#Controller permettant de gerer les produits
class ProductController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //
        Image::recoveredImage($request);
        $request['user_id'] = Auth::id();
        Product::create($request->all());
        return redirect()->back()->withStatus(__("Product ".$request['name']." save")); 
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
    public function edit(Product $product)
    {
        //
        $product = Product::findOrFail($product->id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
        if(empty($request['oldFile']))
            Image::recoveredImage($request);
        else
            $request['picture'] = $request['oldFile'];
        $request['user_id'] = Auth::id();
        $product = Product::findOrFail($product->id);
        $product->update($request->all());
        return redirect()->back()->withStatus(__("Product Information ".$request['name']." update")); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product = Product::findOrFail($product->id);
        Product::destroy($product->id);
        return redirect()->route('dashboard')->withStatus(__("Product ".$product['name']." delete"));
    }
}
