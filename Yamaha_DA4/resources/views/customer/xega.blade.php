@extends('layout.customer')
@section('main')

<div class="ads-grid" style="margin-top: -50px;">
	<div class="container">
		<!-- tittle heading -->
		<h3 class="tittle-w3l">Sản phẩm của Yamaha Motor
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
					<h3 class="heading-tittle">Xe tay ga</h3>
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
											<button><input type="number" data-toggle="collapse" style="margin-top:10px;margin-bottom:10px" name="qty" min="1" value="1" />
											<input type="submit" style="background: #0622e9;" name="submit" value="Add to cart" class="button" />
											</button>
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
				
				<!-- //fourth section (noodles) -->

			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
    <br>
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="w3l-welcome-info">
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="/101187/public/site/images/ss1.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="/101187/public/site/images/ss2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
        <br>

	@stop