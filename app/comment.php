<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table ="comment";
    public $timestamps = false;
    public function User()
    {
        return $this->belongsTo('App\User','user','id');
    }

    public function product()
    {
        return $this->belongsTo('App\product','product','id');
    }
}
