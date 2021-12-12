@extends('layout.admin')
@section('main')



<!-- //page -->
<!-- Single Page -->

<div class="banner-bootom-w3-agileits">
    <div>
        <h2>Xem chi tiết xe</h2>
    </div>
    <div class="container">
        <!-- tittle heading -->
       
        <!-- //tittle heading -->
        <div class="col-md-5 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <ul class="slides">			
                            <div class="thumb-image">
                                <img style="    max-width: 75%;" src="/101187/public/image/{{ $xem->img}}" data-imagezoom="true" class="img-responsive" alt=""> </div>					
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-7 single-right-left simpleCart_shelfItem">
            <h3>Tên: {{ $xem->tenxe }}</h3>
           
            <p>
            <h3>Giá: <span style="color: red;"class="item_price">{{ number_format($xem->price)}} VND</span></h3>
                
              
            </p>
  
            <br>
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

@endsection