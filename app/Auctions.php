<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auctions extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'auction_id', 'reason', 'min_bid', 'location',
    ];
}
