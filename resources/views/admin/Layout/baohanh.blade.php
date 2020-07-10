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
                                <th>Ngày Đặt</th>
								<th>Nơi Giao</th>
								<th>Xem</th>
                                
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                                <th>Ngày Đặt</th>
								<th>Nơi Giao</th>
								<th>Xem</th>
                    </tr>
                </tfoot>
                <tbody>
             
                         @foreach($donhang  as $c)
							<tr class="rem1">
								
								<td class="invert">{{$c->orderdate}}</td>
								<td class="invert">{{$c->deliveryplace}} - {{$c->placedetail}}</td>
								<td class="invert"><a href="{{route('xemchitietdonhang', $c->id)}}">Xem</a></td>
                                
							</tr>
                            @endforeach
                    
                    
            
                
                </tbody>
            </table>
          
        </div>
    </div>
</div>
</div>
@endsection