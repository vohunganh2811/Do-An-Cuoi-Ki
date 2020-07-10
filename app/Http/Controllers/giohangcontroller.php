<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use App\product;
use App\producttype;
use App\pricerange;
use App\producer;
use App\giohang;
use App\customer;
use App\order;
use App\orderdetail;
use App\User;
use Illuminate\Support\Facades\Hash;
use Socialite;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Cart;
class giohangcontroller extends Controller
{

    public function themgiohang($masp, Request $request)
    {
        
        $sanpham_chitiet=product::where('id', $masp)->first();
        $check=true;
        if ($request->color=="Màu Sắc" || $request->rom=="Rom")
        {
        //    $check=false;
        }
        else{
           
            if ($request->qty) {
                $qty = $request->qty;
            } else {
                $qty = 1;
            }
   
            if ($sanpham_chitiet->sale!=0 || $sanpham_chitiet->sale!=null) {
                Cart::add(array('id'=>$sanpham_chitiet->id, 'name'=> $sanpham_chitiet->name, 'price'=>$sanpham_chitiet->price*(100-$sanpham_chitiet->sale)/100,'weight'=> 0,'qty' => $qty, 'options' => ['image' => $sanpham_chitiet->image , 'rom'=>$request->rom,'color'=>$request->color]));
            } else {
                if ($sanpham_chitiet->sale==0 || $sanpham_chitiet->sale==null) {
                    Cart::add(array('id'=>$sanpham_chitiet->id, 'name'=> $sanpham_chitiet->name, 'price'=>$sanpham_chitiet->price,'weight'=> 0,'qty' => $qty, 'options' => ['image' => $sanpham_chitiet->image , 'rom'=>$request->rom,'color'=>$request->color]));
                }
            }
        }
        return redirect()->back()->with(compact('check'));
    }

    public function xoagiohang($id)
    {

         Cart::remove($id);
        return redirect()->back();
       
    }

    public function laygiohang()
    {

      //  $cart=Cart::content();
        return view('Layout.giohang');
    }
    
    public function suagiohang($id, Request $request)
    {   
         Cart::update($id, $request->qty);
          
        return redirect()->back();
    }

    public function dathang()
    {
        $khachhang= new customer();
        $dondathang= new order();
        // nếu user chưa có thông tin liên hệ=>tạo thông tin liên hệ
        
        //nếu đã đăng nhập
        if(Auth::check())
        {
            $khtest=customer::where('name',Auth::user()->name)->where('address',Auth::user()->email)->first();
            if ($khtest==null) {
                $khachhang->name=Auth::user()->name;
                $khachhang->address=Auth::user()->email;
                $khachhang->deleted=0;
                $khachhang->save();
                
            }
            $khcheck=customer::where('name',Auth::user()->name)->where('address',Auth::user()->email)->first();
            $dondathang->orderdate=Carbon::now();
            $dondathang->delivered=0;
            $dondathang->deliverydate=Carbon::now();
            $dondathang->paid=0;
            $dondathang->customerid=$khcheck->id;
            $dondathang->deleted=0;
            $dondathang->deliveryplace=Auth::user()->address;
            $dondathang->save();

            foreach(Cart::content() as $key => $cart)
            {
                $chitiet=new orderdetail();
                $chitiet->orderid=$dondathang->id;
                $chitiet->productid=$cart->id;
                $chitiet->productname=$cart->name;
                $chitiet->count=$cart->qty;
                $chitiet->color=$cart->options->color;
                $chitiet->rom=$cart->options->rom;
                $chitiet->price=$cart->price;
                $chitiet->save();
            }
        }
       
        Cart::destroy();
        return redirect()->route('home');
    }


    // đặt hàng dành cho khách hàng ko có tài khoản, hoặc login bằng fb, google
    public function dathangpost(Request $request)
    {
        $khachhang= new customer();
        $dondathang= new order();
        // nếu user chưa có thông tin liên hệ=>tạo thông tin liên hệ
        
        //nếu đã đăng nhập
        if(Session::has('dangnhap'))
        {
            $kh=customer::where('phone',$request->phone)->first();
            $user=User::where('logintype',1)->first();
            if ($kh==null) 
            {
                $khachhang->name= Session('dangnhap')->name;
                $khachhang->address=$request->address;
                $khachhang->deleted=0;
                $khachhang->phone=$request->phone;
              
                $khachhang->save();
             }

         
            $dondathang->orderdate=Carbon::now();
            $dondathang->delivered=0;
            $dondathang->deliverydate=Carbon::now();
            $dondathang->paid=0;
            $dondathang->customerid=$request->phone;
            $dondathang->deleted=0;
            $dondathang->deliveryplace=$request->city;
            $dondathang->placedetail=$request->address;
            $dondathang->save();

            foreach(Cart::content() as $key => $cart)
            {
                $chitiet=new orderdetail();
                $chitiet->orderid=$dondathang->id;
                $chitiet->productid=$cart->id;
                $chitiet->productname=$cart->name;
                $chitiet->count=$cart->qty;
                $chitiet->color=$cart->options->color;
                $chitiet->rom=$cart->options->rom;
                $chitiet->price=$cart->price;
                $chitiet->save();
            }
        }
        // khách hàng chua có tài khoan nè
        else
        {
            $khachhang= new customer();
            $dondathang= new order();
         
            //tạo khách hàng
            $kh1=customer::where('phone', $request->phone)->first();
        
            if ($kh1==null) {
                $khachhang->name=$request->name;
                $khachhang->address=$request->address;
                $khachhang->deleted=0;
                $khachhang->phone=$request->phone;
                $khachhang->save();
            }

            //tạo đơn đặt hàng
            $kh2=customer::where('phone', $request->phone)->first();
            $dondathang->orderdate=Carbon::now();
            $dondathang->delivered=0;
            $dondathang->deliverydate=Carbon::now();
            $dondathang->paid=0;
          
            $dondathang->customerid=$kh2->id;
            $dondathang->deleted=0;
            $dondathang->deliveryplace=$request->city;
            $dondathang->placedetail=$request->address;
            $dondathang->save();

            foreach(Cart::content() as $key => $cart)
            {
                $chitiet=new orderdetail();
                $chitiet->orderid=$dondathang->id;
                $chitiet->productid=$cart->id;
                $chitiet->productname=$cart->name;
                $chitiet->count=$cart->qty;
                $chitiet->color=$cart->options->color;
                $chitiet->rom=$cart->options->rom;
                $chitiet->price=$cart->price;
                $chitiet->save();
            }
        }
        Cart::destroy();
        return redirect()->route('home');
    }
    
}
