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

Route::get('index',[
'as' =>'trangchu',
'uses'=>'PageController@getIndex'
]);
Route::get('dat_hang',[
    'as' => 'dathang',
    'uses'=>'PageController@getMainCart'
]);
Route::get('contact',[
'as' =>'lienhe',
'uses'=>'PageController@getContact'
]);
Route::get('p_d/{id}',[
'as' =>'thongtinsanpham',
'uses'=>'PageController@getPD'
]);
Route::get('products/{type}',[
'as' =>'sanpham',
'uses'=>'PageController@getProducts'
]);
Route::get('register',[
'as' =>'dangky',
'uses'=>'PageController@getRegister'
]);
Route::get('checkout',[
'as' =>'thanhtoan',
'uses'=>'PageController@getCheckOut'
]);
Route::get('mua_hang/{id}/{tensanpham}',['as'=>'muahang','uses'=>'PageController@muahang']);
Route::get('gio_hang',['as'=>'giohang','uses'=>'PageController@giohang']);