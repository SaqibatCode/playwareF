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
}
