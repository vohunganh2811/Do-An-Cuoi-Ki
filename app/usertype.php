<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    protected $table ="usertype";
    public $timestamps = false;

    public function User()
    {
        return $this->hasMany('App\User', 'usertype', 'id'); 

    }
}
