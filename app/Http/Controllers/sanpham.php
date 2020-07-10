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
use App\colorproduct;
use App\ram;
use App\rom;
use App\ramproduct; 
use App\romproduct;
use App\star;
use App\starproduct;
use Illuminate\Http\Response;
class sanpham extends Controller
{
    
    public function xemsanpham()
    {   
       
        
        $lstsanpham = product::where('producttype', 2)->where('deleted', 0)->paginate(9);
      
        return view('Layout.sanphamtoanbo', compact('lstsanpham'));
        
    }

    public function xemsanpham1($producer)
    {   
    
        
        $lstsanpham1 = product::where('producttype', 2)->where('producer',$producer)->where('deleted', 0)->paginate(9);
      
        return view('Layout.sanpham', compact('lstsanpham1'));
        
    }

    
    public function xemchitiet($id)
    {
        $sanpham_chitiet=product::where('id', $id)->first();
        //join screen
        $sanpham_chitiet1=product::where('product.id', $id)->join('screen','product.screen','=','screen.id')->join('operatingsystem','product.operatingsystem','=','operatingsystem.id')->select('screen.name as namescreen','operatingsystem.name as operatingsystemname')->first();
        
        //join ram, ramproduct, product
        $sanpham_chitiet2=product::where('product.id',$id)->join('ramproduct','product.id','=','ramproduct.idproduct')->join('ram','ram.id', '=','ramproduct.idram')->select('ram.name as nameram')->first();
        $sanpham_chitiet3=product::where('product.id',$id)->join('romproduct','product.id','=','romproduct.idproduct')->join('rom','rom.id', '=','romproduct.idrom')->select('rom.name as namerom')->first();
        $color_product=product::where('product.id',$id)->join('colorproduct','product.id','=','colorproduct.idproduct')->join('color','color.id','=','colorproduct.idcolor')->select('color.id as idcolor','color.name as namecolor')->get();
        $rom_product=product::where('product.id',$id)->join('romproduct','product.id','=','romproduct.idproduct')->join('rom','rom.id','=','romproduct.idrom')->select('rom.id as idrom','rom.name as namerom')->get();
        $sanpham_tuongtu=product::where('price',$sanpham_chitiet->price)->where('producttype',2)->get();
        return view('Layout.chitiet2', compact('sanpham_chitiet','sanpham_chitiet1','sanpham_chitiet2','sanpham_chitiet3','color_product','rom_product','sanpham_tuongtu'));
    }

    //tìm kiếm
    
    public function autocomplete(Request $request)
    {
        $data = product::select("name as name")->where("name", "LIKE", "%{$request->input('query')}%")->get();
        return response()->json($data);
    }

    
    public function timkiem(Request $request)
    {
        $sptimkiem=product::where('name', 'like', '%'.$request->timkiem.'%')->get();
   
       
        return view('Layout.timkiem', compact('sptimkiem'));
    }

    //dành cho admin
    public function hienthisanpham()
    {
        if (Auth::user()->usertype==2)
         {
            return view('admin.Layout.quanlysanpham');
        }
        else{
            return redirect()->route('home');
        }
    }

    public function hienthitheoloai($producttype)
    {
        if (Auth::user()->usertype==2) {
            $lstsp = product::where('producttype', $producttype)->where('deleted', 0)->paginate(9);
           
            return view('admin.Layout.quanlysanphamtheoloai', compact('lstsp'));
        }
        else
        {
            return redirect()->route('home');
        }
    }

   

    public function xoasanpham($id)
    {
        product::where('id', $id)->where('deleted', 0)->update(['deleted' => 1]);
        return redirect()->back();
    }

    public function getdatasanpham($id)
    {
        $spcansua=product::where('id', $id)->get();
        return view('admin.Layout.suasanpham')->with(compact('spcansua'));
    }

    public function suasanpham($id, Request $request)
    {
        $spcansua=product::where('id', $id)->update(['name' => $request->name,
        'price' => $request->price,
        'entryprice' => $request->entryprice,
        'sale' =>$request->sale,
        'producttype' =>$request->producttype
        ]);
   
        return redirect()->route('hienthisanpham');
    }

