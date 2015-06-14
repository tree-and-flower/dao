<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//用户页面路由
Route::get('/home', 'UserController@home');

//后台Admin路由
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/home', 'AdminController@home');
});
//微信Wechat路由
Route::group(['prefix' => 'wechat', 'namespace' => 'Wechat'], function(){
    Route::any('/', 'WechatController@wechat');
});
