<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

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

        if($product->is_available === 0) {
             abort(403, 'This product is not available!');
        }

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

    function orderNow(){

      $userId = Auth::user()->id;
     $total_price= $products= DB::table('carts')
      ->join('products', 'carts.product_id','=','products.id')   //join function---first parammeter the table want to join and second parameter the columns of current table
      ->where('carts.user_id',$userId)
      ->sum('products.product_price');

      return view('user.products.checkout-all', compact('total_price'));
    }

        function storeAll(Request $request)
    {
      $userId = Auth::user()->id;
      $allCart= Cart::where("user_id", $userId)->get();
              $date = Carbon::now();
        $delivery_date = $date->addWeeks(1)->format('Y-m-d');

         DB::table('products')->decrement('available_product', 1);
      foreach($allCart as $cart){
        $order = new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="Pending";
        $order->full_name=$request->full_name;
        $order->email=$request->email;
        $order->contact_number=$request->contact_number;
        $order->shipping_address=$request->shipping_address;
        $order->delivery_date=$delivery_date;
        $order->transaction_number = $this->transactionNumber();


        $order->save();
        Cart::where("user_id", $userId)->delete();
      }
      $request->input();
      return redirect(route('order.index'))->with('success-message', 'Thank you for your order!');
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

        $date = Carbon::now();
        $delivery_date = $date->addWeeks(1)->format('Y-m-d');

         DB::table('products')->decrement('available_product', 1);


        Order::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'shipping_address' => $request->shipping_address,
            'status' => $request->status,
            'delivery_date' => $delivery_date,
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
