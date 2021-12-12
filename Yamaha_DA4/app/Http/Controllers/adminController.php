<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use App\Models\order;
use App\Models\order_details;
use App\Models\khachhang;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\loaixe;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
      $sanpham=sanpham::where('status',1)->get();
      // $sanpham=sanpham::where('status',1)->sum('soluong');
      $order=order::all();
      $doanhthu=order::sum('order_total');
      $giagoc=order_details::join('sanpham', 'order_details.product_id', '=', 'sanpham.id')->select('sanpham.gianhap')->get();
      $soluongxeban=order_details::sum('product_sales_quantity');

      $account=khachhang::all();
      // $cart=Cart::content();
      return view('admin.thongke.index',compact('sanpham','order','account','doanhthu','soluongxeban'));
    }
}