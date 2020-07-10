@extends('homelayout')
@section('NoiDung')
@if(Auth::check())
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>X</span>em Đơn Hàng
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Đơn hàng của bạn:
					<span>{{$user->name}}</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Ngày Đặt</th>
								<th>Nơi Giao</th>
								<th>Xem</th>
							</tr>
						</thead>
						<tbody>
                     
                        @foreach($donhanguser  as $c)
							<tr class="rem1">
								
								<td class="invert">{{$c->orderdate}}</td>
								<td class="invert">{{$c->deliveryplace}} - {{$c->placedetail}}</td>
								<td class="invert"><a href="{{route('xemdonhangtheosdt', $c->id)}}">Xem</a></td>
                                
							</tr>
                            @endforeach
                    
		
						</tbody>
					</table>
                   
				</div>
			</div>
		
		</div>
	</div>
@else
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>X</span>em Đơn Hàng
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Đơn hàng của bạn:
					<span>{{$khachhang->name}}</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Ngày Đặt</th>
								<th>Nơi Giao</th>
								<th>Xem</th>
							</tr>
						</thead>
						<tbody>
                     
                        @foreach($donhang  as $c)
							<tr class="rem1">
								
								<td class="invert">{{$c->orderdate}}</td>
								<td class="invert">{{$c->deliveryplace}} - {{$c->placedetail}}</td>
								<td class="invert"><a href="{{route('xemdonhangtheosdt', $c->id)}}">Xem</a></td>
                                
							</tr>
                            @endforeach
                    
		
						</tbody>
					</table>
                   
				</div>
			</div>
		
		</div>
	</div>
@endif
@endsection
