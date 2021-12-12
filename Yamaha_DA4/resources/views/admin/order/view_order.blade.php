@extends('layout.admin')
@section('main')
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading">
     Thông tin khách hàng
    </div>
    
    
    <div class="table-responsive">
                    
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>   
            <th>Địa chỉ nhận hàng</th>        
            
          </tr>
        </thead>
        <tbody>
        
          <tr>

            <td>{{$kh->tenkh}}</td>
            <td>{{$kh->phone}}</td> 
            <td>{{$sp->spdiachi}}</td>
          </tr>
     
        </tbody>
      </table>

    </div>
   
  </div>
</div>
<br>
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading">
     Thông tin vận chuyển
    </div>
    
    
    <div class="table-responsive">
        
      <table class="table table-striped b-t b-light">
        <thead>
          <tr> 
            <th>Tên người nhận</th>
            <th>Địa chỉ nhận hàng</th>
            <th>Số điện thoại</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
           
            <td>{{$sp->sptenkh}}</td>
            <td>{{$sp->spdiachi}}</td>
            <td>{{$sp->spphone}}</td>
            
          </tr>
     
        </tbody>
      </table>

    </div>
   
  </div>
</div>
<br><br>
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê chi tiết đơn hàng
    </div>
    {{-- <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div> --}}
    
    <div class="table-responsive">
                     
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
         @foreach ($dt as $item )
             
       
          <tr>
           
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$item->product_name}}</td>
            <td>{{$item->product_sales_quantity}}</td>
            <td>{{ number_format($item->product_price) }}</td>
            <td>{{$item->product_price*$item->product_sales_quantity}}</td>
          
           
          </tr>
         @endforeach
        </tbody>
      </table>

    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          @foreach ($dh as $item )
          <p style="color: red">Tổng giá tiền:{{$item->order_total}}VND</p>
          @endforeach
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
       {{-- thêm nút in zô đây --}}
       <a class="btn btn-danger" style="margin-left: 969px"  href="{{url('/inorder/'.$order->order_id)}}">In hóa đơn</a>
      </div>
    </footer>
   
  </div>

</div>
@stop()