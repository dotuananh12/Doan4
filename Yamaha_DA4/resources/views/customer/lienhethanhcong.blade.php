@extends('layout.customer')
@section('main')
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="{{ route('trangchu') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">liên hệ</li>
        </ol>
    </div>
</div>
<div class="container">
			
    <div class="review-payment" style="height: 500px">
        <h3 style="margin:20px;color:red">Chúng tôi đã nhận được tin nhắn của bạn, hãy chờ phản hồi nhanh nhất của chúng tôi</h3>
    </div>
    
    
    
</div>
@stop