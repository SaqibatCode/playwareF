<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function scopeRoot($query)
    {
        $query->whereNull('parent_id');
    }

    public function children(){
        return $this->hasMany(Categories::class, 'parent_id');
    }

    public function parent(){
        return $this->belongsTo(Categories::class, 'parent_id');
    }
}
