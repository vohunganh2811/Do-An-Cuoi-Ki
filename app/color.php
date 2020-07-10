<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $table ="color";
    public $timestamps = false;
    public function colorproduct()
    {
        return $this->hasMany('App\colorproduct','idcolor','id');
    }
}
