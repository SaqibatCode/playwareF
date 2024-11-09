<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{



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
    $lastOrder = Order::orderByRaw('CAST(parent_order_id AS UNSIGNED) DESC')->first();
    $newParentOrderId = $lastOrder ? $lastOrder->parent_order_id + 1 : 1;
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
        $order->total_amount = $item['total'];
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


    public function getOrderDetails(Request $req){

        $req->validate([
            'order_id' => 'required',
        ]);
        $order = Order::with('all_products')->where('parent_order_id', $req->order_id)->get();

        return response()->json($order);
    }

    public function postPaid(Request $req)
    {

        $req->validate([
            'order_id' => 'required|string',
            'uploadPaymentScreenShot' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $order_id = $req->order_id;

        $orders = Order::where('parent_order_id', $order_id)->get();

        if ($orders->isEmpty()) {
            return response()->json(['message' => 'No orders found for this parent order ID.'], 404);
        }

        foreach ($orders as $order) {
            $order->paymentCheck = 'Paid';
            $order->save();
        }


        if ($req->hasFile('uploadPaymentScreenShot')) {
            $file = $req->file('uploadPaymentScreenShot');
            $filename = 'payment_screenshot_' . time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('payment_screenshots'), $filename);

            $payment = new Payment;
            $payment->order_id = $orders->first()->parent_order_id;
            $payment->payment_screenshot =  $filename;
            $payment->save();
        }

        return back()->with(['paymentSuccess' => 'Orders updated successfully to Paid and payment recorded.']);
    }

}
