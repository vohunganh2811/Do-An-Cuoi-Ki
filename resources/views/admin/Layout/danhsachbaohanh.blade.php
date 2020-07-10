@extends('admin.homeadmin')
@section('noidungchinh')
<div class="contain)er-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bảo Hành</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                                <th>Mã Đơn</th>
								<th>Sản Phẩm Sửa</th>
								<th>Khách Hàng</th>
                                <th>Lỗi</th>
								<th>Ngày Nhận</th>
								<th>Ngày Trả</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                                 <th>Mã Đơn</th>
								<th>Sản Phẩm Sửa</th>
								<th>Khách Hàng</th>
                                <th>Lỗi</th>
								<th>Ngày Nhận</th>
								<th>Ngày Trả</th>
                    </tr>
                </tfoot>
                <tbody>
             
                         @foreach($guarantee  as $c)
							<tr class="rem1">
								
								<td class="invert">{{$c->orderid}}</td>
								<td class="invert">{{$c->productid}}</td>
                                <td class="invert">{{$c->customerid}}</td>
								<td class="invert">{{$c->error}}</td>
                                <td class="invert">{{$c->datein}}</td>
								<td class="invert">{{$c->dateout}}</td>
								<td class="invert"><a href="{{route('tieptucbaohanhget', $c->id)}}">Tiếp Tục Bảo Hành</a></td>
                                
							</tr>
                            @endforeach
                    
                    
            
                
                </tbody>
            </table>
          
        </div>
    </div>
</div>
</div>
@endsection