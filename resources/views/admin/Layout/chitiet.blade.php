@extends('admin.homeadmin')
@section('noidungchinh')
<div class="contain)er-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi Tiết</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Bảo Hành</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr> 
                        <th>Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Bảo Hành</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($chitiet as $chitiet)
                    <tr>
                        <td>{{$chitiet->productname}}</td>
                        <td>{{$chitiet->count}}</td>
                        <td>{{$chitiet->price}}</td>
                        <td class="invert"><a href="{{route('suachuaget', ['orderid'=>$chitiet->orderid, 'productid'=>$chitiet->productid])}}">Sửa Chữa</a></td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            
                    <h4 class="mb-sm-4 mb-3" style="margin-top: 10px" align="left">Chi phí thanh toán tổng cộng(Bao gồm phí giao):
						<span> {{number_format($tien)}} VND</span>
					</h4>
        </div>
    </div>
</div>
</div>
@endsection