@extends('layout.admin')
@section('main')
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên người đặt hàng</th>
                                    <th>Tổng giá tiền</th>
                                    <th>Tình trạng</th>
                                    <th>Thao tác</th>
                            </thead>
                            <tbody>

                            @foreach($all_order as $key => $order)
                                <tr>
                                    <td>{{++$i}}</td>

                                    
                                    <td>{{$order->tenkh}}</td>
                                  

                                    <td style="color: red;">{{ $order->order_total }}VND</td>

                                    <td>{{ $order->order_status }}</td>

                                    <td>
                                        <a class="btn btn-success glyphicon glyphicon-zoom-in" href="{{route('view_order',$order->order_id)}}"></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
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