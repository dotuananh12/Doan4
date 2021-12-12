@extends('layout.admin')
@section('main')
<form role="form" action="{{route('nhacungcap.store')}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{route('nhacungcap.store')}}" method="post">
     @csrf
  
      <div class="form-group">
        <label for="">Tên nhà cung cấp</label>
        <input type="text" class="form-control" id=""name="tenncc" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" name="email" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Địa chỉ</label>
        <input type="text" class="form-control" id="" name="diachi" placeholder="">
      </div>
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{route('nhacungcap.index')}}">Quay lại<span></span></a>
     
</form>
@stop()