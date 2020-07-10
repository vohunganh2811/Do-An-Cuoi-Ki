@extends('admin.homeadmin')
@section('noidungchinh')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sản Phẩm</h6>
        <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                      
                        <form action="{{route('themsanphampost')}}"  method="post" enctype="multipart/form-data">
                        
                        <fieldset class="form-group">
                        <label>Hình Chính</label>
                                <input type="file" name="image">
                                </fieldset>
                                <fieldset class="form-group">
                        <label> Hình Chi Tiết</label>
                                <input type="file" name="slideimg1">
                                <input type="file" name="slideimg2">
                                <input type="file" name="slideimg3">
                                </fieldset>

                                <label> Hình Mô Tả</label>
                                <input type="file" name="image1">
                                <input type="file" name="image2">
                                <input type="file" name="image3">
                                
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Tên Sản Phẩm</label>
                                    <input class="form-control"  name="name">
                                </fieldset>
                                
                                <div class="form-group">
                                    <label>Loại</label>
                                 
                                    <select class="form-control"  name="producttype">
                                    @foreach($loaisp as $l)
                                        <option value="{{$l->id}}" class="producttype" name="producttype">{{$l->name}}</option>
                                        @endforeach()
                                    </select>
                                   
                                </div>

                                <!-- <div class="form-group">
                                    <label>Nhà Sản Xuất</label>
                                 
                                    <select class="form-control"  name="producer">
                                    @foreach($nhasanxuat as $n)
                                        <option value="{{$n->id}}" class="producer" name="producer">{{$n->name}}</option>
                                        @endforeach()
                                    </select>
                                   
                                </div>
                                 -->
                                 <fieldset class="form-group">
                                    <label>Nhà Sản Xuất</label>
                                    <input class="form-control"  name="producer">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Giá Nhập</label>
                                    <input class="form-control"  name="entryprice">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label>Giá Bán</label>
                                    <input class="form-control"  name="price">
                                </fieldset>


                                <fieldset class="form-group">
                                    <label>Sale</label>
                                    <input class="form-control"  name="sale">
                                </fieldset>

                            
                                    <label>Mô Tả</label>
                                  
                                    <textarea name="description" id="editor1" cols="30" rows="10"></textarea>
                                   
                                <!-- -------------------------------------------------------------------------- -->
                                
                                <fieldset class="form-group">
                                    <label>Màn Hình</label>
                                    <input class="form-control"  name="screen">
                                </fieldset>

                                
                                <fieldset class="form-group">
                                    <label>Hệ Điều Hành</label>
                                    <input class="form-control"  name="hdh">
                                </fieldset>

                                
                                <fieldset class="form-group">
                                    <label>Pin</label>
                                    <input class="form-control"  name="pin">
                                </fieldset>

                                
                                <fieldset class="form-group">
                                    <label>Ram</label>
                                    <input class="form-control"  name="ram">
                                </fieldset>

                                
                                <fieldset class="form-group">
                                    <label>Rom</label>
                                    <input class="form-control"  name="rom">
                                </fieldset>

                                
                                <fieldset class="form-group">
                                    <label>Màu</label>
                                    <input class="form-control"  name="color">
                                </fieldset>

                                
                                <fieldset class="form-group">
                                    <label>Camera Sau</label>
                                    <input class="form-control"  name="maincamera">
                                </fieldset>

                                
                                <fieldset class="form-group">
                                    <label>Camera Trước</label>
                                    <input class="form-control"  name="frontcamera">
                                </fieldset>
                                
                               
                                <div class="modal-footer">
                                <input type="submit" value="Lưu" />
                              <a href="{{route('hienthisanpham')}}"><button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy Bỏ</button><a>
                            </div>
                            {{ csrf_field() }} 
                            <!-- {{ csrf_field() }}  -->
                            </form>
                           
                        </div>
                    </div>
                </div>
@endsection

