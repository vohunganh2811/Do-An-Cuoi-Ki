<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class product extends Model
{
    protected $table ="product";
    public $timestamps = false;
    public $fillable = ['name'];
    public function producttype()
    {
        return $this->belongsTo('App\producttype', 'producttype', 'id'); 
    }

    public function producer()
    {
        return $this->belongsTo('App\producer','producer', 'id');
    }

    public function orderdetail()
    {
        return $this->hasMany('App\orderdetail','productid','id');
    }

    public function comment()
    {
        return $this->hasMany('App\comment', 'product','id');
    }

    public function colorproduct()
    {
        return $this->hasMany('App\colorproduct', 'idproduct','id');
    }

    public function ramproduct()
    {
        return $this->belongsTo('App\ramproduct','idproduct','id');
    }

    public function starproduct()
    {
        return $this->hasMany('App\starproduct', 'idproduct','id');
    }

    public function romproduct()
    {
        return $this->belongsTo('App\romproduct','idproduct','id');
    }

   
    public function screen()
    {
        return $this->belongsTo('App\screen','screen','id');
    }

    public function operatingsystem()
    {
        return $this->belongsTo('App\operatingsystem','operatingsystem','id');
    }
   
}
