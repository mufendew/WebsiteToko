<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class whislist extends Model
{
    protected $fillable = [
        'user_id', 'product_id'
    ];
}
