<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colorproduct extends Model
{
    protected $table ="colorproduct";
    public $timestamps = false;
    public function color()
    {
        return $this->belongsTo('App\color','idcolor','idcolor');
    }

    public function product()
    {
        return $this->belongsTo('App\product','idproduct','idproduct');
    }
}
