@extends('admin.homeadmin')
@section('noidungchinh')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nhập lỗi</h6>
        <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                      
                        <form action="{{route('suachuapost')}}"  method="post">
                       
                    
                                <fieldset class="form-group">
                                    <label>Mã Hóa Đơn</label>
                                    <input class="form-control" value="{{$donhang->id}}" name="orderid">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Sản Phẩm Cần Sửa</label>
                                    <input class="form-control" value="{{$product->id}}" name="productid">
                                </fieldset>
                               
                                <fieldset class="form-group">
                                    <label>Khách Hàng</label>
                                    <input class="form-control" value="{{$customer->id}}" name="customerid">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Lỗi</label>
                                    <input class="form-control" value="" name="error">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Ngày Nhận</label>
                                    <input class="form-control" value="" name="datein">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Ngày Trả</label>
                                    <input class="form-control" value="" name="dateout">
                                </fieldset>
                                <div class="modal-footer">
                                <input type="submit" value="Lưu" />
                          
                            </div>
                            {{ csrf_field() }} 
                            <!-- {{ csrf_field() }}  -->
                            </form>
                            
                        </div>
                    </div>
                </div>
@endsection

