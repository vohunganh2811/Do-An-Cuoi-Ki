<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ramproduct extends Model
{
    protected $table ="ramproduct";
    public $timestamps = false;

    public function ram()
    {
        return $this->belongsTo('App\ram','idram','idram');
    }

    public function product()
    {
        return $this->belongsTo('App\product','idproduct','idproduct');
    }
}
