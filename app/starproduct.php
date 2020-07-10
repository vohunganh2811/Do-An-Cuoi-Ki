<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class starproduct extends Model
{
    protected $table ="starproduct";
    public $timestamps = false;

    public function star()
    {
        return $this->belongsTo('App\star','idstar','idstar');
    }

    public function product()
    {
        return $this->belongsTo('App\product','idproduct','idproduct');
    }
}
