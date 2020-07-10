<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table ="customer";
    public $timestamps = false;
   

    public function order()
    {
        return $this->hasMany('App\order','customerid','id');
    }
   
}
