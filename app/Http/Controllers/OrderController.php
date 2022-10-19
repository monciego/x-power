<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('user', 'product')->where('user_id', auth()->id())->latest()->paginate(5);
        return view('user.orders.index', compact('orders'));
    }
    /**
     * Checkout a product.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkOut(Product $product)
    {

        return view('user.products.checkout', [
            'product' => $product
        ]);
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
         $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'contact_number' => 'required|string|max:255',
            'shipping_address' => 'required|string|max:255',
        ]);

        Order::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'shipping_address' => $request->shipping_address,
            'status' => $request->status,
            'transaction_number' => $this->transactionNumber(),
        ]);

        return redirect(route('order.index'))->with('success-message', 'Thank you for your order!');
    }

    /**
     * Generates transaction number
     *
     * @return response()
     */
    public function transactionNumber()
    {
        $transaction_number = random_int(1000000000, 9999990000);

        return $transaction_number;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order = Order::where('user_id', auth()->id())->findOrFail($order->id);
        return view('user.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
