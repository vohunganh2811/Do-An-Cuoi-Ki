<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\orderdetail;
use App\customer;
use App\User;
use App\city;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
class dondathangcontroller extends Controller
{
    public function xemdonhang()
    {
       $donhangadmin=order::join('customer','customer.id','=','order.customerid')->select('order.id as ido','orderdate','paid','delivered','deliverydate','deliveryplace','placedetail','customer.name as namec')->get();
        return view('admin.Layout.donhang',compact('donhangadmin'));
    }

    public function xemchitietdonhang($id)
    {
        $chitiet=orderdetail::where('orderid',$id)->get();
        $tien=0;
        $noigiaohang=order::where('id', $id)->first();
        $phigiao=city::where('name', $noigiaohang->deliveryplace)->first();
        foreach($chitiet as $a)
        {
            $tien+=$a->count * $a->price;
        }
        $tien+=$phigiao->shipcost;
        return view('admin.Layout.chitiet', compact('chitiet','tien'));
    }

    public function nhapthongtin()
    {
        return view('Layout.nhapthongtin');
    }

    public function phigiao()
    {
        return view('admin.Layout.phigiao');
    }
    public function donhangcuatoi(Request $request)
    {
        
        if(Auth::check()) {
            $usercheck=customer::where('address',Auth::user()->email)->first();
            if($usercheck==null)
            {
                echo"Bạn chưa mua hàng";

            }
           else
           {
               $user=customer::where('address', Auth::user()->email)->first();
               $donhanguser=order::where('customerid', $user->id)->get();
               return view('Layout.donhang', compact('user', 'donhanguser'));
           }
           
          
        }
        // else
        // {
        //     $khachhang=customer::where('phone',$request->sdt)->first();
        //     $donhang=order::where('customerid', $khachhang->id)->get();
        //     return view('Layout.donhang',compact('donhang','khachhang'));
        // }
        
    }
    public function donhangcuatoi2($sdt)
    {
        $khcheck=customer::where('phone',$sdt)->first();
        if($khcheck==null)
        {
           echo"Bạn chưa mua hàng";

        }
      else{
          $khachhang=customer::where('phone', $sdt)->first();
          $donhang=order::where('customerid', $khachhang->id)->get();
          return view('Layout.donhang', compact('donhang', 'khachhang'));
      }
        
    }

    

    public function xemdonhangtheosdt($iddonhang)
    {
        $tien=0;
        $donhangcanhan=order::where('order.id', $iddonhang)->join('orderdetail','order.id','=','orderdetail.orderid')->select('productname','count','color','rom','price')->get();
        $noigiaohang=order::where('id', $iddonhang)->first();
        $phigiao=city::where('name', $noigiaohang->deliveryplace)->first();
        foreach($donhangcanhan as $a)
        {
            $tien+=$a->count * $a->price;
        }
        $tien+=$phigiao->shipcost;
        return view('Layout.donhangcanhan',compact('donhangcanhan','noigiaohang','tien','phigiao'));
        
    }

    public function getphigiao($id)
    {
        $citysua=city::where('id', $id)->get();
        return view('admin.Layout.suaphigiao')->with(compact('citysua'));
    }

    public function setphigiao($id, Request $request)
    {
        $thpho=city::where('id', $id)->update(['name' => $request->name,
        'shipcost' => $request->shipcost
        ]);
   
        return redirect()->route('phigiao');
    }

}
