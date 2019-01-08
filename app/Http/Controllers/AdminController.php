<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{

	//首页渲染页面
    public function index(){
    	return view('/admin/index');
    }

    //后台用户管理  管理员用户管理页面渲染
    public function user_admin_list(){
    	$users = User::where([['type','0'],['deleted_at','']])->get();
    	return view('/admin/users/user_admin',compact('users'));
    }

    //处理用户的启用和停用请求
    public function user_state($id){
    	$users = User::findOrFail($id);
    	if($users->state==1){
    		$users->state=0;
    		$temp = '启用';
    	}else{
    		$users->state=1;
    		$temp = '停用';
    	}
    	 if($users->save()){
            return response()->json(['code' => 200,'msg'=>$temp.'成功!']);
        }else{
            return response()->json(['code' => 400,'msg'=>$temp.'失败!']);
        }
    }

}
