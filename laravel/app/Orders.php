<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'order_id', 'address', 'products', 'total',
    ];
}
