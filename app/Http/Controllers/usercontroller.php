<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\User;
//use Facebook\Facebook;
//use Facebook\Exceptions\FacebookSDKException;
class usercontroller extends Controller
{
    public function xemtaikhoan()
    {
        return view('admin.Layout.taikhoan');
    }

    public function xoataikhoan($id)
    {
        User::where('id', $id)->where('deleted', 0)->update(['deleted' => 1]);
        return redirect()->back();
    }

    // public function facebook(Request $request)
    // {
    //     $facebook = $request->only('access_token');
    //     if (!$facebook || !isset($facebook['access_token'])) {
    //         echo"không tồn tại tooken";
    //         //return $this->responseErrors(config('code.user.login_facebook_failed'), trans('messages.user.login_facebook_failed'));
    //     }
    //     // Khởi tạo instance của Facebook Graph SDK
    //     $fb = new Facebook([
    //         'client_id' => config('services.facebook.client_id'),
    //         'client_secret' => config('services.facebook.client_secret'),
    //     ]);

    //     try {
    //         $response = $fb->get('/me?fields=id,name,email,link,birthday', $facebook['access_token']); // Lấy thông tin 
    //         // user facebook sử dụng access_token được gửi lên từ client
    //         $profile = $response->getGraphUser();
    //         if (!$profile || !isset($profile['id'])) {
    //             echo"không tồn tại profile";
    //              // Nếu access_token không lấy đc thông tin hợp lệ thì trả về login false luôn
    //            // return $this->responseErrors(config('code.user.login_facebook_failed'), trans('messages.user.login_facebook_failed'));
    //         }

    //         $email = $profile['email'] ?? null;
    //         $social = User::where('social_id', $profile['id'])->where('logintype',1)->first();
    //         // Lấy được userId của Facebook ta kiểm tra trong bảng social_networks đã có chưa, nếu có thì tài khoản facebook này 
    //         // đã từng đăng nhập vào hệ thống ta chỉ cần lấy ra user rồi generate jwt trả về cho client; Ngược lại nếu chưa có thì 
    //         // ta sẽ tiếp tục dùng email trả về từ facebook kiểm tra xem nếu có user với email như thế rồi thì lấy luôn user đó nếu 
    //         // không thì tạo user mới với email trên và tạo bản ghi social_network lưu thông tin userId của facebook rồi generate jwt
    //         // để trả về cho client
    //         if ($social) {
    //             $user = $social->user;
    //         } else {
    //             $user = $email ? User::firstOrCreate(['email' => $email]) : User::create();
    //             $user->User()->create([
    //                 'social_id' => $profile['id'],
    //                 'logintype' => 1,
    //             ]);
    //             $user->name = $profile['name'];
    //             $user->save();
    //         }

    //         $token = JWTAuth::fromUser($user);
    //         echo"".$user;
    //         echo"".$token;
    //        // return $this->responseSuccess(compact('token', 'user'));
    //     } catch (\Exception $e) {
    //         Log::error('Error when login with facebook: ' . $e->getMessage());
    //         echo"Lỗi rồi";
    //         //return $this->responseErrors(config('code.user.login_facebook_failed'), trans('messages.user.login_facebook_failed'));
    //     }
    // }
}
