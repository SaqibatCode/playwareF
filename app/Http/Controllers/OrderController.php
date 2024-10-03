<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function getOrders()
    {

        $title = 'All Orders';
        return view('admin.pages.order.all-orders', compact('title'));
    }


    // front-end methods



    public function createOrder(Request $req)
{
    $req->validate([
        'fullName' => 'required',
        'address' => 'required',
        'city' => 'required',
        'zip' => 'required',
        'state' => 'required',
        'number' => 'required',
        'email' => 'required',
        'paymentMethod' => 'required',
    ]);

    // Generate new parent order ID
    $lastParentOrderId = Order::max('parent_order_id');
    $newParentOrderId = $lastParentOrderId ? $lastParentOrderId + 1 : 1;

    // Retrieve cart items from the session
    $cartItems = Session::get('cart', []);

    // Check if cart is not empty
    if (empty($cartItems)) {
        return response()->json(['message' => 'Cart is empty'], 400);
    }

    $address = $req->address . ', ' . $req->city . ', ' . $req->zip;

    foreach ($cartItems as $item) {


        $order = new Order();
        $order->parent_order_id = $newParentOrderId;
        $order->customer_id = Auth::id();
        $order->seller_id = $item['vendor_id'];
        $order->product_id = $item['id'];
        $order->quantity = $item['quantity'];
        $order->total_amount = $item['price'];
        $order->status = 'In Progress';
        $order->shipping_address = $address;
        $order->billing_address = $address;
        $order->paymentType = $req->paymentMethod;
        $order->created_at = now();
        $order->updated_at = now();
        $order->save();

        $product = Products::findOrFail($item['id']);

        if ($product->productQuantity > 0) {
            $product->productQuantity -= 1;
            $product->save();
        }
    }
    session()->forget('cart');
    session()->flash('success', 'Your order has been placed successfully!');
    return redirect()->route('success')->with('parentOrderId', $newParentOrderId);
}

}
