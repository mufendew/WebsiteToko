<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\Product');
    }
}
