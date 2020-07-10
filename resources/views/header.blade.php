
<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="{{route('home')}}" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Phone Shop
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="{{route('timkiem')}}" method="get">
							
								<input class="typeahead form-control mr-sm-2" type="search" placeholder="" aria-label="Search" required="" name="timkiem">
								<button class="btn my-2 my-sm-0" type="submit">Tìm Kiếm</button>
								{{ csrf_field() }}
							
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<!-- <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
							<span class="product-new-top">{{ Cart::count() }}</span>
							
								<a href="{{route('getgiohang')}}" >Giỏ Hàng</a>
							</div>
						</div> -->
						<a href="{{route('getgiohang')}}" ><span style="margin-left: 52px;">{{ Cart::count() }}</span>
							
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2" style="position: absolute;
    top: 8px;
    right: 37px;">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<img src="img/cart1.jfif" alt="" width="40px" height="40px">
								</form>
						
							</div>
						
						</div>
						</a>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">

				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul style="text-align: start" class="navbar-nav ml-auto text-center mr-xl-5">
					@can('admin')
					<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{route('hienthisanpham')}}">Trang Quản Trị
								<span class="sr-only">(current)</span>
							</a>
						</li>
						@endcan
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{route('home')}}">Trang Chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Sản Phẩm
							</a>
							<div class="dropdown-menu" style="display: none;">
								<div class="agile_inner_drop_nav_info p-4">
								<div class="row">
								<a href="{{route('xemsanpham')}}">Tất cả</a>
								</div>
									<div class="row">
									
									@foreach($tennsx as $tennsx)
										<div class="col-sm-6 multi-gd-img p-0">
											<ul class="multi-column-dropdown">
												<li>
												<a href="{{route('xemsanpham1',$tennsx->id)}}">{{$tennsx->name}}</a>
											
												</li>
											</ul>
										</div>
									@endforeach
									</div>
								</div>
							</div>
						</li>
						
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">Về Chúng Tôi</a>
						</li>

						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Đã Mua
							</a>
							<div class="dropdown-menu" style="display: none;">
							@if(Auth::check())
							<a class="dropdown-item" href="{{route('donhangcuatoi')}}">Đơn hàng cá nhân</a>
							@else
								<a class="dropdown-item" id="donhangcanhan" name="donhangcanhan" href="javascript:void(0)"  onclick="Redirect(); return false;"  >Đơn hàng cá nhân</a>
							@endif
								<a class="dropdown-item" href="payment.html">Thanh Toán</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Liên Hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<script language="javascript">
           
			function Redirect() {
				var t = prompt("Nhập Số Điện Thoại", '');
               window.location='/donhangcuatoi2/' + t;

            }
        </script>

<!-- 
	juery tìm kiem -->

	<script>
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>