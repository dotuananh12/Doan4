
@extends('layout.customer')
@section('main')
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
                    <li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
						<i>|</i>
					</li>
					<li>Single Page</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Single Page
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">			
								<div class="thumb-image">
									<img src="/101187/public/image/{{ $xem->img}}" data-imagezoom="true" class="img-responsive" alt=""> </div>					
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>{{ $xem->tenxe }}</h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<p>
                <span class="item_price">{{ number_format($xem->price)}} VND</span>
					
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
                        Tiền mặt khi giao hàng đủ điều kiện.
						</li>
						<li>
                        Tốc độ vận chuyển đến giao hàng.
						</li>
						<li>
                        Được bán và thực hiện bởi Yamaha motorshow (4.8 trên 5 xếp hạng | 8).
						</li>
					
					</ul>
				</div>
				
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="{{url('/savecart')}}" method="post">
						@csrf
							<fieldset>
								<input type="hidden"style="margin-top:10px;margin-bottom:10px" name="qty" min="1" value="1" />
								<input type="hidden" name="productid_hidden" value="{{$xem->id}}" />
								<input type="submit" style="background: #0622e9;" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>

				</div>
                <br>
                <div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
						<label>Vegetarian</label> product.</p>
					
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>non-returnable.</label>
					</p>
				</div>

			</div>
			<div class="clearfix"> </div>
            <div style="margin-right: 0px;margin-left: 0px;"class="row"style="">
                    <div class="col-12 spec-inner" >
                        <div class="">
                            <div style="margin-top:50px;  background: black;color: white;  text-align: center;font-size:24px;font-weight:700;" class="">Thông số kĩ thuật</div>
                        </div>
			        </div>
               </div>
        

            <div class="" style="background-color:#f3f3f3;padding: 30px 100px 60px;border-top:1px solid red;">
                <div style="line-height:40px;">
                      <div class="row"style="background-color:#fff;height:50px;" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Loại động cơ</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;"> {{ $xem->dongco }}</div>
                      </div>
                      <div class="row"style="height:50px" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Dung tích xy lanh</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;">{{ $xem->dungtichxylanh }}</div>
                      </div>
                      <div class="row"style="background-color:#fff;height:50px;" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Công suất cực đại</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;"> {{ $xem->congsuat }}</div>
                      </div>
                      <div class="row"style="height:50px" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Phanh</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;">{{ $xem->phanh }}</div>
                      </div>
                      <div class="row"style="background-color:#fff;height:50px;" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Dung tích bình xăng</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;"> {{ $xem->binhxang }}kg</div>
                      </div>
                      <div class="row"style="height:50px" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Dung tích bình nhớt</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;">{{ $xem->binhnhot }}</div>
                      </div>
					  <div class="row"style="background-color:#fff;height:50px;" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Khối lượng xe</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;"> {{ $xem->khoiluong }}kg</div>
                      </div>
					  <div class="row"style="height:50px" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Hộp số</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;">{{ $xem->hopso }}</div>
                      </div>
					  <div class="row"style="background-color:#fff;height:50px;" >
                        <div class="col-sm-4" style="font-weight: 700; padding-top: 6px;">Kiểu đèn xe</div>
                        <div class="col-sm-8" style="font-weight: 700; padding-top: 6px;"> {{ $xem->den }}kg</div>
                      </div>
					  

                     
                </div>
            </div>
		</div>
        
	</div>
 @stop()