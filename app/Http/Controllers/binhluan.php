<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Datatables;
use App\product;
use App\producttype;
use App\pricerange;
use App\producer;
use App\orderdetail;
use Illuminate\Support\Facades\Hash;
use Socialite;
use App\screen;
use App\operatingsystem;
use App\color;
use App\ram;
use App\rom;
use App\ramproduct;
use App\romproduct;
use App\star;
use App\starproduct;
use App\comment;
use Illuminate\Http\Response;
class binhluan extends Controller
{
    public function hienthibinhluan()
    {
        return view('Layout.chitiet2');
    }
    public function binhluan(Request $request)
    {
        $binhluan= new comment();
        $binhluan->content=$request->txtEditor;
        $binhluan->product=$request->productcm;
        // echo"".$binhluan->content;
        // echo"".$binhluan->product;
        // die;
        // $binhluan->user=$request->tenbinhluan;
        $binhluan->user=1;
        $binhluan->save();
       
        return redirect()->back();
    }
    public function binhluanget()
    {
       
        return view('Layout.chitiet2');
    }
}
