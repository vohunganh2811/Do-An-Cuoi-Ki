<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
				<form action="{{route('locsanpham')}}" method="get">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Nhà sản xuất</h3>
								<!-- <input id="txt-tu-khoa" type="search" placeholder="Tìm Kiếm" name="Tìm Kiếm">
								<button id="btn-loc" class="btn btn-primary">Tìm</button> -->
							<div class="left-side py-2">
								<ul>
								@foreach($tennsx as $ten)
									<li>
									<input value="{{$ten->id}}" type="checkbox"  name="cbten[]">
									<a href="#">{{$ten->name}}</a> 
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- ram -->
                        <div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Sale</h3>
							<div class="left-side py-2">
								<ul>
								@foreach($sale as $s)
								@if($s->sale !=0)
									<li>
										<input type="checkbox" name="cbsale[]" value="{{$s->sale}}">
										<a href="#">{{$s->sale}} %</a>
									</li>
									@endif
								@endforeach
									
								</ul>
							</div>
						</div>
						<!-- //ram -->
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="left-side py-2">
								<ul>
								@foreach($khoanggia as $kg)
									<li>
										<input type="checkbox" name="cbgia[]" value="{{$kg->id}}">
										<a href="#">{{number_format($kg->price1)}}-{{number_format($kg->price2)}} VND</a>
									</li>
								@endforeach
									
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						
						<!-- //arrivals -->
					</div>
					<input type="submit" value="Lọc" />
					
					</form>
					<!-- //product right -->

                    <div class="f-grid py-2">
                        <h3 class="agileits-sear-head mb-3">Top khuyến mãi trong tháng</h3>
                        <div class="box-scroll">
                            <div class="scroll" style="top: -365.173px;">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                            <img src="img/a202.jpg" alt="Asus Zenbook Duo UX581GV-H2029T" class="img-fluid">
                                        </div>
                                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                            <a href="">Samsung Galaxy A20</a>
                                            <a href="" class="price-mar mt-2">4000000 VND</a>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                            <img src="img/a501.png" alt="Asus Zenbook Duo UX581GV-H2029T" class="img-fluid">
                                        </div>
                                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                            <a href="">Samsung Galaxy A50</a>
                                            <a href="" class="price-mar mt-2">5000000 VND</a>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                            <img src="img/a302.jpg" alt="Asus Zenbook Duo UX581GV-H2029T" class="img-fluid">
                                        </div>
                                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                            <a href="">Samsung Galaxy A30</a>
                                            <a href="" class="price-mar mt-2">4000000 VND</a>
                                        </div>
                                    </div>
                                    <br>
                                   
                            </div>
                        </div>
                    </div>
				</div>

               
				