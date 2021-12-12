@extends('layout.admin')
@section('main')
<form role="form" action="{{route('tintuc.update',$tintuc->id)}}" method="post">
  

</form>
<form role="form" action="{{route('tintuc.update',$tintuc->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">tên tin tức</label>
        <input type="text" class="form-control" id="" value="{{$tintuc->tentintuc}}" name="tentintuc" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Loại tin tức</label>
        <select name="loaitintuc" id=""  class="form-control">
            <option value="">chọn</option>
            @foreach ($loaitintuc as $item)
            <option value="{{$item->id}}">{{$item->tenloai}}</option>
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <label for="">nội dung</label>
        <input type="text" class="form-control" value="{{$tintuc->noidung}}" id="" name="noidung" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input type="file" class="form-control" value="{{$tintuc->img}}" id="" name="img" placeholder="">
    </div>
    <div class="form-group">
        <label for="">ngày thêm</label>
        <input type="text" class="form-control" value="{{$tintuc->ngaythem}}" id="" name="ngaythem" placeholder="">
    </div>

    <div class="form-group">
        <p class="help-block">Example block-level help text here.</p>
    </div>

    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('tintuc.index')}}">Quay lại<span></span></a>

</form>



@endsection