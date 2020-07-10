@if (!isset($error))

@else
 {{$error}}
@endif
@extends('homelayout')
@section('NoiDung')
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center ">
				<span>S</span>ản
				<span>P</span>hẩm
				</h3>
			<!-- //tittle heading -->
			<div class="row" style="width: 1200px;">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9" style="width:60%;margin:0 auto;margin-left: -51px;">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3  mb-4" style="box-shadow: 0px 0px 15px 0px #fff;">
						
						
							<div class="row" style="width:1200px">
							@foreach($dienthoai as $dt)
							@if($dt->sale!=0)
								<div class="col-md-4 product-men mt-5" style="max-width: 20%;">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="img/{{$dt->image}}" alt="" width="250px" height="250px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('xemchitiet', $dt->id)}}" class="link-product-add-cart">Chi Tiết</a>
												</div>
											</div>
										</div>
										<span class="product-new-top">Sale {{$dt->sale}}%</span>
										<div class="item-info-product text-center border-top mt-4" style="margin-left: 28px;">
											<h4 class="pt-1">
												<a href="{{route('xemchitiet', $dt->id)}}">{{$dt->name}}</a>
											</h4>
											<div class="info-product-price my-2">
											<span class="item_price">{{number_format($dt->price*(100-$dt->sale)/100)}} VND</span>
												<del style="margin-left: 1px;font-size: 13px">{{number_format($dt->price)}} VND</del>
											</div>
											
										</div>
									</div>
								</div>
								@elseif($dt->sale!=NULL)
								<div class="col-md-4 product-men mt-5" style="max-width: 20%;">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="img/{{$dt->image}}" alt="" width="250px" height="250px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('xemchitiet', $dt->id)}}" class="link-product-add-cart">Chi Tiết</a>
												</div>
											</div>
										</div>
										<span class="product-new-top">Sale {{$dt->sale}}%</span>
										<div class="item-info-product text-center border-top mt-4" style="margin-left: 28px;">
											<h4 class="pt-1">
												<a href="{{route('xemchitiet', $dt->id)}}">{{$dt->name}}</a>
											</h4>
											<div class="info-product-price my-2">
											<span class="item_price">{{number_format($dt->price*(100-$dt->sale)/100)}} VND</span>
												<del style="margin-left: 1px;font-size: 13px">{{number_format($dt->price)}} VND</del>
											</div>
											
										</div>
									</div>
								</div>
								@else
								<div class="col-md-4 product-men mt-5" style="max-width: 20%;">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="img/{{$dt->image}}" alt="" width="250px" height="250px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('xemchitiet', $dt->id)}}" class="link-product-add-cart">Chi Tiết</a>
												</div>
											</div>
										</div>
										
										<div class="item-info-product text-center border-top mt-4" style="margin-left: 28px;">
											<h4 class="pt-1">
												<a href="{{route('xemchitiet', $dt->id)}}">{{$dt->name}}</a>
											</h4>
											<div class="info-product-price my-2">
										
												<del style="margin-left: 1px;font-size: 13px">{{number_format($dt->price)}} VND</del>
											</div>
											
										</div>
									</div>
								</div>
								
								@endif
							@endforeach
							</div>
							
						</div>
						<!-- //first section -->
						<!-- second section -->
			
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				
			</div>

			
		</div>
	</div>


    
@endsection