    public function themsanphamget()
    {
        if (Auth::user()->usertype==2) 
        {
            return view('admin.Layout.themsanpham');
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function themsanphampost(Request $request)
    {
        if (Auth::user()->usertype==2) {
            $sanpham=new product();
            $nsxcheck=producer::where('name', $request->producer)->first();
            $screencheck=screen::where('name', $request->screen)->first();
            $hdhcheck=operatingsystem::where('name', $request->hdh)->first();
            $ramcheck=ram::where('name', $request->ram)->first();
            $romcheck=rom::where('name', $request->rom)->first();
            $colorcheck=color::where('name', $request->color)->first();
            if($ramcheck==null)
            {
                $ram= new ram();
                $ram->name=$request->ram;
                $ram->save();
            }
            if($romcheck==null)
            {
                $rom= new rom();
                $rom->name=$request->rom;
                $rom->save();
            }
            if($colorcheck==null)
            {
                $color= new color();
                $color->name=$request->color;
                $color->save();
            }
            if($nsxcheck==null)
            {
                $nsx= new producer();
                $nsx->name=$request->producer;
                $nsx->save();
            }
            if($screencheck==null)
            {
                $manhinh= new screen();
                $manhinh->name=$request->screen;
                $manhinh->save();
            }
            if($hdhcheck==null)
            {
                $hdh= new operatingsystem();
                $hdh->name=$request->hdh;
                $hdh->save();
            }
            $nsxdb=producer::where('name', $request->producer)->first();
            $screen=screen::where('name', $request->screen)->first();
            $hdh=operatingsystem::where('name', $request->hdh)->first();
            if ($request->hasFile('image')) 
            {
                $allowedfileExtension=['jpg','png']; // chỉ chấp nhận đuôi jpg, png
                 $file = $request -> file('image'); //lấy file từ input
           
                $exe_flg = true;
                //   $sanpham->image=$file;
           
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension); // kiểm tra có đúng đuôi ảnh ko?

                if (!$check) 
                {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                }
                if ($exe_flg) 
                {
                    $sanpham->image=$file->getClientOriginalName();//lấy ra tên hình
                   
                $file -> move('img', $sanpham->image); // lưu hình vào mục img
               
                }
            }

            if ($request->hasFile('slideimg1')) 
            {
                $allowedfileExtension=['jpg','png']; // chỉ chấp nhận đuôi jpg, png
                 $file1 = $request -> file('slideimg1'); //lấy file từ input
           
                $exe_flg = true;
                //   $sanpham->image=$file;
           
                $extension = $file1->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension); // kiểm tra có đúng đuôi ảnh ko?

                if (!$check) 
                {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                }
                if ($exe_flg) 
                {
                    $sanpham->slideimg1=$file1->getClientOriginalName();//lấy ra tên hình
                   
                $file1 -> move('dt', $sanpham->slideimg1); // lưu hình vào mục img
               
                }
            }

            if ($request->hasFile('slideimg2')) 
            {
                $allowedfileExtension=['jpg','png']; // chỉ chấp nhận đuôi jpg, png
                 $file2 = $request -> file('slideimg2'); //lấy file từ input
           
                $exe_flg = true;
                //   $sanpham->image=$file;
           
                $extension = $file2->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension); // kiểm tra có đúng đuôi ảnh ko?

                if (!$check) 
                {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                }
                if ($exe_flg) 
                {
                    $sanpham->slideimg2=$file2->getClientOriginalName();//lấy ra tên hình
                   
                $file2 -> move('dt', $sanpham->slideimg2); // lưu hình vào mục img
               
                }
            }

            if ($request->hasFile('slideimg3')) 
            {
                $allowedfileExtension=['jpg','png']; // chỉ chấp nhận đuôi jpg, png
                 $file3 = $request -> file('image'); //lấy file từ input
           
                $exe_flg = true;
                //   $sanpham->image=$file;
           
                $extension = $file3->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension); // kiểm tra có đúng đuôi ảnh ko?

                if (!$check) 
                {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                }
                if ($exe_flg) 
                {
                    $sanpham->slideimg3=$file->getClientOriginalName();//lấy ra tên hình
                   
                $file3 -> move('dt', $sanpham->slideimg3); // lưu hình vào mục img
               
                }
            }

