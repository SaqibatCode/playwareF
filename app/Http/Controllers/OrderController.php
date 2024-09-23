<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrders(){

        $title = 'All Orders';
        return view('admin.pages.order.all-orders', compact('title'));
    }
}
