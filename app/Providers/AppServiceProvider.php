<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\producttype;
use App\product;
use App\producer;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Session;
use Cart;
use App\order;
use App\orderdetail;
use App\customer;
use App\User;
use App\comment;
use App\pricerange;
use App\ram;
use App\rom;
use App\city;

//use Gloudemans\Shoppingcart\Facades\Cart;
class AppServiceProvider extends ServiceProvider
{
    // @return void
    public function boot(Request $request)
    {     
            $cm=comment::all();

           $thanhpho=city::all();
         
          
           $binhluan=comment::all();
            $loaisp=producttype::all();
            $tenloai=producttype::select('name')->where('id', 2)->get();
            $nhasanxuat=producer::all();
            $spham=product::where('deleted', 0)->get();
            $sale=product::select('sale')->where('producttype',2)->where('deleted',0)->groupBy('sale')->get();
            $spdienthoai = product::where('deleted',0)->where('producttype',2)->get();
            $splaptop = product::where('deleted',0)->where('producttype',1)->get();
            $spmaytinhbang=product::where('deleted',0)->where('producttype',3)->get();
            $donhang=order::all();
            $khachhang=customer::where('deleted', 0)->get();
            $taikhoan=User::where('deleted', 0)->get();
            $tennsx=producer::select('producer.name as name','producer.id as id')->join('product', 'product.producer', '=', 'producer.id')->where('product.producttype', 2)->groupBy('producer.name','producer.id')->get();
             $khoanggia= pricerange::all();
             $rom=rom::all();
             View::share('sale', $sale);
             View::share('thanhpho', $thanhpho);
               View::share('cm', $cm);
             View::share('rom', $rom);
             View::share('tennsx', $tennsx);
             View::share('tenloai', $tenloai);
             View::share('khoanggia', $khoanggia);
            View::share('taikhoan', $taikhoan);
            View::share('donhang', $donhang);
            View::share('khachhang', $khachhang);
            View::share('spham', $spham);
            View::share('spdienthoai', $spdienthoai);
            View::share('splaptop', $splaptop);
            View::share('spmaytinhbang', $spmaytinhbang);
            View::share('nhasanxuat', $nhasanxuat); // <= Truyền dữ liệu
            View::share('loaisp', $loaisp); // <= Truyền dữ liệu
            View::share('binhluan', $binhluan); // <= Truyền dữ liệu
           
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
    
     */
    
}
