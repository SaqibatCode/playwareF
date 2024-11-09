<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function all_products(){
        return $this->hasOne(Products::class, 'id', 'product_id');
    }

    public function seller_details(){
        return $this->hasOne(User::class, 'id', 'seller_id');
    }

    public function totalAmountByParentOrder($parentOrderId)
    {
        return self::where('parent_order_id', $parentOrderId)->sum('total_amount');
    }

    public function pay_proof()
    {
        return $this->belongsTo(Payment::class, 'order_id', 'id');
    }
}
