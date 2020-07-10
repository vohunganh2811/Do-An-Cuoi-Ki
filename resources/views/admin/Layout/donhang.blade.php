@extends('admin.homeadmin')
@section('noidungchinh')
<div class="contain)er-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Đơn Hàng</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Ngày Đặt</th>
                        <th>Đã Giao</th>
                        <th>Ngày Giao</th>
                        <th>Đã Thanh Toán</th>
                        <th>Khách Hàng</th>
                        <th>Nơi Giao</th>
                        <th>Địa Chỉ</th>
                        <th>Xem</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Mã</th>
                        <th>Ngày Đặt</th>
                        <th>Đã Giao</th>
                        <th>Ngày Giao</th>
                        <th>Đã Thanh Toán</th>
                        <th>Khách Hàng</th>
                        <th>Nơi Giao</th>
                        <th>Địa Chỉ</th>
                        <th>Xem</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($donhangadmin as $donhang)
                    <tr>
                        <td>{{$donhang->ido}}</td>
                        <td>{{$donhang->orderdate}}</td>
                        <td>{{$donhang->delivered}}</td>
                        <td>{{$donhang->deliverydate}}</td>
                        <td>{{$donhang->paid}}</td>
                        <td>{{$donhang->namec}}</td>
                        <td>{{$donhang->deliveryplace}}</td>
                        <td>{{$donhang->placedetail}}</td>
                        <td>
                        <a href="{{route('xemchitietdonhang', $donhang->ido)}}">Xem</a>
                           
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