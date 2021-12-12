@extends('layout.admin')
@section('main')
<form role="form" action="{{route('nhacungcap.update',$nhacungcap->id)}}" method="post">
  

</form>
<form role="form" action="{{route('nhacungcap.update',$nhacungcap->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên nhà cung cấp</label>
        <input type="text" class="form-control" id="" value="{{$nhacungcap->tenncc}}" name="tenncc" placeholder="">
    </div>
 
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" value="{{$nhacungcap->email}}" id="" name="email" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Ghi chú</label>
        <input type="text" class="form-control" value="{{$nhacungcap->diachi}}" id="" name="diachi" placeholder="">
    </div>

    <div class="form-group">
        <p class="help-block">Example block-level help text here.</p>
    </div>

    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('nhacungcap.index')}}">Quay lại<span></span></a>

</form>



@endsection