            if ($request->hasFile('image1')) 
            {
                $allowedfileExtension=['jpg','png']; // chỉ chấp nhận đuôi jpg, png
                 $fileimg1 = $request -> file('image1'); //lấy file từ input
           
                $exe_flg = true;
                //   $sanpham->image=$file;
           
                $extension = $file1->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension); // kiểm tra có đúng đuôi ảnh ko?

                if (!$check) 
                {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                }
                if ($exe_flg) 
                {
                    $sanpham->fileimg1=$fileimg1->getClientOriginalName();//lấy ra tên hình
                   
                $file1 -> move('dt', $sanpham->image1); // lưu hình vào mục img
               
                }
            }

            if ($request->hasFile('image2')) 
            {
                $allowedfileExtension=['jpg','png']; // chỉ chấp nhận đuôi jpg, png
                 $fileimg2 = $request -> file('image2'); //lấy file từ input
           
                $exe_flg = true;
                //   $sanpham->image=$file;
           
                $extension = $fileimg2->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension); // kiểm tra có đúng đuôi ảnh ko?

                if (!$check) 
                {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                }
                if ($exe_flg) 
                {
                    $sanpham->image2=$fileimg2->getClientOriginalName();//lấy ra tên hình
                   
                $file1 -> move('dt', $sanpham->image2); // lưu hình vào mục img
               
                }
            }

            if ($request->hasFile('image3')) 
            {
                $allowedfileExtension=['jpg','png']; // chỉ chấp nhận đuôi jpg, png
                 $fileimg3 = $request -> file('image3'); //lấy file từ input
           
                $exe_flg = true;
                //   $sanpham->image=$file;
           
                $extension = $file1->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension); // kiểm tra có đúng đuôi ảnh ko?

                if (!$check) 
                {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                }
                if ($exe_flg) 
                {
                    $sanpham->image3=$fileimg3->getClientOriginalName();//lấy ra tên hình
                   
                $fileimg3 -> move('dt', $sanpham->image3); // lưu hình vào mục img
               
                }
            }
            $sanpham->name=$request->name;
            $sanpham->producttype=$request->producttype;
            $sanpham->producer=$nsxdb->id;
           
            $sanpham->entryprice=$request->entryprice;
            $sanpham->price=$request->price;
            $sanpham->sale = $request->sale;
            $sanpham->description=$request->description;
            $sanpham->deleted=0;
            $sanpham->new=1;
            //bổ sung
            $sanpham->maincamera=$request->maincamera;
            $sanpham->frontcamera=$request->frontcamera;
            $sanpham->pin=$request->pin;
            $sanpham->screen=$screen->id;
            $sanpham->operatingsystem=$hdh->id;    
            $sanpham->save();
            $spdb=product::where('name', $request->name)->first();
            
            $ramdb=ram::where('name', $request->ram)->first();
            $romdb=rom::where('name', $request->rom)->first();
            $colordb=color::where('name', $request->color)->first();
            $ramp= new ramproduct();
            $romp= new romproduct();
            $colorp= new colorproduct();
            $ramp->idram=$ramdb->id;
            $ramp->idproduct=$spdb->id;
            $romp->idrom=$romdb->id;
            $romp->idproduct=$spdb->id;
            $colorp->idcolor=$colordb->id;
            $colorp->idproduct=$spdb->id;
            $romp->save();
            $ramp->save();
            $colorp->save();

            return redirect()->route('hienthisanpham');
        }
        else
        {
            return redirect()->route('home');
        }
    }

    
    public function thongke($id)
    {
        $spthongke = product::where('product.id', $id)->join('orderdetail', 'orderdetail.productid','=', 'product.id')->get();
        $tong=0;
        $soluong=0;
        foreach($spthongke as $s)
        {
            $soluong+=$s->count;
            $tong+=$s->price * $s->count;
        }
        $sptk = product::where('product.id', $id)->join('orderdetail', 'orderdetail.productid','=', 'product.id')->select('product.id as id', 'product.name as name', 'product.image as image' )->first();
        if(!$sptk)
        {
            $sptk = product::where('product.id', $id)->first();
          
           $tong=0;
           $soluong=0;
           // return redirect()->back()->with('thongbao','Sản phẩm chưa được mua!!');
        }

    
        return view('admin.Layout.thongke', compact('spthongke','soluong','tong','sptk'));
    }

    public function hoanvi(&$a, &$b)
    {
        $tem=new product();
        $tem=$a;
        $a=$b;
        $b=$tem;
    }
    public function locsanpham()
    {
    
        $sanpham = array();
        $tongsanpham=[];
        $i=0;
        if (isset($_GET['cbten'])&& isset($_GET['cbsale']) && isset($_GET['cbgia']))
         {
            foreach($_GET['cbten'] as $ten) 
            {
                foreach ($_GET['cbsale'] as $sale) {
                    //Xử lý các phần tử được chọn
                    foreach ($_GET['cbgia'] as $gia) {
                        $giasp=pricerange::where('id', $gia)->select('id', 'price1', 'price2')->first();
                 
                        $sp=product::where('producer', $ten)->where('sale',$sale)->where('price', '>=', $giasp->price1)->where('price', '<=', $giasp->price2)->where('producttype', 2)->orderBy('price')->get();
                        $sanpham=array($sp);
                       
                      
                        foreach ($sanpham as $s) {
                            $tongsanpham[$i]=$s;
                            $i++;
                        }
                    }
                }
            

             }
         }
         else if(isset($_GET['cbten']))
         {
            foreach($_GET['cbten'] as $ten) 
            {
                
                    //Xử lý các phần tử được chọn
                   
                     
                 
                        $sp=product::where('producer', $ten)->where('producttype', 2)->orderBy('price')->get();
                        $sanpham=array($sp);
                    
                        foreach ($sanpham as $s) {
                            $tongsanpham[$i]=$s;
                            $i++;
                        }
                    
            

             }
         }
        
         else if(isset($_GET['cbsale']))
        {
           foreach($_GET['cbsale'] as $sale) 
           {
               
                   //Xử lý các phần tử được chọn
                  
                    
                
                       $sp=product::where('sale', $sale)->where('producttype', 2)->orderBy('price')->get();
                       $sanpham=array($sp);
                   
                       foreach ($sanpham as $s) {
                           $tongsanpham[$i]=$s;
                           $i++;
                       }
                   
           

            }
        }

       
         else if ( isset($_GET['cbgia']))
         {
              //Xử lý các phần tử được chọn
              foreach ($_GET['cbgia'] as $gia)
              {
                 $giasp=pricerange::where('id', $gia)->select('id', 'price1', 'price2')->first();
          
                 $sp=product::where('price', '>=', $giasp->price1)->where('price', '<=', $giasp->price2)->where('producttype', 2)->orderBy('price')->get();
                 $sanpham=array($sp);
                
                 foreach ($sanpham as $s) {
                     $tongsanpham[$i]=$s;
                     $i++;
                 }
             }
         }


       

        $all=[];
        $j=0;
        foreach($tongsanpham as $t)
        {
            foreach($t as $item)
            {
               // echo"".$item;
                $all[$j]=$item;
                $j++;
            }
        }

        // for($m=0; $m<sizeof($all); $m++)
        // {
        //     for($n=1; $n<=sizeof($all); $n++)
        //     {
        //         if($all[$m]['price'] > $all[$n]['price'])
        //         {
        //             $this->hoanvi($all[$m], $all[$n]);
        //         }
        //     }
        // }
        //-------------------------------------
        // foreach($all as $m)
        // {
        //     foreach($all as $n)
        //     {
        //         if($m->price > $n->price )
        //         {
        //             $this->hoanvi($m, $n);
        //         }
        //     }
        // }
        collect($all)->sortByDesc('price');
        

         return view('Layout.loc', compact('tongsanpham','all'));

    }


   
}

