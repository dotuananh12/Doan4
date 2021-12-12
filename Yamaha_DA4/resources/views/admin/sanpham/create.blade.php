@extends('layout.admin')
@section('main')

{{-- <form action="{{ url('file')}}" method="post" enctype="multipart/form-data">
  Select image to upload:
  @csrf
  <input type="file" name="fileToUpload" id="fileToUpload"> 
  <input type="submit" value="Upload Image" name="submit">
</form> --}}
<form role="form" action="{{route('sanpham.store')}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{ route('sanpham.store') }}" method="post" enctype="multipart/form-data">
  @csrf
    
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" id="" name="tenxe" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Loại sản phẩm</label>
        <select name="maloai" id="" class="form-control">
            <option value="">chọn</option>
            @foreach ($loaixe as $item)
            <option value="{{$item->id}}">{{$item->tenloai}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="">Tình trạng</label>
      <select name="status" id="" class="form-control">
          <option value="">chọn</option>
          @foreach ($tinhtrang as $item)
          <option value="{{$item->id}}">{{$item->status}}</option>
          @endforeach
      </select>
  </div>
    <div class="form-group">
      <label for="">hình ảnh</label>
      <input type="file" class="form-control" id="" name="img" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Giá nhập</label>
        <input type="number" class="form-control" id="" name="gianhap" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control" id="" name="price" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Động cơ</label>
        <input type="text" class="form-control" id=""name="dongco" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Dung tích xylanh</label>
        <input type="text" class="form-control" id=""name="dungtichxylanh" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Công suất</label>
        <input type="text" class="form-control" id=""name="congsuat" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Phanh</label>
        <input type="text" class="form-control" id=""name="phanh" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Bình xăng</label>
        <input type="text" class="form-control" id=""name="binhxang" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Bình nhớt</label>
        <input type="text" class="form-control" id=""name="binhnhot" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Khối lượng</label>
        <input type="text" class="form-control" id=""name="khoiluong" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Hộp số</label>
        <input type="text" class="form-control" id=""name="hopso" placeholder="">   
      </div>
      <div class="form-group">
        <label for="">Đèn</label>
        <input type="text" class="form-control" id=""name="den" placeholder="">   
      </div>


    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('sanpham.index')}}">Quay lại<span></span></a>
</form>
@endsection