<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class romproduct extends Model
{
    protected $table ="romproduct";
    public $timestamps = false;

    public function rom()
    {
        return $this->belongsTo('App\rom','idrom','idrom');
    }

    public function product()
    {
        return $this->belongsTo('App\product','idproduct','idproduct');
    }
}
