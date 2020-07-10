<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class star extends Model
{
    protected $table ="star";
    public $timestamps = false;

    public function starproduct()
    {
        return $this->hasMany('App\starproduct','idstar','id');
    }
}
