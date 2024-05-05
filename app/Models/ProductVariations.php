<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariations extends Model
{
    use HasFactory;

    protected $fillable = [
        'productId',
        'color',
        'size',
        'material',
        'style',
        'quantity',
        'image',
        'price'
    ];
}
