<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class CommonController extends Controller
{
    
    
   //初始化登录验证
    public function __construct(){
        //验证登录状态  如果没有登录跳转到登陆页
        if(!Session::has("userData")){
            header("Location:/Login");
            exit;
        }
    }
   
    
    
}
