@extends('layout.admin')
@section('main')



<form role="form" action="{{route('sanpham.update',$sanpham->id)}}" method="post">
  

</form>

<form role="form" action="{{route('sanpham.update',$sanpham->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->tenxe}}" name="tenxe" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Loại sản phẩm</label>
        <select name="" id="" value="{{$sanpham->maloai}}" class="form-control">
            <option value="">chọn</option>
            @foreach ($loaixe as $item)
            <option value="{{$item->id}}">{{$item->tenloai}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Tình trạng</label>
        <select name="status" id="" value="{{$sanpham->status}}" class="form-control">
            <option value="">chọn</option>
            @foreach ($tinhtrang as $item)
            <option value="{{$item->id}}">{{$item->status}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input type="file" class="form-control" value="{{$sanpham->img}}" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Giá nhập</label>
        <input type="text" class="form-control" value="{{$sanpham->gianhap}}" id="" name="gianhap" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="text" class="form-control" value="{{$sanpham->price}}" id="" name="price" placeholder="">
    </div>
    <div class="form-group">
        <label for="">dongco</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->dongco}}" name="dongco" placeholder="">
    </div>
    <div class="form-group">
        <label for="">dungtichxylanh</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->dungtichxylanh}}" name="dungtichxylanh" placeholder="">
    </div>
    <div class="form-group">
        <label for="">congsuat</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->congsuat}}" name="congsuat" placeholder="">
    </div>
    <div class="form-group">
        <label for="">phanh</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->phanh}}" name="phanh" placeholder="">
    </div>
    <div class="form-group">
        <label for="">binhxang</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->binhxang}}" name="binhxang" placeholder="">
    </div>
    <div class="form-group">
        <label for="">binhnhot</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->binhnhot}}" name="binhnhot" placeholder="">
    </div>
    <div class="form-group">
        <label for="">khoiluong</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->khoiluong}}" name="khoiluong" placeholder="">
    </div>
    <div class="form-group">
        <label for="">hopso</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->hopso}}" name="hopso" placeholder="">
    </div>
    <div class="form-group">
        <label for="">den</label>
        <input type="text" class="form-control" id="" value="{{$sanpham->den}}" name="den" placeholder="">
    </div>
    <div class="form-group">
        <p class="help-block">Example block-level help text here.</p>
    </div>

    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('sanpham.index')}}">Quay lại<span></span></a>

</form>



@endsection