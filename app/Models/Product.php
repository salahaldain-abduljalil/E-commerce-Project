<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $casts =[
        'images' => 'array'
    ];

    public function category(){

        return $this->belongsTo(category::class);
    }
    public function orderitems(){

        return $this->belongsTo(OrderItem::class);
    }
    public function brand(){

        return $this->belongsTo(Brand::class);
    }
}
