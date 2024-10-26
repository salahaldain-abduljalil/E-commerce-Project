<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $guarded = [];

    public function products(){

        return $this->belongsTo(Product::class);
    }
    public function orders(){

        return $this->belongsTo(Order::class);
    }
}
