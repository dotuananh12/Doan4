@extends('layout.admin')
@section('main')
    <form role="form" action="{{ route('tintuc.store') }}" method="post" enctype="multipart/form-data">


    </form>
    <form role="form" action="{{ route('tintuc.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="">tên tin tức</label>
            <input type="text" class="form-control" id="" name="tentintuc" placeholder="">

        </div>
        <div class="form-group">
            <label for="">Loại tin tức</label>
            <select name="loaitintuc" id="" class="form-control">
                <option value="">chọn</option>
                @foreach ($loaitintuc as $item)
                <option value="{{$item->id}}">{{$item->tenloai}}</option>
                @endforeach
            </select>
    
        </div>
        <div class="form-group">
            <label for="">nội dung</label>

            <textarea id="editor1" name="noidung" rows="10" cols="80">
                                          ...
              </textarea>
        </div>
        <div class="form-group">
            <label for="">hình ảnh</label>
            <input type="file" class="form-control" id="" name="img" placeholder="">
        </div>
        <div class="form-group">
            <label for="">ngày thêm</label>
            <input type="text" class="form-control" id="" name="ngaythem" placeholder="">
        </div>
        <div class="form-group">

            <p class="help-block">Example block-level help text here.</p>
        </div>

        <button type="submit" name="" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('tintuc.index') }}">Quay lại<span></span></a>

    </form>
@stop()
