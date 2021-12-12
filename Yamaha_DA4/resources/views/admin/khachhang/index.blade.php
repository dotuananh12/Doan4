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
                    <a class="btn btn-primary" href="{{ route('khachhang.create')}}">Thêm</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên nhà cung cấp</th>
                                    <th>Email</th>            
                                    <th>Địa chỉ</th>
                                    <th>Thao tác</th>
                            </thead>
                            <tbody>
                            	
                                  @foreach($khachhang as $sp)
                                        <tr>
                                            <td>{{++$i}}</td>

                                            <td>{{ $sp->tenkh }}</td>
                                            <td>{{ $sp->email}}</td>
                                            <td>{{ $sp->phone}}</td>                                          
                                            <td>
                                                <a class="btn btn-success glyphicon glyphicon-pencil" href="{{route('khachhang.edit',$sp->id)}}"></a>
                                                <a class="btn btn-danger glyphicon glyphicon-trash btndelete" href="{{route('khachhang.destroy',$sp->id)}}"></a>
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
                        <hr>
                        <div class="">
                           
                        </div>
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
           
            $('form#formdelete').attr('action',href);
            if(confirm("bạn có muốn xóa?")){
                $('form#formdelete').submit();
               
            }
        })
    
    </script>
 @stop()