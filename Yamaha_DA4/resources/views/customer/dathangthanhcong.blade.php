@extends('layout.customer')
@section('main')
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="{{ route('trangchu') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">đặt hàng</li>
        </ol>
    </div>
</div>
<div class="container">
			
    <div class="review-payment" style="height: 500px">
        <h3 style="margin:20px;color:red">Cảm ơn bạn đã mua hàng</h3>
    </div>
    
    
    
</div>
@stop