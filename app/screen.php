<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class screen extends Model
{
    protected $table ="screen";
    public $timestamps = false;

    public function product()
    {
        return $this->hasMany('App\product','screen','id');
    }
}
