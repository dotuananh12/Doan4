@extends('layout.customer')
@section('main')

<br>
<div class="container">
    <div class="agileinfo-ads-display col-md-9">
        <div class="cart-table container" style="width: 100%;">

            <table class="table table-bordered table-striped">

                <?php
                use Gloudemans\Shoppingcart\Facades\Cart;
                $content=Cart::content(); 
                $stt=1;
                ?>
               
               

                <thead>
                    <tr>
                        <th>stt</th>
                        <th>hình ảnh</th>
                        <th>tên sản phẩm</th>
                        <th>giá</th>
                        <th>số lượng</th>
                        <th>xóa</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($content as $v_content)
                    <tr>
                        <td>{{$stt++}}</td>
                        <td><img src="/101187/public/image/{{$v_content->options->image}}" style="max-width:100px;" alt=""></td>
                        <td>{{$v_content->name}}</td>
                        <td>{{number_format($v_content ->price)}} VND</td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL('/update_quantity')}}" method="get">
                                    @csrf
                                    <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}">
                                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                    <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </td>

                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL('/delete-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                </tbody>
            </table>
            <div class="total_area">

                <div>   
                    <p style="font-weight: bold;color:red">Thành tiền :<span>{{Cart::subtotal()}} VND</p>
                </div>
                
            </div>
        </div>
    </div>
    <div class="side-bar col-md-3">

        <div class="modal-body modal-body-sub_agile">
            <div class="main-mailposi">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
            </div>
            <div class="modal_body_left modal_body_left1">
                <h3 class="agileinfo_sign">Thông tin đặt hàng </h3>
                <form action="{{url('/luu_checkout')}}" method="get">
                @csrf
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Email*" name="spemail" required="">
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Họ tên" name="sptenkh" required="">
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Địa chỉ" name="spdiachi" required="">
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Phone" name="spphone" required="">
                    </div>
                    <input style="background: #ff5722;" type="submit" value="Đặt hàng">
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

        </div>
        <!-- //deals -->
    </div>
    <!-- //product left -->
    <!-- product right -->
</div>
<br>
@stop