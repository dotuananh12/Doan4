@extends('layout.customer')
@section('main')
<div class="cart-table container">

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
        <!--<a  class="btn btn-primary" href="{{url('/login_checkout')}}">Mua Hàng</a>-->
        <?php
        $id = session()->get('id');
        if ($id != null) {
        ?>

            <button class="btn btn-primary"><a style="color: #f5f5f5;" href="{{url('/checkout')}}"> Thanh toán </a></button>

        <?php
        } else {
        ?>

            <button class="btn btn-primary"><a style="color: #f5f5f5;" href="{{url('/dangnhap')}}"> Thanh toán </a></button>

        <?php
        }
        ?>
    </div>
</div>
<br>
@stop