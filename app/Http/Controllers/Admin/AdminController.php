<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | 后台管理Controller 登录 注册等操作
    |--------------------------------------------------------------------------
    */

    public function __construct(){
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    public function home(){
        return view('admin.home');
    }
}
