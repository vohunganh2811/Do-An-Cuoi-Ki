@extends('homelayout')
@section('NoiDung')

@if(Auth::check())
<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Giỏ Hàng</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Giỏ Hàng Của Bạn:
					<span>{{ Cart::count() }} Sản Phẩm</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>ID</th>
								<th>Hình</th>
								<th>Số Lượng</th>
								<th>Lưu</th>
								<th>Sản Phẩm</th>
								<th>Bộ Nhớ</th>
								<th>Màu</th>
								<th>Giá</th>
								<th>Xóa</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php $i = 1;?>
                        @foreach(Cart::content()  as $c)
							<tr class="rem1">
								<td class="invert">{{$c->id}}</td>
								<td class="invert-image">
									<a href="#">
										<img src="img/{{$c->options->image}}" alt=""  class="img-responsive" width="40px" height="40px">
									</a>
								</td>
								<form action="{{Route('suagiohang',$c->rowId)}}" method="post">
								<td class="invert"> 
										<div class="quantity" >
											<div class="form-group">
										
												<input type="number" name="qty" class="form-control qty" value="{{ $c->qty }}" min='1' data-id="{{ $c->rowId }}" >
										
											</div>
										</div>
										</td>

										<td class="invert">
								<div class="rem">
                                    <input type="submit" class="form-control" value="Lưu" id="btnluu">
									</div>
									</td>
								{{ csrf_field() }} 
								</form>
								<!-- <td class="invert"> 
										<div class="quantity" href="route('suagiohang',$c->qty)">
											<div class="form-group">
										
												<input type="number" name="qty" class="form-control qty" value="{{ $c->qty }}" min='1' data-id="{{ $c->rowId }}" >
										
											</div>
										</div>
									</td> -->
								<td class="invert">{{$c->name}}</td>
								<td class="invert">{{$c->options->rom}}</td>
								<td class="invert">{{$c->options->color}}</td>
								<td class="invert">{{number_format($c->price)}}</td>
								<td class="invert">
									<div class="rem">
                                    <a href="{{route('xoagiohang', $c->rowId)}}">Xóa</a>
									</div>	
								</td>
								
							</tr>
                            @endforeach
                            <?php $i++; ?>
							
						</tbody>
					</table>
                    <h4 class="mb-sm-4 mb-3" style="margin-top: 10px" align="right">Bạn cần thanh toán tổng cộng(chưa tính phí ship):
						<span>{{Cart::subtotal()}} VND</span>
					</h4>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
				
				
					<div class="checkout-right-basket">
						<a href="{{route('dathang')}}" onclick="alert('Đặt Hàng Thành Công, Vui Lòng Kiểm Tra Đơn Hàng Vừa Đặt')">Đặt Hàng
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	@elseif(Session::has('dangnhap'))
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Giỏ Hàng Của Bạn:
					<span>{{ Cart::count() }} Sản Phẩm</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>ID</th>
								<th>Hình</th>
								<th>Số Lượng</th>
								<th>Lưu</th>
								<th>Sản Phẩm</th>

								<th>Giá</th>
								<th>Xóa</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php $i = 1;?>
                        @foreach(Cart::content()  as $c)
							<tr class="rem1">
								<td class="invert">{{$c->id}}</td>
								<td class="invert-image">
									<a href="#">
										<img src="dt/{{$c->options->image}}" alt=""  class="img-responsive" width="30px" height="40px">
									</a>
								</td>
								<form action="{{Route('suagiohang',$c->rowId)}}" method="post">
								<td class="invert"> 
										<div class="quantity" >
											<div class="form-group">
										
												<input type="number" name="qty" class="form-control qty" value="{{ $c->qty }}" min='1' data-id="{{ $c->rowId }}" >
										
											</div>
										</div>
										</td>

										<td class="invert">
								<div class="rem">
                                    <input type="submit" class="form-control" value="Lưu" id="btnluu">
									</div>
									</td>
								{{ csrf_field() }} 
								</form>
								<!-- <td class="invert"> 
										<div class="quantity" href="route('suagiohang',$c->qty)">
											<div class="form-group">
										
												<input type="number" name="qty" class="form-control qty" value="{{ $c->qty }}" min='1' data-id="{{ $c->rowId }}" >
										
											</div>
										</div>
									</td> -->
								<td class="invert">{{$c->name}}</td>
								<td class="invert">{{number_format($c->price)}}</td>
								<td class="invert">
									<div class="rem">
                                    <a href="{{route('xoagiohang', $c->rowId)}}">Xóa</a>
									</div>	
								</td>
								
							</tr>
                            @endforeach
                            <?php $i++; ?>
							
						</tbody>
					</table>
                    <h4 class="mb-sm-4 mb-3" style="margin-top: 10px" align="right">Bạn cần thanh toán tổng cộng:
						<span>{{Cart::subtotal()}} VND</span>
					</h4>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Nhập Thông Tin</h4>
					<form action="{{route('dathangpost')}}" method="post" class="creditly-card-form agileinfo_form">
					{{ csrf_field() }} 
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Điện Thoại" name="phone" required="phone">
											</div>
										</div>
										
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Địa Chỉ" name="address" required="phone">
									</div>
									
								</div>
								<div class="checkout-right-basket">
							<input type="submit" value="Đặt Hàng" />
					</div>
					
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	@else
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Giỏ Hàng Của Bạn:
					<span>{{ Cart::count() }} Sản Phẩm</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>ID</th>
								<th>Hình</th>
								<th>Số Lượng</th>
								<th>Lưu</th>
								<th>Sản Phẩm</th>
								<th>Bộ Nhớ</th>
								<th>Màu</th>

								<th>Giá</th>
								<th>Xóa</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php $i = 1; ?>
                        @foreach(Cart::content()  as $c)
							<tr class="rem1">
								<td class="invert">{{$c->id}}</td>
								<td class="invert-image">
									<a href="#">
										<img src="img/{{$c->options->image}}" alt=""  class="img-responsive" width="40px" height="40px">
									</a>
								</td>
								<form action="{{Route('suagiohang',$c->rowId)}}" method="post">
								<td class="invert"> 
										<div class="quantity" >
											<div class="form-group">
										
												<input type="number" name="qty" class="form-control qty" value="{{ $c->qty }}" min='1' data-id="{{ $c->rowId }}" >
										
											</div>
										</div>
										</td>

										<td class="invert">
								<div class="rem">
                                    <input type="submit" class="form-control" value="Lưu" id="btnluu">
									</div>
									</td>
								{{ csrf_field() }} 
								</form>
								
								<td class="invert">{{$c->name}}</td>
								<td class="invert">{{$c->options->rom}}</td>
								<td class="invert">{{$c->options->color}}</td>
								<td class="invert">{{number_format($c->price)}}</td>
								
								<td class="invert">
									<div class="rem">
                                    <a href="{{route('xoagiohang', $c->rowId)}}">Xóa</a>
									</div>	
								</td>
								
							</tr>
                            @endforeach
                            <?php $i++; ?>
		
						</tbody>
					</table>
                    <h4 class="mb-sm-4 mb-3" style="margin-top: 10px" align="right">Bạn cần thanh toán tổng cộng (chưa tính phí giao):
						<span>{{Cart::subtotal()}} VND</span>
					</h4>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Nhập Thông Tin</h4>
					<form action="{{route('dathangpost')}}" method="post" class="creditly-card-form agileinfo_form" style="width:50%" id="formthongtin" name="formthongtin" onsubmit="return validate(this);">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" id="name" placeholder="Họ Tên" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Điện Thoại" name="phone" id="phone" required="" />
											</div>
										</div>
										
									</div>
								
									<select style="    padding-bottom: 0px;
										height: 50px;
										padding-top: 0px;" class="form-control"  name="city" id="city">
                                    @foreach($thanhpho as $tp)
                                        <option value="{{$tp->name}}" class="city" name="city" id="city">{{$tp->name}}</option>
                                        @endforeach
                                    </select>
									</div>
									
										<input type="text" class="form-control" placeholder="Địa chỉ" name="address" id="address" required="">
									</div>
									
									
								</div>
								
								<div class="checkout-right-basket">
								<button type="submit"  id="dathang" name="dathang" >Đặt Hàng</button>
					</div>
					{{ csrf_field() }} 
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	@endif
@endsection

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
$("#formthongtin").submit(function (e) {
if ($("#name").val() == "" ) {
$("#name").css('box-shadow', '0px 0px 7px red');
alert('Vui lòng nhập tên!!!');
e.preventDefault(); 
} 
});

$("#formthongtin").submit(function (e) {
if ($("#phone").val() == "" ) {
$("#phone").css('box-shadow', '0px 0px 7px red');
alert('Vui lòng nhập số điện thoại!!!');
e.preventDefault(); 
} 
});

$("#formthongtin").submit(function (e) {
if ($("#city").val() == "" ) {
$("#city").css('box-shadow', '0px 0px 7px red');
alert('Vui lòng chọn thành phố!!!');
e.preventDefault(); 
} 
});

$("#formthongtin").submit(function (e) {
if ($("#address").val() == "" ) {
$("#address").css('box-shadow', '0px 0px 7px red');
alert('Vui lòng nhập địa chỉ!!!');
e.preventDefault(); 
} 
});
});


</script>

<script type="text/JavaScript">  
function validate() 
{
if( document.formthongtin.city.value == "" || document.formthongtin.name.value == ""|| document.formthongtin.phone.value == "" || document.formthongtin.address.value == "" )
   {
     alert( "Vui lòng điền đủ thông tin" );
     return false;
   }
  
   else
   {
	   alert("Đặt hàng thành công! Quý khách có thể xem lại đơn hàng trong đơn hàng cá nhân");
	   return true;
   }
}

</script>