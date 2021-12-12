@extends('layout.admin')
@section('main')
<form role="form" action="{{route('khachhang.update',$khachhang->id)}}" method="post">
  

</form>
<form role="form" action="{{route('khachhang.update',$khachhang->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="id" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên khách hàng</label>
        <input type="text" class="form-control" id="" value="{{$khachhang->tenkh}}" name="tenkh" placeholder="">
    </div>
 
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" value="{{$khachhang->email}}" id="" name="email" placeholder="">
    </div>
    <div class="form-group">
        <label for="">phone</label>
        <input type="text" class="form-control" value="{{$khachhang->phone}}" id="" name="phone" placeholder="">
    </div>

    <div class="form-group">
        <p class="help-block">Example block-level help text here.</p>
    </div>

    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('khachhang.index')}}">Quay lại<span></span></a>

</form>



@endsection