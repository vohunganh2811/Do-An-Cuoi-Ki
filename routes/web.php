<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/','Home@GetTrangChu')->name('home');

Route::post('/', 'Home@DangNhap')->name('home');

Route::get('dangxuat', 'Home@dangxuat')->name('dangxuat');

Route::post('dangky','Home@dangky')->name('dangky');

// Đăng nhập facebook
Route::get('facebook/callback/{social}','Home@handleProviderCallback')->name('facebookcallback');

Route::get('facebook/login/{social}','Home@redirectProvider');

//xem từng loại sản phẩm theo nhà sản xuất

Route::get('xemsanpham', 'sanpham@xemsanpham')->name('xemsanpham');
Route::get('xemsanpham/{producer}', 'sanpham@xemsanpham1')->name('xemsanpham1');

Route::get('xemchitiet/{id}', 'sanpham@xemchitiet')->name('xemchitiet');


//Giỏ hàng
Route::get('themgiohang/{masp}', 'giohangcontroller@themgiohang')->name('themgiohang');
Route::get('xoa/{id}', 'giohangcontroller@xoagiohang')->name('xoagiohang');
Route::get('getgiohang', 'giohangcontroller@laygiohang')->name('getgiohang');
Route::post('suagiohang/{id}', 'giohangcontroller@suagiohang')->name('suagiohang');
Route::get('dathang','giohangcontroller@dathang')->name('dathang');
Route::post('dathangpost','giohangcontroller@dathangpost')->name('dathangpost');

//tìm kiếm

Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'sanpham@autocomplete'));

Route::get('timkiem','sanpham@timkiem')->name('timkiem');

//xây dựng trang admin
//hien thi san pham
Route::get('hienthisanpham', 'sanpham@hienthisanpham')->name('hienthisanpham');
Route::get('hienthisanphamtheoloai/{producttype}', 'sanpham@hienthitheoloai')->name('hienthisanphamtheoloai');
//thêm  san pham
Route::post('themsanpham, sanpham@themsanpham')->name('themsanpham');
//xóa sản pham
Route::get('xoasanpham/{id}', 'sanpham@xoasanpham')->name('xoasanpham');
//sửa sản phẩm
Route::get('suasanpham/{id}', 'sanpham@getdatasanpham')->name('getsuasanpham');
Route::post('suasanpham/{id}', 'sanpham@suasanpham')->name('suasanpham');

//thêm sản phẩm
Route::get('themsanphamget', 'sanpham@themsanphamget')->name('themsanphamget');
Route::post('themsanphampost', 'sanpham@themsanphampost')->name('themsanphampost');

//đơn hàng
Route::get('xemdonhang', 'dondathangcontroller@xemdonhang')->name('xemdonhang');
Route::get('xemchitietdonhang/{id}', 'dondathangcontroller@xemchitietdonhang')->name('xemchitietdonhang');

//khách hàng
Route::get('xemkhachhang','khachhangcontroller@xemkhachhang')->name('xemkhachhang');
Route::get('xoakhachhang/{id}','khachhangcontroller@xoakhachhang')->name('xoakhachhang');

//tài khoản
Route::get('xemtaikhoan','usercontroller@xemtaikhoan')->name('xemtaikhoan');
Route::get('xoataikhoan/{id}','usercontroller@xoataikhoan')->name('xoataikhoan');

//thống kê số lượng SP đã bán
Route::get('thongke/{id}', 'sanpham@thongke')->name('thongke');
//Route::post('user/login/facebook', 'usercontroller@facebook')->name('facebookapi');

//lọc sản phẩm
Route::get('locsanpham', 'sanpham@locsanpham')->name('locsanpham');

//bình luận
Route::get('hienthibinhluan','binhluan@hienthibinhluan')->name('hienthibinhluan');
Route::post('binhluan','binhluan@binhluan')->name('binhluan');
Route::get('binhluan','binhluan@binhluan')->name('binhluanget');

//đơn hàng cá nhân
Route::get('nhapthongtin','dondathangcontroller@nhapthongtin')->name('nhapthongtin');
Route::get('donhangcuatoi','dondathangcontroller@donhangcuatoi')->name('donhangcuatoi');
Route::get('xemdonhangtheosdt/{iddonhang}','dondathangcontroller@xemdonhangtheosdt')->name('xemdonhangtheosdt');

Route::get('donhangcuatoi2/{sdt}','dondathangcontroller@donhangcuatoi2')->name('donhangcuatoi2');


Route::get('phigiao','dondathangcontroller@phigiao')->name('phigiao');

Route::get('getphigiao/{id}','dondathangcontroller@getphigiao')->name('getphigiao');
Route::post('setphigiao/{id}','dondathangcontroller@setphigiao')->name('setphigiao');


// bao hanh
Route::get('GetSPBaoHanh/{iddonhang}', 'guaranteeController@GetSPBaoHanh')->name('GetSPBaoHanh');
Route::get('suachuaget/{orderid}/{productid}', 'guaranteeController@suachuaget')->name('suachuaget');
Route::post('suachuapost', 'guaranteeController@suachuapost')->name('suachuapost');
Route::get('danhsachbaohanh', 'guaranteeController@danhsachbaohanh')->name('danhsachbaohanh');
Route::get('tieptucbaohanhget/{id}', 'guaranteeController@tieptucbaohanhget')->name('tieptucbaohanhget');
Route::post('tieptucbaohanhpost/{id}', 'guaranteeController@tieptucbaohanhpost')->name('tieptucbaohanhpost');