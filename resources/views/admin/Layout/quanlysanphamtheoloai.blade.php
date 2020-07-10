@extends('admin.homeadmin')
@section('noidungchinh')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sản Phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Mã</th>
                        <th>Tên</th>
                        <th>Hình</th>
                        <th>Giá Gốc</th>
                        <th>Giá Bán</th>
                        <th>Sale</th>
                        <th>Thao Tác</th>
                        <th>Thống Kê</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Mã</th>
                        <th>Tên</th>
                        <th>Hình</th>
                        <th>Giá Gốc</th>
                        <th>Giá Bán</th>
                        <th>Sale</th>
                        <th>Thao Tác</th>
                        <th>Thống Kê</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($lstsp as $lst)
                    <tr>
                        <th>{{$lst->id}}</th>
                        <td>{{$lst->name}}</td>
                        <td><img src="img/{{$lst->image}}" alt=""  class="img-responsive" width="40px" height="40px"></td>
                        <td>{{$lst->entryprice}}</td>
                        <td>{{$lst->price}}</td>
                        <td>{{$lst->sale}}</td>
                        <td>{{$lst->saleprice}}</td>
                        <th>
                   
                            <a href="{{route('getsuasanpham', $lst->id)}}"><button class="btn btn-primary editt" data-toggle="modal" data-target="#edit" type="button" data-id="{{$lst->id}}"><i class="fas fa-edit" ></i></button></a>
                            <a  href="{{route('xoasanpham',$lst->id)}}"><button class="btn btn-danger delete"  type="button" onclick="alert('Xóa Thành Công')" ><i class="fas fa-trash-alt" data-id="{{$lst->id}}" ></i></button></a>
                            <!-- <a href="route('xoasanpham', $lst->id)">Xóa</a> -->
                    
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">{{$lstsp->links()}}</div>
        </div>
        
    </div>
</div>
</div>
@endsection
 <!-- sai ở ngay day, sp->id???????? -->
