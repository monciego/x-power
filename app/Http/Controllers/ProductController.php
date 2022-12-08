<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =  Product::with('category_product')->latest()->paginate(6);
        $available_product = Product::where('is_available', 1)->count();
        return view('administrator.products.index', compact('products', 'available_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.products.create', [
            'categories' => CategoryProduct::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $formFields = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'category_product_id' => 'required',
            'product_image' => ['nullable','mimes:png,jpg,jpeg,gif', 'max:2048'],
        ]);


        if($request->hasFile('product_image')) {
            $product_image = $request->file('product_image')->store('products', 'public');
        } else {
             $product_image = null;
        };

        Product::create([
            'product_name' => $request->product_name,
            'category_product_id' => $request->category_product_id,
            'product_price' => $request->product_price,
            'product_description' => $request->product_description,
            'product_image' => $product_image,
            'is_available' => $request->is_available === 'on',
        ]);

        return redirect(route('products.index'))->with('success-message', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('administrator.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('administrator.products.edit', [
              'categories' => CategoryProduct::all()
        ])->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $formFields = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'category_product_id' => 'required',
            'product_image' => ['nullable','mimes:png,jpg,jpeg,gif', 'max:2048'],
        ]);

         if($request->hasFile('product_image')) {
            $product_image = $request->file('product_image')->store('products', 'public');
        } else {
            $product_image =  $product->product_image;
        };


         $product->update([
            'product_name' => $request->product_name,
            'category_product_id' => $request->category_product_id,
            'product_price' => $request->product_price,
            'product_description' => $request->product_description,
            'product_image' => $product_image,
            'is_available' => $request->is_available === 'on',
        ]);


        return redirect(route('products.index'))->with('success-message', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('danger-message', 'Product deleted successfully!');;
    }
}
