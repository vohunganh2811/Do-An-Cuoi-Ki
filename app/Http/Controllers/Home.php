<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Gate;
use App\product;
use App\producttype;
use App\producer;
use Illuminate\Support\Facades\Hash;
use Socialite;
//use Auth;
class Home extends Controller
{
    public function GetTrangChu()
    {
      $dienthoai = product::where('deleted',0)->where('producttype',2)->where('new',1)->get();
      $laptop = product::where('deleted',0)->where('producttype',1)->where('new',1)->get();
      $maytinhbang=product::where('deleted',0)->where('producttype',3)->where('new',1)->get();
        
        return view('Layout.trangchu',compact('dienthoai','laptop', 'maytinhbang'));
    }

    public function DangNhap(Request $request)
    {
      $dienthoai = product::where('deleted',0)->where('producttype',2)->where('new',1)->get();
      $laptop = product::where('deleted',0)->where('producttype',1)->where('new',1)->get();
      $maytinhbang=product::where('deleted',0)->where('producttype',3)->where('new',1)->get();

      $username =  $request['username'];
      $password =  $request['password'];
      $data =['name' => $username,'password' => $password];
      if(Auth::attempt($data))
     {
     
    
      return redirect()->back()->with(compact('dienthoai','laptop','maytinhbang'), ['user'=> Auth::user()]);
     }
     else
     {
       return redirect()->back()->with(compact('dienthoai','laptop','maytinhbang'),['error'=>'đăng nhập thất bại']);
     }
    }

    public function dangxuat()
    {
     // $taikhoan=User::find(Auth::user()->id);
      
      if(Session::has('dangnhap'))
      {
        Session::forget('dangnhap');
        Session::forget('user');
       // return redirect()->route('home');
       return redirect()->back();
      }
      else
      {
          Auth::logout();
          // if($taikhoan->logintype==1)
          // {
          //   $taikhoan->delete();
          // }
          //return view('dangnhap');
        //  return redirect()->route('home');
        return redirect()->back();
      }
     // return redirect()->route('home');
     return redirect()->back();
    }

    public function dangky(Request $request)
    {

        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->usertype=1;
        $user->logintype=0;
        $user->deleted=0;
        $user->save();
        return redirect()->back()->with('thongbao','đăng ký thành công');
    }

    // đăng nhập bằng facebook
    public function redirectProvider($social)
    {
      return Socialite::driver($social)->redirect();
    }


    public function findOrCreateUser($user)
    {
      $authUser = User::where('social_id',$user->id)->first();
      if($authUser)
      {
        return $authUser;
      }
      else
      {
        $nguoidung= new User();
       
        $nguoidung->name=$user->name;
        $nguoidung->email=$user->email;
        $nguoidung->password="";
        $nguoidung->usertype=1;
        $nguoidung->avatar=$user->avatar;
        $nguoidung->ruler=0;
        $nguoidung->status=0;
        $nguoidung->logintype=1;
        $nguoidung->deleted=0;

        Session::put('user', $nguoidung);
        return Session::get('user');
        
      }
    }
    public function handleProviderCallback($social)
    {
      $user=Socialite::driver($social)->user();
      $authUser=$this->findOrCreateUser($user);
      Session::put('dangnhap', $authUser);
      
      //Auth::login($authUser);
      return redirect()->back();
    }
    

    
}
