<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rom extends Model
{
    protected $table ="rom";
    public $timestamps = false;

    public function romproduct()
    {
        return $this->hasMany('App\romproduct','idrom','id');
    }
}
