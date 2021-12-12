@extends('layout.admin')
@section('main')
<form role="form" action="{{route('loaixe.update',$loaixe->id)}}" method="post">
  

</form>
<form role="form" action="{{route('loaixe.update',$loaixe->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Loại xe</label>
        <input type="text" class="form-control" id="" value="{{$loaixe->tenloai}}" name="tenloai" placeholder="">
    </div>
 
    <div class="form-group">
        <label for="">Mô tả</label>
        <input type="text" class="form-control" value="{{$loaixe->mota}}" id="" name="mota" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Ghi chú</label>
        <input type="text" class="form-control" value="{{$loaixe->ghichu}}" id="" name="ghichu" placeholder="">
    </div>

    <div class="form-group">
        <p class="help-block">Example block-level help text here.</p>
    </div>

    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('loaixe.index')}}">Quay lại<span></span></a>

</form>



@endsection