<?php
namespace App\Http\Controllers;

use App\Models\khachhang;
use App\Models\sanpham;
use App\Models\loaixe;
use App\Models\shipping;
use App\Models\payment;
use App\Models\order;
use App\Models\order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
session_start();

class checkoutController extends Controller
{
    public function login_checkout()
    {
       return view("customer.login_checkout");
       //return view("customer.login");
    }
    public function add_khachhang(Request $request)
    {
        $data=array();
        $data['tenkh']=$request->tenkh;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['password']=$request->password;
        
        $id=khachhang::insertGetId($data);
        //Session()
        session()->put('id',$id);
        session()->put('tenkh',$request->tenkh);
        return  redirect('/checkout');
    }
    public function checkout(){
        return view("customer.checkout");
    }
    public function save_checkout(Request $request)
    {
        $data=array();
        // $data['sptenkh']=$request->sptenkh;
        // $data['spemail']=$request->spemail;
        // $data['spphone']=$request->spphone;
        $data['spdiachi']=$request->spdiachi;
        $spid=shipping::insertGetId($data);
        Session::put('spid',$spid);      
        return  redirect('/payment');
    }
    public function payment(){
     return view('customer.payment');
    }
    public function logout_checkout()
    {
        Session::flush();
        return  Redirect('/login_checkout');
    }
    public function dangnhap_checkout(Request $request)
    {
        $email = $request->email_account;
        $password = $request->password_account;
        $result=khachhang::where('email',$email)->where('password',$password)->first();
        if($result)
        {
           Session::put('id',$result->id);  
            return redirect('/checkout');    
        }
         else {
            return redirect('/login_checkout');
        }
    }
    public function order_place(Request $request)
    {
        //get payment method
        $data=array();
        $data['payment_method']=$request->payment_option;
        $data['payment_status']='Đang chờ xử lý';
        $payment_id =payment::insertGetId($data);

        //insert order
        $order_data=array();
        $order_data['customer_id'] = Session::get('id');
        $order_data['shipping_id'] = Session::get('spid');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::subtotal();
        $order_data['order_status'] = 'Đang chờ xử lý';
        $order_id = Order::insertGetId($order_data);

        //insert order details
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            order_details::insert($order_d_data);
        }
        if($data['payment_method']==1){
            Cart::destroy();          
            return view("customer.dathangthanhcong");
        }
        elseif($data['payment_method']==2){
            Cart::destroy();          
            return view("customer.dathangthanhcong");
        }
    
    }
   
}
