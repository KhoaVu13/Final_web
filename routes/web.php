<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',['as' =>'trangchu','uses'=>'PageController@getIndex']);

Route::get('contact',['as' =>'lienhe','uses'=>'PageController@getContact']);

Route::get('p_d/{id}',['as' =>'thongtinsanpham','uses'=>'PageController@getPD']);

Route::get('products/{type}',['as' =>'sanpham','uses'=>'PageController@getProducts']);

Route::get('register',['as' =>'dangky','uses'=>'PageController@getRegister']);

Route::get('mua_hang/{id}',['as'=>'muahang','uses'=>'PageController@muahang']);

Route::get('gio_hang',['as'=>'giohang','uses'=>'PageController@giohang']);

Route::get('xoa_san_pham/{id}',['as'=>'xoasanpham','uses'=>'PageController@xoasanpham']);

Route::get('cap_nhat_san_pham/{id}/{qty}',['as'=>'capnhatsanpham','uses'=>'PageController@capnhatsanpham']);

Route::get('dang_ky',['as'=>'signin','uses'=>'RegisterController@getSignin']);
Route::post('dang_ky',['as'=>'signin','uses'=>'RegisterController@postSignin']);

Route::get('dang_nhap',['as'=>'login','uses'=>'LoginController@getLogin']);
Route::post('dang_nhap',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('dang_xuat',['as'=>'logout','uses'=>'LoginController@postLogout']);

Route::get('checkout',['as' =>'thanhtoan','uses'=>'CheckOutController@getCheckOut']);
Route::post('checkout',['as' =>'thanhtoan','uses'=>'CheckOutController@postCheckOut']);

Route::get('checkout_cus',['as' =>'thanhtoancus','uses'=>'CheckOutControllerCus@getCheckOutCus']);
Route::post('checkout_cus',['as' =>'thanhtoancus','uses'=>'CheckOutControllerCus@postCheckOutCus']);

Route::get('account',['as' =>'taikhoan','uses'=>'AccountController@getAccount']);
Route::get('history/{id}',['as'=>'lichsu','uses'=>'AccountController@getHistory']);

