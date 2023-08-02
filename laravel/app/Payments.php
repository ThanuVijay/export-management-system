<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'card_no', 'expiry', 'cvv', 'card_holder',
    ];
}
