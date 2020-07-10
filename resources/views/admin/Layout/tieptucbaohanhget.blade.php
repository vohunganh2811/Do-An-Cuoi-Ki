@extends('admin.homeadmin')
@section('noidungchinh')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nhập lỗi</h6>
        <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                      
                        <form action="{{route('suachuapost', $guarantee_item->id)}}"  method="post">
                       
                    
                                <fieldset class="form-group">
                                    <label>Mã Hóa Đơn</label>
                                    <input class="form-control" value="{{$guarantee_item->orderid}}" name="orderid">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Sản Phẩm Cần Sửa</label>
                                    <input class="form-control" value="{{$guarantee_item->productid}}" name="productid">
                                </fieldset>
                               
                                <fieldset class="form-group">
                                    <label>Khách Hàng</label>
                                    <input class="form-control" value="{{$guarantee_item->customerid}}" name="customerid">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Lỗi</label>
                                    <input class="form-control" value="{{$guarantee_item->error}}" name="error">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Ngày Nhận</label>
                                    <input class="form-control" value="{{$guarantee_item->datein}}" name="datein">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Ngày Trả</label>
                                    <input class="form-control" value="{{$guarantee_item->dateout}}" name="dateout">
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

