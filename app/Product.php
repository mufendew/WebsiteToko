<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catagory()
    {
        return $this->belongsToMany('App\Catagory');
    }
    public function whislist()
    {
        return $this->hasMany('App\Whislist');
    }
    public function merek()
    {
        return $this->hasOne('App\Merek');
    }
}
