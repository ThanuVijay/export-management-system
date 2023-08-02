<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'location', 'vendor_description', 'vendor_price',
    ];
}
