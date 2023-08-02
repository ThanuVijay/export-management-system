<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'empid', 'name', 'sector', 'contact',
    ];
}
