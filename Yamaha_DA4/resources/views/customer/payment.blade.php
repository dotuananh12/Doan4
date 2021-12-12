@extends('layout.customer')
@section('main')
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="{{ route('trangchu') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">thanh toán</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        <h2> xem lại giỏ hàng</h2>
        <table class="table table-bordered table-striped">

            @php
            $content=Cart::content();
            $stt=1;
            @endphp

            <thead>
                <tr>
                    <th>stt</th>
                    <th>hình ảnh</th>
                    <th>tên sản phẩm</th>
                    <th>giá</th>
                    <th>số lượng</th>

                    <td class="total">Tổng</td>
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
                    <td class="cart_total">
                        <p class="cart_total_price">

                            <?php
                            $subtotal = $v_content->price * $v_content->qty;
                            echo number_format($subtotal) . ' ' . 'vnđ';
                            ?>
                        </p>
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

        <h4 style="margin:40px 0;font-size: 20px;">Chọn hình thức thanh toán</h4>
        <form method="GET" action="{{route('order')}}">
            @csrf
            <div class="payment-options">
                <span>
                    <label><input name="payment_option" value="1" type="checkbox"> Trả bằng thẻ ATM</label>
                </span>
                <span>
                    <label><input name="payment_option" value="2" type="checkbox"> Nhận tiền mặt</label>
                </span>
                <span>
                    <label><input name="payment_option" value="3" type="checkbox"> Thanh toán thẻ ghi nợ</label>
                </span>
                <input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">
            </div>
        </form>

    </div>
    @stop