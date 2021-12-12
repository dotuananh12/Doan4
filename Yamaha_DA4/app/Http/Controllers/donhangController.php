<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use App\Models\order;
use App\Models\order_details;
use Illuminate\Http\Request;

use PDF;

use Gloudemans\Shoppingcart\Facades\Cart;
class donhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donhang = order::orderBy('order_id')->get();
        $all_order = order::join('khachhang', 'order.customer_id', '=', 'khachhang.id')
            ->select('order.*', 'khachhang.tenkh')
            ->orderby('order.order_id', 'desc')->get();
        return view('admin.order.index', compact('donhang', 'all_order'))->with('i');
    }
    public function view_order($orderId)
    {
        $order=order::where('order_id',$orderId)->select('order.*')->first();     
        $dh = order::orderBy('order_id')->where('order_id',$orderId)->get();
         $kh = order::where('order_id',$orderId)->join('khachhang', 'order.customer_id', '=', 'khachhang.id') ->select( 'khachhang.*')->first();
         $sp = order::where('order_id',$orderId)->join('shipping', 'order.shipping_id', '=', 'shipping.spid') ->select( 'shipping.*')->first();
         $dt = order_details::where('order_id',$orderId) ->get();
        return view('admin.order.view_order', compact('dh','kh','sp','dt','order'));
        
    }
    public function inorder($checkout_code) {
        $pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($this->print_order_convert($checkout_code));
		return $pdf->stream();
    }
    public function print_order_convert($orderId){
        $dh = order::orderBy('order_id')->where('order_id',$orderId)->get();
        $kh = order::where('order_id',$orderId)->join('khachhang', 'order.customer_id', '=', 'khachhang.id') ->select( 'khachhang.*')->first();
        $sp = order::where('order_id',$orderId)->join('shipping', 'order.shipping_id', '=', 'shipping.spid') ->select( 'shipping.*')->first();
        $dt = order_details::where('order_id',$orderId) ->get();
		$output = '';
		$output.='<style>body{
			font-family: DejaVu Sans;
		}
		.table-styling{
			border:1px solid #000;
			border-collapse: collapse;
            width:100%
		}
		.table-styling tbody tr td{
			border:1px solid #000;
			border-collapse: collapse;
		}
		</style>
        <h2><center>Độc Lập-Tự Do-Hạnh Phúc</center></h2>
		<h2><center>Cửa Hàng Yamaha-motor</center></h2>
		<h4><center>Độc lập - Tự do - Hạnh phúc</center></h4>
		<p>Người đặt hàng</p>
		<table class="table-styling" border="1px slolid">
		<thead>
		<tr>
		<th>Tên khách đặt</th>
		<th>Số điện thoại</th>
		<th>Email</th>
        <th>Địa chỉ</th>
		</tr>
		</thead>
		<tbody>';

		$output.='		
		<tr>
		<td  style="text-align:center;width:25%;">'.$kh->tenkh.'</td>
		<td style="text-align:center;width:15%;">'.$kh->phone.'</td>
		<td  style="text-align:center;width:25%;">'.$kh->email.'</td>
        <td  style="text-align:center;width:35%;">'.$sp->spdiachi.'</td>
		</tr>';

		$output.='				
		</tbody>

		</table>

		<p>Đơn hàng đặt</p>
		<table class="table-styling" border="1px slolid">
		<thead>
		<tr>
		<th>Tên sản phẩm</th>
		<th>Số lượng</th>
		<th>Giá </th>
		<th>Thành tiền</th>
		</tr>
		</thead>
		<tbody>';

		$total = 0;

		foreach ($dt as $item ){
			$output.='		
			<tr>
				<td>'.$item->product_name.'</td>
				<td style="text-align:center">'.$item->product_sales_quantity.'</td>
				<td style="text-align:right">'.number_format($item->product_price,0,',','.').'đ'.'</td>
				<td style="text-align:right">'.number_format($item->product_price*$item->product_sales_quantity,0,',','.').'đ'.'</td>
			</tr>';
		}

	foreach($dh as $item)
		$output.= '<tr>
		<td colspan="4">
        <p>Thanh toán : '.($item->order_total).'VND'.'</p>
		</td>
		</tr>';
        
		$output.='				
		</tbody>

		</table>

		<p>Ký tên</p>
		<table>
		<thead>
		<tr>
		<th width="200px">Người lập phiếu</th>
		<th width="800px">Người nhận</th>

		</tr>
		</thead>
		<tbody>';

		$output.='				
		</tbody>

		</table>

		';


		return $output;

	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
