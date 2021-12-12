@extends('layout.customer')
@section('main')
<br>
<div class="container">
<div class="modal-content">
<br>
    <div class="modal-body modal-body-sub_agile">
        <div class="main-mailposi">
            <span class="fa fa-envelope-o" aria-hidden="true"></span>
        </div>
        <div class="modal_body_left modal_body_left1">
            <h3 class="agileinfo_sign">Đăng Nhập</h3>
            <p style="margin-left: 250px;">
                
                <a href="#" data-toggle="modal" data-target="#myModal2">
                    Vui lòng đăng nhập khi mua hàng</a>
            </p>
            <form style="margin-right: 216px; margin-left: 248px;" action="{{url('/dangnhap')}}" method="GET">
			 @csrf
                <div class="styled-input agile-styled-input-top">
                    <input type="email" placeholder="Tài Khoản" name="email_account" required="">
                </div>
                <div class="styled-input">
                    <input type="password" placeholder="Password" name="password_account" required="">
                </div>
                <input style="margin-left:470px;" type="submit" value="Sign In">
            </form>
            
        </div>
        <div class="clearfix"></div>
    </div>
			<!-- Modal content-->

				<div class="modal-header">				
				</div>
                <br>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Đăng Ký</h3>
						<p style="margin-left: 250px;">
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                         Nếu chưa có tài khoản, đăng ký</a>
						</p>
						<form style="margin-right: 216px; margin-left: 248px;"  action="{{url('/add-khachhang')}}" method="post">
						@csrf
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Họ và tên" name="tenkh" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="email" placeholder="email" name="email" required="">
							</div>					
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="phone" name="phone" required="">
							</div>
							<input style="margin-left:470px;" type="submit" value="Sign Up">
						</form>
						
					</div>
				</div>
			</div>
			<!-- //Modal content--> 
	</div>
</div>
<br>


@stop