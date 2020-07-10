<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Thỏa Sức Mua Sắm &amp; Không Lo Về Giá
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul style="text-align: end;">
						
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 0353304300
						</li>
						 @if(Auth::check())
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> {{Auth::user()->name}} 
								<img src="{{Auth::user()->avatar}}" alt="" width="30px" height="30px"></a>
						</li>
						
						<li class="text-center text-white">
							<a href="{{Route('dangxuat')}}"  class="text-white">Đăng Xuất</a>
						</li>
					 
						@elseif(Session::has('dangnhap'))
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> {{Session('dangnhap')->name}} 
								<img src="{{Session('dangnhap')->avatar}}" alt="" width="30px" height="30px"></a>
						</li>
						
						<li class="text-center text-white">
							<a href="{{Route('dangxuat')}}"  class="text-white">Đăng Xuất</a>
						</li>
						@else
						
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng Nhập </a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng Ký </a>
						</li>
						@endif
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>