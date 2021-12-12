<?php

namespace App\Http\Controllers;
//use Session;
use App\Models\sanpham;
use App\Models\loaixe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

session();
session_start();
class CartController extends Controller
{
    public function save_cart(Request $request)
    {
         $productId = $request->productid_hidden;
         $quantity= $request->qty;
         $product_info= sanpham::where('id',$productId)->first();
        // return view("customer.showCart");
         $data['id'] = $product_info->id;
         $data['qty'] = $quantity;
         $data['name'] = $product_info->tenxe;
         $data['price'] = $product_info->price;
         $data['weight'] = $product_info->price;
         $data['options']['image'] = $product_info->img;
         Cart::add($data);
        return Redirect::to('/show_cart');
    }
    public function show_cart(){     
        return view('customer.showCart');
    }
    public function delete_cart($rowId){
        Cart::update($rowId,0);//xet gtri bang 0
        return Redirect('/show_cart');
    }
    public function update_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect('/show_cart');
       // echo Session::get('customer_id');
    }
}
