@extends('homelayout')
@section('NoiDung')
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Trang Chủ</a>
						<i>|</i>
					</li>
					<li>Chi Tiết</li>
				</ul>
			</div>
		</div>
	</div>

    <div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
                       
							<div class="clearfix"></div>
						<!-- <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1311px, 0px, 0px);"> -->
                        <!-- <li data-thumb="images/si3.jpg" class="clone" aria-hidden="true" style="width: 437px; margin-right: 0px; float: left; display: block;">
									<div class="thumb-image">
										<img src="images/si3.jpg" data-imagezoom="true" class="img-fluid" alt="" draggable="false"> </div>
								</li>
								<li data-thumb="images/si1.jpg" style="width: 437px; margin-right: 0px; float: left; display: block;" class="" data-thumb-alt="">
									<div class="thumb-image">
										<img src="images/si1.jpg" data-imagezoom="true" class="img-fluid" alt="" draggable="false"> </div>
								</li>
								<li data-thumb="images/si2.jpg" data-thumb-alt="" class="" style="width: 437px; margin-right: 0px; float: left; display: block;">
									<div class="thumb-image">
										<img src="images/si2.jpg" data-imagezoom="true" class="img-fluid" alt="" draggable="false"> </div>
								</li> -->
                                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1311px, 0px, 0px);">
                                <li data-thumb="dt/{{$sanpham_chitiet->slideimg1}}" style="width: 437px; margin-right: 0px; float: left; display: block;" class="clone" aria-hidden="true">
									<div class="thumb-image">
										<img src="dt/{{$sanpham_chitiet->slideimg1}}" data-imagezoom="true" class="img-fluid" alt="" draggable="false"> </div>
								</li>
                                <li data-thumb="dt/{{$sanpham_chitiet->slideimg2}}" data-thumb-alt="" class="flex-active-slide" style="width: 437px; margin-right: 0px; float: left; display: block;">
									<div class="thumb-image">
										<img src="dt/{{$sanpham_chitiet->slideimg2}}" data-imagezoom="true" class="img-fluid" alt="" draggable="false" > </div>
								</li>
                                <li data-thumb="dt/{{$sanpham_chitiet->slideimg3}}" data-thumb-alt="" class="flex-active-slide" style="width: 437px; margin-right: 0px; float: left; display: block;">
									<div class="thumb-image">
										<img src="dt/{{$sanpham_chitiet->slideimg3}}" data-imagezoom="true" class="img-fluid" alt="" draggable="false" > </div>
								</li>
							</ul></div>
                                <ol class="flex-control-nav flex-control-thumbs">
                                <!-- <li><img src="images/si1.jpg" class="" draggable="false"></li>
                                <li><img src="images/si2.jpg" draggable="false" class=""></li>
                                <li><img src="images/si3.jpg" draggable="false" class="flex-active"></li> -->
                                </ol><ul class="flex-direction-nav">
                                <li class="flex-nav-prev">
                                <a class="flex-prev" href="#">Previous</a>
                                </li>
                                <li class="flex-nav-next">
                                <a class="flex-next" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
					</div>
					<div class="clear"></div>
					<div class="compare">
        <div class="tcpr">
            <h4>So sánh với các sản phẩm tương tự</h4>
            
        </div>
        <ul>
		@foreach($sanpham_tuongtu as $sptt)
                    <li>
                        <a href="{{route('xemchitiet', $sptt->id)}}">
                            <img data-original="dt/{{$sptt->image}}" class="lazy" src="img/{{$sptt->image}}" style="display: inline;">
                           
                            <h3 style="font-size: 16px;">{{$sptt->name}}</h3>
                                    <strong>{{$sptt->price}}</strong>
                                                            <span class="rtp">
                                            <i class="iconcom-txtstar"></i>
                                            <i class="iconcom-txtstar"></i>
                                            <i class="iconcom-txtstar"></i>
                                            <i class="iconcom-txtunstar"></i>
                                            <i class="iconcom-txtunstar"></i>
                                </span>
                                                           
                        </a>
                    </li>
					@endforeach
                    <!-- <li>
                        <a href="/dtdd/oppo-reno2-f">
                            <img data-original="https://cdn.tgdd.vn/Products/Images/42/209800/oppo-reno2-f-green-mtp-400x400.jpg" class="lazy" src="https://cdn.tgdd.vn/Products/Images/42/209800/oppo-reno2-f-green-mtp-400x400.jpg" style="display: inline;">
                            <span class="bdx">
                            </span>
                            <h3 style="font-size: 16px;margin-top: -10px">OPPO Reno2 F</h3>
                                    <strong>8.990.000₫</strong>
                                                            <span class="rtp">
                                            <i class="iconcom-txtstar"></i>
                                            <i class="iconcom-txtstar"></i>
                                            <i class="iconcom-txtstar"></i>
                                            <i class="iconcom-txtunstar"></i>
                                            <i class="iconcom-txtunstar"></i>
                                </span>
                                                          
                        </a>
                          
                    </li> -->
                    
        </ul>
    </div>
					<div class="comdetail">

						<div class="boxRatingCmt" id="boxRatingCmt">
								
								<div class="clear" style="margin-bottom:30px"></div>
							<div class="hrt" id="danhgia">
								<div class="tltRt ">
									<h3 data-s="4" data-gpa="4" data-c="1">1 đánh giá iPhone 11 Pro Max 64GB</h3>
									
								</div>
							</div>
						
							<div class="toprt">
									<div class="crt">
						
											<div class="lcrt hide" data-gpa="4">
												<b>4 <i class="iconcom-star"></i></b>
												
											</div>
											<div class="rcrt">
												<div class="r">
													<span class="t">5 <i></i></span>
													<div class="bgb">
														<div class="bgb-in" style="width: 0%"></div>
													</div>
													<span class="c n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
												</div>
						
												<div class="r">
													<span class="t">4 <i></i></span>
													<div class="bgb">
														<div class="bgb-in" style="width: 100%"></div>
													</div>
													<span class="c" onclick="ratingCmtList(1,4)" data-buy="1"><strong>1</strong> đánh giá</span>
												</div>
						
												<div class="r">
													<span class="t">3 <i></i></span>
													<div class="bgb">
														<div class="bgb-in" style="width: 0%"></div>
													</div>
													<span class="c n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
												</div>
						
												<div class="r">
													<span class="t">2 <i></i></span>
													<div class="bgb">
														<div class="bgb-in" style="width: 0%"></div>
													</div>
													<span class="c n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
												</div>
						
												<div class="r">
													<span class="t">1 <i></i></span>
													<div class="bgb">
														<div class="bgb-in" style="width: 0%"></div>
													</div>
													<span class="c n" onclick="" data-buy="0"><strong>0</strong> đánh giá</span>
												</div>
						
											</div>
											<div class="clear"></div>
										<div class="bcrt">
											<a href="javascript:showInputRating()">Gửi đánh giá của bạn</a>
										</div>
									</div>
								
									
						
						
						
								<form class="input" name="fRatingComment" style="display: none">
									<input type="hidden" name="hdfStar" id="hdfStar" value="0">
									<input type="hidden" name="hdfProductID" id="hdfProductID" value="200533">
									<input type="hidden" name="hdfRatingImg" class="hdfRatingImg">
									<div class="ips">
										<span>Chọn đánh giá của bạn</span>
										<span class="lStar">
											<i class="iconcom-unstar" id="s1"></i>
											<i class="iconcom-unstar" id="s2"></i>
											<i class="iconcom-unstar" id="s3"></i>
											<i class="iconcom-unstar" id="s4"></i>
											<i class="iconcom-unstar" id="s5"></i>
										</span>
										<span class="rsStar hide"></span>
									</div>
									
									
									<div class="ipt hide">
										<div class="ct">
											<textarea name="fRContent" placeholder="Nhập đánh giá về sản phẩm (tối thiểu 80 ký tự)" onkeyup="countTxtRating()"></textarea>
											<div class="extCt">
												<label onclick="javascript:void(0);" class="lnksimg btnRatingUpload"><i class="iconcom-pict"></i>Đính kèm ảnh</label>
												<span class="ckt"></span>
												<input id="hdFileRatingUpload" type="file" class="hide" accept="image/x-png, image/gif, image/jpeg">
											</div>
										</div>
										<div class="if">
											<input type="text" name="fRName" placeholder="Họ tên">
											<input type="text" name="fRPhone" placeholder="Số điện thoại">
											<input type="text" name="fREmail" placeholder="Email">
											<a href="javascript:submitRatingComment();">GỬI ĐÁNH GIÁ</a>
										</div>
									
										
										<ul class="resImg hide">
											
										</ul>
										<span class="lbMsgRt"></span>
									</div>
								</form>
							</div>
								<div class="list">
									<ul class="ratingLst">
						
												<li class="rr-38032569 reply hide">
													<input placeholder="Nhập thảo luận của bạn">
													<a href="javascript:ratingRelply(38032569);" class="rrSend">GỬI</a>
													<div class="ifrl hide">
														<span>Khách</span> | <a href="javascript:cmtEditName()">Nhập tên</a>
													</div>
												</li>
									</ul>
						
										
										
								</div>
						</div>
						
						
						
						
						<div class="wrap_comment" title="Bình luận sản phẩm" id="comment" cmtcategoryid="2" siteid="1" detailid="200533" cateid="15" urlpage="" pagesize="5">
							<div class="tltCmt">
								<textarea id="txtEditor" name="" cols="" rows="" class="parent_input txtEditor hide" placeholder="Mời bạn để lại bình luận..." onclick="cmtaddcommentclick();" onkeyup="cmtaddcommentclick();"></textarea>
								<form method="post" id="js_activity_feed_form" class="js_cmt_form" autocomplete="off">
									<div class="edtCmt">
										<textarea placeholder="mời bạn nhập bình luận" class="dropfirst textarea" id="content" name="content" style="overflow-y: visible;"></textarea>
										
										<div class="boxemotion">
											<div class="motionsend">
												<input id="hdFileCmtUpload" type="file" class="hide" accept="image/x-png, image/gif, image/jpeg"> <a href="javascript:void(0)" class="loadpic btnCmtUpload"><i class="iconcom-pict"></i><span>Gửi ảnh</span></a> <a href="https://www.thegioididong.com/huong-dan-dang-binh-luan" target="_blank" class="qd">Quy định đăng bình luận</a>
												<div class="cmt_right"> <a class="btnSend" href="javascript:void(0)" id="btnSendCmt" onclick="cmtSend();">Gửi</a> <span class="loading hide">Đang xử lý...</span>
												<!-- <input type="submit" value="Gửi" class="cmt_right" /> -->
													<div class="captchacmt hide"></div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="usermember"></div>
									<ul class="resCmtImg hide"></ul>
								</form>
								<div class="sortcomment">
									<div class="statistical hide" id="notifycmtmsg">Bình luận mới vừa được thêm vào. <a href="javascript:void(0)">Click để xem</a></div>
								</div>
								
							
							</div>
							<ul class="listcomment">
							@foreach($cm as $cm)
								<li class="comment_ask" id="38275699">
									<div class="rowuser">
										<a href="javascript:void(0)">
											<div>Á</div><strong onclick="selCmt(38275699)">{{$cm->user}}</strong></a>
									</div>
									<div class="question">{{$cm->content}}</div>
									<div class="actionuser" data-cl="0"><a href="javascript:void(0)" class="respondent" onclick="cmtaddreplyclick(38275699)">Trả lời</a><a href="javascript:void(0)" class="time" onclick="cmtReport(38275699)">9 phút trước </a></div>
									<div class="listreply" id="r38275699">
										<div class="reply " id="38275713" data-parent="38275699">
											<div class="rowuser">
												<a href="javascript:void(0)">
													<div class="c"><i class="iconcom-avactv"></i></div><strong onclick="selCmt(38275713)">Ánh Tuyết</strong><b class="qtv">Quản trị viên</b></a>
											</div>
											<div class="cont">Chào chị&nbsp;
												<br>Dạ để mua trả góp qua thẻ tín dụng mình có thể tuỳ chọn thanh toán với hạn mức thẻ hỗ trợ, số tiền còn lại thanh toán bằng tiền mặt&nbsp;chị&nbsp;nha. Số tiền góp mỗi tháng mình sẽ góp với ngân hàng ạ. Nếu thẻ của mình là thẻ Credit thì chị vui lòng cho em xin tên ngân hàng, loại thẻ (Visa,MasterCard,JCB…), hạn mức tín dụng còn lại để tư vấn gói lãi suất phù hợp ạ.&nbsp;
												<br>Mong nhận được phản hồi từ chị.</div>
											<div class="actionuser" data-cl="0"><a href="javascript:void(0)" class="respondent" onclick="cmtChildAddReplyClick(38275713,38275699)">Trả lời</a><a href="javascript:satisfiedCmt(38275713);" class="favor satis cmthl"><i class="iconcom-like"></i>Hài lòng<span></span></a><a href="javascript:unsatisfiedCmt(38275713);" class="favor satis cmtkhl"><i class="iconcom-unlike"></i>Không hài lòng<span></span></a><a href="javascript:void(0)" class="time" onclick="cmtReport(38275713)">8 phút trước </a>
												<div id="wrs38275713" class="wrapsatis" style="display: none;">
													<div class="wrsct"><i class="iconcom-close" onclick="closeSatis();"></i><span>Thegioididong.com rất tiếc đã làm bạn chưa hài lòng. Mời bạn góp ý để <b>QTV Ánh Tuyết</b> phục vụ tốt hơn:</span>
														<textarea placeholder="Nhập nội dung góp ý" type="text" class="ustCt"></textarea><span>Hãy để lại thông tin để được hỗ trợ khi cần thiết (không bắt buộc):</span>
														<input placeholder="Họ tên" type="text" class="ustName">
														<input placeholder="Số điện thoại" type="text" class="ustPhone"><a href="javascript:sendUnSatisfied(38275713)">GỬI</a></div>
												</div>
											</div>
										</div>
									</div>
									<div class="inputreply hide"></div>
								</li>
							@endforeach
						
								<form action="{{route('binhluan')}}" method="post">
								<div class="pagcomment"><span class="active">1</span><a onclick="listcomment(2,1,2);return false;" title="trang 2">2</a><a onclick="listcomment(2,1,3);return false;" title="trang 3">3</a><a onclick="listcomment(2,1,4);return false;" title="trang 4">4</a><span>...</span><a onclick="listcomment(2,1,54);return false;" title="trang 54">54</a><a onclick="listcomment(2,1,2);return false;" title="trang 2">»</a></div>
							</ul>
							<textarea id="txtEditorExt" name="txtEditor" cols="" rows="" class="txtEditor" placeholder="Mời Bạn để lại bình luận..."></textarea>
							<input type="text" name="tenbinhluan" placeholder="Nhập tên">
							<input type="hidden" name="productcm" value="{{$sanpham_chitiet->id}}" class="productcm" >									
							<div class="ajaxcomment hide">
								<div id="loadcomment"></div>
							</div>
							<input type="submit" value="Gửi" name="btngui">
							{{ csrf_field() }}
							</form>
						</div>
						</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">Thông số kỹ thuật</h3>
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Điện Thoại</div>
						<div class="col-md-6"><span style="color: #288ad6;"> {{$sanpham_chitiet->name}}</span></div>
					</div>
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Màn hình </div>
						<div class="col-md-6"> <span style="color: #288ad6;">{{$sanpham_chitiet1->namescreen}}</span> </div>

					</div>
					
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Hệ điều hành </div>
						<div class="col-md-6"> <span style="color: #288ad6;">{{$sanpham_chitiet1->operatingsystemname}}</span> </div>
					</div>
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Camera sau </div>
						<div class="col-md-6">{{$sanpham_chitiet->maincamera}}</div>
					</div>
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Camera trước</div>
						<div class="col-md-6"> {{$sanpham_chitiet->frontcamera}}</div>
					</div>
					
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Ram</div>
						<div class="col-md-6"> {{$sanpham_chitiet2->nameram}}</div>
					</div>
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Bộ nhớ trong</div>
						<div class="col-md-6"> {{$sanpham_chitiet3->namerom}}</div>
					</div>
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Thẻ nhớ</div>
						<div class="col-md-6"><span style="color: #288ad6;">MicroSD, hỗ trợ tối đa 512 GB</span> </div>
					</div>
					<div class="product__line"></div>
					<div class="row table__product">
						<div class="col-md-6">Thẻ sim</div>
						<div class="col-md-6">
							2 Nano SIM, Hỗ trợ 4G</div>
					</div>
					<div class="product__line"></div>
					<form action="{{route('themgiohang', $sanpham_chitiet->id)}}" method="get" id="formthemgiohang" name="formthemgiohang" onsubmit="return validate(this);">
					<div class="product-single-w3l">
						<div class="table__style text-center">
							
								
							<div class="form-group" style="    float: left;
   							 margin-right: 20px;
    						 margin-top: 0px;
							 ">
                                   
                                 
                                    <select class="form-control shadow-none"  name="color" id="color" style="width: 100%;outline: none;
    								margin-right: 30px;">
                                   
                                        <option  class="color" name="color" id="color">Màu Sắc</option>
										@foreach($color_product as $c)
										<option value="{{$c->namecolor}}" class="color" name="color" id="color">{{$c->namecolor}}</option>
										@endforeach
										@if ($errors->has('color'))
										<p class="help is-danger">{{ $errors}}</p>
										@endif
                                    </select>
                                   
                                </div>
								<div class="form-group" style="    float: left;
   							 margin-right: 20px;
    						 margin-top: 0px;
							 ">
                                   
                                 
								   <select class="form-control shadow-none"  name="rom"  id="rom" style="width: 100%;outline: none;
    								margin-right: 30px;">
								  
									   <option value="Rom" class="rom" name="rom" id="rom">Rom</option>
									   @foreach($rom_product as $r)
										<option value="{{$r->namerom}}" class="rom" name="rom" id="rom">{{$r->namerom}}</option>
										@endforeach
										@if ($errors->has('rom'))
										<p class="help is-danger">{{ $errors }}</p>
										@endif
								   </select>
								  
							   </div>

							 
						</div>
						<div class="clear"></div>
						<p class="my-3">
							
							
					</p></div>

					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<!-- <button type="button" class="btn btn-primary">Mua Hàng</button> -->
							
							<input type="submit" class="btn btn-primary" value="Thêm Vào Giỏ Hàng"  />
						
						</div>
					</div>
					</form>
					<a id="xem-them-bai-viet" href="javascript:;" class="readmore">Đọc thêm</a>
					<div class="detaiil hidedetail">
						<div>
						<?php
								echo nl2br($sanpham_chitiet->description); ?>
								</div>
						
						<img src="img/{{$sanpham_chitiet->image1}}" alt="" width="100%" heigh="200px" > 
						
						<div><?php
								echo nl2br($sanpham_chitiet->description1); ?></div>
						<img src="img/{{$sanpham_chitiet->image2}}" class="img-fluid" alt="" width="100%" heigh="200px" >
						<div><?php
								echo nl2br($sanpham_chitiet->description2); ?></div>
						
						<img src="img/{{$sanpham_chitiet->image3}}"  class="img-fluid" alt="" width="100%	" heigh="200px" >
						<div><?php
								echo nl2br($sanpham_chitiet->description3); ?></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection

<script type="text/JavaScript">  
function validate() 
{
if( document.formthemgiohang.color.value == "Màu Sắc" || document.formthemgiohang.rom.value == "Rom" )
   {
     alert( "Vui lòng chọn màu sắc hoặc Phiên bản bộ nhớ trong" );
     return false;
   }
  
   else
   {
	   alert("Thêm giỏ hàng thành công! Vui lòng kiểm tra tại giỏ hàng");
	   return true;
   }
}

</script>