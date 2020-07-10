<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table ="order";
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\customer','customerid','id');
    }

    public function orderdetail()
    {
        return $this->hasMany('App\orderdetail','orderid','id');
    }
}
