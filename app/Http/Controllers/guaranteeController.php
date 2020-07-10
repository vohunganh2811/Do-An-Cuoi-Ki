<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\orderdetail;
use App\customer;
use App\User;
use App\guarantee;
use App\product;
class guaranteeController extends Controller
{

    public function GetSPBaoHanh($sdt)
    {
        $khcheck=customer::where('phone',$sdt)->first();
        if($khcheck==null)
        {
           echo"Khach chưa mua hàng";

        }
      else{
          $khachhang=customer::where('phone', $sdt)->first();
          $donhang=order::where('customerid', $khachhang->id)->get();
          return view('admin.Layout.baohanh', compact('donhang', 'khachhang'));
      }
        
    }

    public function suachuaget($orderid, $productid)
    {
        $donhang = order::where('id', $orderid)->first();
        $product=product::where('id', $productid)->first();
        $customer = customer::where('id', $donhang->customerid)->first();
        return view('admin.Layout.suachua', compact('donhang', 'product','customer'));
       
    }
    public function suachuapost(Request $request)
    {
        $guarantee= new guarantee();
        $guarantee->orderid = $request->orderid;
        $guarantee->productid = $request->productid;
        $guarantee->customerid = $request->customerid;
        $guarantee->error = $request->error;
        $guarantee->datein = $request->datein;
        $guarantee->dateout = $request->dateout;
        $guarantee->save();
        return  redirect()->route('xemdonhang');
       
    }

    public function danhsachbaohanh()
    {
        $guarantee= guarantee::All();
        return view('admin.Layout.danhsachbaohanh', compact('guarantee'));
    }

    public function tieptucbaohanhget($id)
    {
        $guarantee_item= guarantee::where('id', $id)->first();
        return view('admin.Layout.tieptucbaohanhget', compact('guarantee_item'));
    }
    public function tieptucbaohanhpost($id, Request $request)
    {
        $spcansua=guarantee::where('id', $id)->update(['error' => $request->error,
        'datein' => $request->datein,
        'dateout' => $request->dateout
        ]);
   
        return redirect()->route('tieptucbaohanhget');
    }

}
