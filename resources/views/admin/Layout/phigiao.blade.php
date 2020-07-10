@extends('admin.homeadmin')
@section('noidungchinh')
<div class="contain)er-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Phí Giao</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Thành Phố</th>
                        <th>Phí Giao Đến</th>
                        <th>Thao Tác</th>
                       
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr> 
                        <th>Thành Phố</th>
                        <th>Phí Giao Đến</th>
                        <th>Thao Tác</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($thanhpho as $tp)
                    <tr>
                        <td>{{$tp->name}}</td>
                        <td>{{$tp->shipcost}}</td>
                        <td>
                   
                    <a href="{{route('getphigiao', $tp->id)}}"><button class="btn btn-primary editt" data-toggle="modal" data-target="#edit" type="button" onclick="alert('Sửa Thành Công')"><i class="fas fa-edit" ></i></button></a>

              
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