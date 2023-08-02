<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventorys extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'product', 'quantity', 'orders', 'availability',
    ];
}
