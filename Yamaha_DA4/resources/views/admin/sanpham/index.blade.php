@extends('layout.admin')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Content Header (Page header) -->

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                  
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <!-- /.box-header -->
                    <div class="box-body">
                    <a class="btn btn-primary" href="{{ route('sanpham.create')}}">Thêm</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên xe</th>
                                    <th>Giá bán</th>            
                                    <th>Hình ảnh</th>
                                    <th>Tình trạng</th>
                                    <th>Thao tác</th>
                            </thead>
                            <tbody> 	
                                  @foreach($sanpham as $sp)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{ $sp->tenxe }}</td>                             
                                            <td style="color: red;">{{ number_format($sp->price) }}</td>      
                                            <td>
                                               <img src="/101187/public/image/{{ $sp->img}}" alt="" style="max-width:80px;">
                                            </td>     
                                            <td><?php
                                                if($sp->status==1){
                                                 ?>
                                                 <a href="" class="btn-success">Còn hàng</a>
                                                 <?php
                                                  }else{
                                                 ?>  
                                                  <a href="" class="btn-danger">Hết hàng</span></a>
                                                 <?php
                                                }
                                               ?> </td>                    
                                            <td>
                                                <a class="btn btn-success glyphicon glyphicon-pencil" href="{{ route('sanpham.edit',$sp->id) }}"></a>
                                                <a class="btn btn-info glyphicon glyphicon-zoom-in" href="{{ route('xem',$sp->id) }}"></a>
                                                <a class="btn btn-danger glyphicon glyphicon-trash btndelete" href="{{route('sanpham.destroy',$sp->id)}}"></a>
                                                
                                            </td>
                                        </tr>
                              @endforeach
                            </tbody>
                            
                        </table>
                        <form action="" method="POST" id="formdelete">
                        
                        </form>
                        <form action="" method="POST" id="formdelete">
                            @csrf @method('delete')
                    
                        </form>
                
                       
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@stop()

@section('js')
    <script>
        $('.btndelete').click(function(ev){
            ev.preventDefault();//không cho load lại trang
            var href=$(this).attr('href');
           alert(href);
            $('form#formdelete').attr('action',href);
            if(confirm("bạn có muốn xóa?")){
                $('form#formdelete').submit();
               
            }
        })
    
    </script>
 @stop()