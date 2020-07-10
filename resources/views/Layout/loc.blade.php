

@if (!isset($error))

@else
 {{$error}}
@endif
@extends('homelayout')
@section('NoiDung')


<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Điện Thoại</span>
				</h3>
			<!-- //tittle heading -->
			
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
					
                            @foreach($all as $item)
								<div class="col-md-4 product-men mt-md-0 mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="img/{{$item->image}}" alt="" width="250px" height="250px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('xemchitiet', $item->id)}}" class="link-product-add-cart">Chi Tiết</a>
												</div>
											</div>
											<!-- <span class="product-new-top">New</span> -->

										</div>
										@if($item->new==1)
										<span class="product-new-top">Mới</span>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('xemchitiet', $lst->id)}}">{{$item->name}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">{{number_format($item->saleprice)}} VND</span>
												<del>{{number_format($item->price)}} VND </del>
											</div>
											

										</div>
										@else
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('xemchitiet', $lst->id)}}">{{$item->name}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">{{number_format($item->price)}} VND</span>
											
											</div>
									

										</div>

										@endif
									</div>
								</div>
								@endforeach
                             
							</div>
						
						</div>
			
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
		
				@include('khungloc')
			
			</div>
		</div>
	</div>
</div>

<script src="customjs/sanpham.js"></script>

@endsection