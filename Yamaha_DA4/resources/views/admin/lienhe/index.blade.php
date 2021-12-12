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
                    <a class="btn btn-primary" href="{{ route('loaixe.create')}}">Thêm</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th> 
                                    <th>Email</th>       
                                    <th>Yêu cầu khách hàng</th>
                                    {{-- <th>Thao tác</th> --}}
                            </thead>
                            <tbody>
                            	
                                  @foreach($lienhe as  $sp)
                                        <tr>
                                            <td>{{++$i}}</td>

                                            <td>{{ $sp->tenkh }}</td>
                                         
                                            <td>{{ $sp->phone}}</td>
                                            <td>{{ $sp->email}}</td>    
                                            <td>{{ $sp->noidung}}</td>                                       
                                            <td>
                                                {{-- <a class="btn btn-success glyphicon glyphicon-pencil" href="{{ route('loaixe.edit',$sp->id) }}"></a>
                                               <!-- <a class="btn btn-danger glyphicon glyphicon-trash btndelete" href="{{route('loaixe.destroy',$sp->id)}}"></a>-->  --}}
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