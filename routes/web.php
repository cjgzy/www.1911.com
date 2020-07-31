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
Route::get("/wx/add","A/AddController@add");
Route::post("rsa1","TestController@rsa1");
Route::post("aesdec","TestController@aesdec");
Route::post("sign","TestController@sign");
Route::get("test2","TestController@test2");
Route::get("/admin/login","Admin\LoginController@login");
Route::get("/admin/register","Admin\LoginController@register");
Route::get("/goods/goodslist","Goods\GoodsController@goodslist");
Route::get("/goods/goodscart    ","Goods\GoodsController@goodscart");