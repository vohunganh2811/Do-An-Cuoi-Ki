@extends('homelayout')
@section('NoiDung')
<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>hi
				<span>T</span>iết</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul >
								<ul data-thumb="img/{{$sanpham_chitiet->image}}">
									<div class="thumb-image">
										<img src="img/{{$sanpham_chitiet->image}}" data-imagezoom="true" class="img-fluid" alt="" width="400px" height="400px"> </div>
								</ul>
								<!-- <li data-thumb="img/{{$sanpham_chitiet->image2}}">
									<div class="thumb-image">
										<img src="img/{{$sanpham_chitiet->image2}}" data-imagezoom="true" class="img-fluid" alt="" width="100" height="100"> </div>
								</li>
								<li data-thumb="img/{{$sanpham_chitiet->image3}}">
									<div class="thumb-image">
										<img src="img/{{$sanpham_chitiet->image3}}" data-imagezoom="true" class="img-fluid" alt="" width="100" height="100"> </div>
								</li> -->
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{$sanpham_chitiet->name}}</h3>
					<p class="mb-3">
                    @if($sanpham_chitiet->saleprice==0)
                    <span class="item_price">{{number_format($sanpham_chitiet->price)}} VND</span>
					
                    @else
                    <span class="item_price">{{number_format($sanpham_chitiet->saleprice)}} VND</span>
						<del class="mx-2 font-weight-light">{{number_format($sanpham_chitiet->price)}} VND</del>
						
					@endif
					</p>
					<!-- <div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Cash on Delivery Eligible.
							</li>
							<li class="mb-3">
								Shipping Speed to Delivery.
							</li>
							<li class="mb-3">
								EMIs from $655/month.
							</li>
							<li class="mb-3">
								Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
							</li>
						</ul>
					</div> -->
					<div class="product-single-w3l">
						
						<ul>
                    
							<tr class="mb-1">
							
							<?php
								echo nl2br($sanpham_chitiet->configuration); ?>
							</tr>
							
					
						</ul>
						
					</div>
					<a href="{{route('themgiohang', $sanpham_chitiet->id)}}">Mua Ngay</a>
					<!-- <div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value="VND" />
									<input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime" />
									<input type="hidden" name="amount" value="200.00" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="VND" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Đặt Mua" class="button" />
								</fieldset>
							</form>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection