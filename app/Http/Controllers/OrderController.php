<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

        $lastParentOrderId = Order::max('parent_order_id');
        $newParentOrderId = $lastParentOrderId ? $lastParentOrderId + 1 : 1;

        $ordersToInsert = [];

        // Retrieve cart items from the session
        $cartItems = Session::get('cart', []);

        // Check if cart is not empty
        if (empty($cartItems)) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        $address = $req->address . ', ' . $req->city . ', ' . $req->zip;

        foreach ($cartItems as $item) {
            $ordersToInsert[] = [
                'parent_order_id' => $newParentOrderId,
                'customer_id' => Auth::id(), // Use the user's ID as customer_id
                'seller_id' => $item['vendor_id'],
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],  // Assuming 'quantity' is available in cart items
                'total_amount' => $item['price'],
                'status' => 'In Progress',
                'shipping_address' => $address,
                'billing_address' => $address,
                'paymentType' => $req->paymentMethod,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::beginTransaction();
        try {
            Order::insert($ordersToInsert);
            DB::commit();
            return view('user.Pages.success');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => 'Order creation failed', 'error' => $e->getMessage()], 500);
        }
    }
}
