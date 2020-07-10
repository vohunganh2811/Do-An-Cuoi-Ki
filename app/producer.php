<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producer extends Model
{
    protected $table ="producer";
    public $timestamps = false;
    public function product()
    {
        return $this->hasMany('App\product', 'producer', 'id'); 

    }
}
