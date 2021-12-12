@extends('layout.customer')
@section('main')

<div id="myCarousel" style="height: 568px;" class="carousel slide" data-ride="carousel">
	<!-- Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<li data-target="#myCarousel" data-slide-to="3" class=""></li>
	</ol>
	<div class="carousel-inner" style="height: 568px;">
		<div class="item active">
			<div class="">
				<img src="/101187/public/site/images/slide5.png" style="width: 1519px;height: 569px;" />
			</div>
		</div>
		<div class="item">
			<div class="">
				<div class="carousel-item">
					<img src="/101187/public/site/images/slide3.webp" style="width: 1519px;height: 665px;" />
				</div>
			</div>
		</div>
		<div class="item">
			<div class="">
				<div class="carousel-item">
					<img src="/101187/public/site/images/slide1.png" style="width: 1519px;height: 707px;" />
				</div>
			</div>
		</div>
		<div class="item">
			<div class="">
				<div class="carousel-item">
					<img src="/101187/public/site/images/slide4.png" style="width: 1519px;height: 591px;" />
				</div>
			</div>
		</div>

	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="ads-grid">
	<div class="container">
		<!-- tittle heading -->
		<h3 class="tittle-w3l">Our Top Products
			<span class="heading-style">
				<i></i>
				<i></i>
				<i></i>
			</span>
		</h3>
		<!-- //tittle heading -->
		<!-- product left -->

		<!-- //product left -->
		<!-- product right -->
		<div class="agileinfo-ads-display col-md-12">
			<div class="wrapper">
				<!-- first section (nuts) -->



				<!-- //first section (nuts) -->
				<!-- second section (nuts special) -->

				<!-- //second section (nuts special) -->
				<!-- third section (oils) -->
				<div class="product-sec1">
					<h3 class="heading-tittle">Xe Số</h3>
					@foreach ($xeso as $item)
					<div class="col-md-4 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="/101187/public/image/{{ $item->img}}" style="width:70%;height:180px" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{route('xemchitiet',$item->id)}}" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product ">
								<h4>
									<a href="{{route('xemchitiet',$item->id)}}" style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 1;-webkit-box-orient: vertical; display: -webkit-box;" href="single.html">{{ $item->tenxe }}</a>
								</h4>
								<div class="info-product-price">
									<span class="item_price">{{ number_format($item->price)}} VND</span>

								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="{{url('/savecart')}}" method="post">
										@csrf
										<fieldset>
											
											<input type="hidden" name="productid_hidden" value="{{$item->id}}" />
											<input type="hidden" data-toggle="collapse" style="margin-top:10px;margin-bottom:10px" name="qty" min="1" value="1" />
											<input type="submit" style="background: #0622e9;" name="submit" value="Add to cart" class="button" />
											
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"></div>
				</div>
				<!-- //third section (oils) -->
				<!-- fourth section (noodles) -->
				<div class="product-sec1">
					<h3 class="heading-tittle">Xe Tay Ga</h3>
					@foreach ($xega as $item)
					<div class="col-md-4 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="/101187/public/image/{{ $item->img}}" style="width:70%;height:180px" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{route('xemchitiet',$item->id)}}" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product ">
								<h4>
									<a href="{{route('xemchitiet',$item->id)}}" style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 1;-webkit-box-orient: vertical; display: -webkit-box;" href="single.html">{{ $item->tenxe }}</a>
								</h4>
								<div class="info-product-price">
									<span class="item_price">{{ number_format($item->price)}} VND</span>

								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="{{url('/savecart')}}" method="post">
										@csrf
										<fieldset>
											
											<input type="hidden" name="productid_hidden" value="{{$item->id}}" />
											<input type="hidden" data-toggle="collapse" style="margin-top:10px;margin-bottom:10px" name="qty" min="1" value="1" />
											<input type="submit" style="background: #0622e9;" name="submit" value="Add to cart" class="button" />
											
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"></div>
				</div>
				<!-- //fourth section (noodles) -->

			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Xe Thể Thao
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					@foreach ($xethethao as $item)
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="{{route('xemchitiet',$item->id)}}">
									<img src="/101187/public/image/{{ $item->img}}" style="width:80%;height:180px" alt="">
								</a>
							</div>
							<div class="item-info-product ">
								<h4>
									<a href="{{route('xemchitiet',$item->id)}}" style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 1;-webkit-box-orient: vertical; display: -webkit-box;" href="single.html">{{ $item->tenxe }}</a>
								</h4>
								<div class="info-product-price">
									<span class="item_price">{{ number_format($item->price)}} VND</span>

								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="{{url('/savecart')}}" method="post">
										@csrf
										<fieldset>
											
											<input type="hidden" name="productid_hidden" value="{{$item->id}}" />
											<input type="hidden" data-toggle="collapse" style="margin-top:10px;margin-bottom:10px" name="qty" min="1" value="1" />
											<input type="submit" style="background: #0622e9;" name="submit" value="Add to cart" class="button" />
											
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</li>
					@endforeach

				</ul>
			</div>
		</div>
	</div>
	@stop