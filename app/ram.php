<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ram extends Model
{
    protected $table ="ram";
    public $timestamps = false;

    public function ramproduct()
    {
        return $this->hasMany('App\ramproduct','idram','id');
    }
}
