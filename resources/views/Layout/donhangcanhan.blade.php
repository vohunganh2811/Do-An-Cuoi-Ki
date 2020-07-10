@extends('homelayout')
@section('NoiDung')

	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>X</span>em Đơn Hàng
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Đơn hàng của bạn:
			
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Sản Phẩm</th>
								<th>Số Lượng</th>
                                <th>Màu</th>
                                <th>Bộ Nhớ</th>
								<th>Giá</th>
								
								
								
							</tr>
						</thead>
						<tbody>
                     
                        @foreach($donhangcanhan  as $c)
							<tr class="rem1">
								
								<td class="invert">{{$c->productname}}</td>
								<td class="invert">{{$c->count}}</td>
                                <td class="invert">{{$c->color}}</td>
                                <td class="invert">{{$c->rom}}</td>
								<td class="invert">{{number_format($c->price)}}</td>
								
                                
							</tr>
                            @endforeach
                    
		
						</tbody>
					</table>
                    <h4 class="mb-sm-4 mb-3" style="margin-top: 10px" align="left">Giao đến:
						<span> {{$noigiaohang->deliveryplace}} - {{$noigiaohang->placedetail}} - </span>
						<span>Phí Giao Hàng: {{number_format($phigiao->shipcost)}} VND</span>
					</h4>
                    <h4 class="mb-sm-4 mb-3" style="margin-top: 10px" align="left">Bạn cần thanh toán tổng cộng(Bao gồm phí giao):
						<span> {{number_format($tien)}} VND</span>
					</h4>
				</div>
			</div>
		
		</div>
	</div>

@endsection
