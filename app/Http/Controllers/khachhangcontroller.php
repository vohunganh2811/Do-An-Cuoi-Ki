<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class khachhangcontroller extends Controller
{
    public function xemkhachhang()
    {
        return view('admin.Layout.khachhang');
    }

    public function xoakhachhang($id)
    {
        customer::where('id', $id)->where('deleted', 0)->update(['deleted' => 1]);
        return redirect()->back();
    }

   
}
