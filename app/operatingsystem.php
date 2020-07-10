<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operatingsystem extends Model
{
    protected $table ="operatingsystem";
    public $timestamps = false;

    
    public function product()
    {
        return $this->hasMany('App\product','operatingsystem','id');
    }
}
