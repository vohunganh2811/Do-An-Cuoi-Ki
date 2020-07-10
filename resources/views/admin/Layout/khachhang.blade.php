@extends('admin.homeadmin')
@section('noidungchinh')
<div class="contain)er-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Khách Hàng</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Xóa</th>
                      
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã</th>
                        <th>Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Xóa</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($khachhang as $khachhang)
                    <tr>
                        <td>{{$khachhang->id}}</td>
                        <td>{{$khachhang->name}}</td>
                        <td>{{$khachhang->address}}</td>
                        <td>{{$khachhang->phone}}</td>
                        <td>
                        <a href="{{route('xoakhachhang', $khachhang->id)}}">Xóa</a>
                           
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