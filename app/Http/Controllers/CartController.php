<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Add to cart product.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
        $cart = new Cart;
        $cart->user_id=$request->user_id;
        $cart->product_id=$request->product_id;
        $cart->save();
        return redirect(route('user-products.index'))->with('success-message', 'Added to cart');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $userId = Auth::user()->id;
      $products= DB::table('carts')
      ->join('products', 'carts.product_id','=','products.id')   //join function---first parammeter the table want to join and second parameter the columns of current table
      ->where('carts.user_id',$userId)
      ->select('products.*','carts.id as cart_id')
      ->get();

      return view('user.cart.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect(route('cart.index'))->with('danger-message', 'Product Removed to cart');
    }
}
