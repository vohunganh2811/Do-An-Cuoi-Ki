<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $table ="orderdetail";
    public $timestamps = false;
    public function order()
    {
        return $this->belongsTo('App\order','orderid','id');
    }
    public function product()
    {
        return $this->belongsTo('App\product','productid','id');
    }
}
