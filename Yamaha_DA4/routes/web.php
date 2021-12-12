<?php

use App\Http\Controllers\tintucController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});
//admin
Route::group(['prefix'=> 'admin'], function () {
    Route::get('/','adminController@dashboard')->name('admin.dashboard');
   
    Route::resources([
        'sanpham'=>'ADsanphamController',
        'donhang'=>'donhangController',
        //'view_order/{orderId}'=>'donhangController@view_order'
        'loaixe'=>'loaixeController',
        'nhacungcap'=>'nhacungcapController',
        'khachhang'=>'khachhangController',
        'tintuc'=>'tintucController',
        'loaitintuc'=>'loaitintucController',
        'thongke'=>'adminController',
        'lienhe'=>'lienheController'
    ]);
 });
//ảnh pload
//  Route::post('file','ADsanphamcontroller@upload');

 //trangchu
 Route::get('/trangchu','homeController@index')->name('trangchu');
 Route::get('/xeso','homeController@xeso')->name('xeso');
 Route::get('/xega','homeController@xega')->name('xega');
 Route::get('/xethethao','homeController@xethethao')->name('xethethao');
 Route::get('xemchitietsp/{id}','homeController@xemchitiet')->name('xemchitiet');
 Route::get('/search','homeController@search')->name('search');
 Route::get('/tintuc','homeController@tintuc')->name('tintuc');
 Route::get('/xemtintuc/{id}','homeController@xemtintuc')->name('xemtintuc');
 Route::get('/lienhe/{id}','homeController@lienhe')->name('lienhe');
Route::get('/lienhe','homeController@lienhe')->name('lienhe1');
 Route::post('/themlienhe','homeController@store')->name('themlienhe1');
 //cart
 Route::post('/savecart','CartController@save_cart');
 Route::get('/show_cart','CartController@show_cart')->name('show_cart');
 Route::get('/delete-cart/{rowId}','CartController@delete_cart');
 Route::get('/update_quantity','CartController@update_quantity');
 //checkout
 Route::get('/login_checkout','checkoutController@login_checkout')->name('login');
 Route::post('/add-khachhang','checkoutController@add_khachhang');
 Route::get('/checkout','checkoutController@checkout'); 
 Route::get('/luu_checkout','checkoutController@save_checkout');
 Route::get('/payment','checkoutController@payment')->name('payment');
 Route::get('/logout_checkout','checkoutController@logout_checkout');
 Route::get('/dangnhap','checkoutController@dangnhap_checkout');
 Route::get('/payment','checkoutController@payment');
 Route::get('/order-place','checkoutController@order_place')->name('order');
//dơn hàng
Route::get('view_order/{orderId}','donhangController@view_order')->name('view_order');
Route::get('inorder/{orderId}','donhangController@inorder')->name('in_order');
//tintuc
Route::get('xem/{id}','ADsanphamController@xem')->name('xem');





