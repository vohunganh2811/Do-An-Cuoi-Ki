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
                        <th>Đã Bán</th>
                        <th>Tổng Tiền</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Hình</th>
                        <th>Đã Bán</th>
                        <th>Tổng Tiền</th>
                    </tr>
                </tfoot>
                <tbody>
             
           <tr>
                         <th>{{$sptk->id}}</th>
                        <td>{{$sptk->name}}</td>
                        <td><img src="img/{{$sptk->image}}" alt=""  class="img-responsive" width="40px" height="40px"></td>
                        <td>{{$soluong}}</td>
                        <td>{{$tong}}</td>
                        
                    </tr>
                    
            
                
                </tbody>
            </table>
          
        </div>
    </div>
</div>
</div>
@endsection