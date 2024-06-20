<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brandName');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'productCategory');
    }

   
}
