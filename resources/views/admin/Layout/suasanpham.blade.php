@extends('admin.homeadmin')
@section('noidungchinh')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sản Phẩm</h6>
        <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                        @foreach($spcansua as $s)
                        <form action="{{route('suasanpham', $s->id)}}"  method="post">
                       
                    
                                <fieldset class="form-group">
                                    <label>Tên Sản Phẩm</label>
                                    <input class="form-control" value="{{$s->name}}" name="name">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Giá Nhập</label>
                                    <input class="form-control" value="{{$s->entryprice}}" name="entryprice">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Gia Bán</label>
                                    <input class="form-control" value="{{$s->price}}" name="price">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Khuyến Mãi</label>
                                    <input class="form-control" value="{{$s->sale}}" name="sale">
                                </fieldset>
                                
                                <div class="form-group">
                                    <label>Loại</label>
                                 
                                    <select class="form-control"  name="producttype">
                                    @foreach($loaisp as $l)
                                        <option value="{{$l->id}}" class="producttype" name="producttype">{{$l->name}}</option>
                                        @endforeach()
                                    </select>
                                   
                                </div>
                                <div class="modal-footer">
                                <input type="submit" value="Lưu" />
                              <a href="{{route('hienthisanphamtheoloai', $s->producttype)}}"><button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy Bỏ</button><a>
                            </div>
                            {{ csrf_field() }} 
                            <!-- {{ csrf_field() }}  -->
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
@endsection

