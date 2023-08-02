<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'invoice_id', 'order', 'status', 'amount',
    ];
}
