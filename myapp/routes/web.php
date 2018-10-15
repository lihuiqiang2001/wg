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
//前台首页
Route::get('/','Home\IndexController@index');
   



//后台管理
Route::group([], function(){

	//后台首页
	Route::any('admin', 'Admin\IndexController@index');

	//后台轮播模块
	Route::resource('admin/lunbo', 'Admin\LunboController');
	//友情链接
	Route::resource('admin/friend', 'Admin\FriendController');
	//商品推荐
	Route::resource('admin/ecommend', 'Admin\EcommendController');
});

//前台管理
Route::group([], function(){
	//前台页面
	Route::any('home','Home\LunboController@index');
	Route::any('home/index','Home\EcommendController@ecommend');


});