<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id','address_id','status','coupon','payment','total','weight_total'
    ];
}
