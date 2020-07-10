@extends('admin.homeadmin')
@section('noidungchinh')
<div class="contain)er-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Tài Khoản</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Loại Đăng Nhập</th>
                        <th>Xóa</th>
                      
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                     <th>Mã</th>
                        <th>Tài Khoản</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Loại Đăng Nhập</th>
                        <th>Xóa</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($taikhoan as $taikhoan)
                    <tr>
                        <td>{{$taikhoan->id}}</td>
                        <td>{{$taikhoan->name}}</td>
                        <td>{{$taikhoan->email}}</td>
                        <td>{{$taikhoan->password}}</td>
                        <td>{{$taikhoan->logintype}}</td>
                        <td>
                        <a href="{{route('xoataikhoan', $taikhoan->id)}}">Xóa</a>
                           
                            <!-- <a href="route('xoasanpham', $lst->id)">Xóa</a> -->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          
        </div>
    </div>
</div>
</div>
@endsection