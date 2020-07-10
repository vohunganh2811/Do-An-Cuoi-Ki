

@extends('admin.homeadmin')
@section('noidungchinh')

<div class="contain)er-fluid">

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
                @foreach($spham as $sp)
                    <tr>
                        <td>{{$sp->id}}</td>
                        <td>{{$sp->name}}</td>
                        <td><img src="img/{{$sp->image}}" alt=""  class="img-responsive" width="40px" height="40px"></td>
                        <td>{{$sp->entryprice}}</td>
                        <td>{{$sp->price}}</td>
                        <td>{{$sp->sale}}</td>
                       
                        <td>
                   
                        <a href="{{route('getsuasanpham', $sp->id)}}"><button class="btn btn-primary editt" data-toggle="modal" data-target="#edit" type="button" onclick="alert('Sửa Thành Công')"><i class="fas fa-edit" ></i></button></a>
                            <a  href="{{route('xoasanpham',$sp->id)}}"><button class="btn btn-danger delete"  type="button" onclick="alert('Xóa Thành Công')" ><i class="fas fa-trash-alt"  ></i></button></a>
                          
                            <!-- <a href="route('xoasanpham', $lst->id)">Xóa</a> -->
                        </td>
                        <td>  <a  href="{{route('thongke',$sp->id)}}">Xem</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          
        </div>
    </div>
</div>
</div>
@endsection