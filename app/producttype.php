<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
    protected $table ="producttype";
    public $timestamps = false;
    public function product()
    {
        return $this->hasMany('App\product', 'producttype', 'id'); 

    }
}
