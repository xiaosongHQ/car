<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movie;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mine()
    {

        $movies = Movie::where('state',1)->get();
        return view('/home/mine',['movies'=>$movies]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/users/user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = session('admin');$user=88;
        
        $users = new User;
        $users->username = $request->post('username');
        $users->password = encrypt($request->post('password'));
        $users->level = $request->post('level');
        $users->phone = $request->post('phone');
        $users->type = 0;
        $users->update_user = $user;
        if($users->save()){
            return response()->json(['code' => 200,'msg'=>'添加成功!']);
        }else{
            return response()->json(['code' => 400,'msg'=>'添加失败!']);
        }
    }

//处理用户注册
    public function do_reg(Request $request){
        $users = new User;
        $users->username = $request->post('username');
        $users->password = encrypt($request->post('pwd'));
        $users->mobile = $request->post('mobile');
        $users->type = 0;
        if($users->save()){
            echo "<script>alert('添加成功');window.location.href='/login';</script>";
        }else{
            echo "<script>alert('添加失败');window.history.go(-1);</script>";
        }
    }

//处理用户登录
    public function do_login(Request $request){
        $username = $request->post('username');
        $pwd = $request->post('pwd');
        $row = User::where('username',$username)->get();
        if(count($row) == 0) $this->return_msg('用户名或密码错误');
        if(decrypt($row[0]['password']) != $pwd) $this->return_msg('用户名或密码错误');
        //存入session
        // session(['user'=>$row[0]]);        //跳转首页
        $request->session()->put('user', $row[0]);
        $this->return_msg('登录成功','/');
    }

    public function login_out(Request $request){
        $request->session()->forget('user');
        $request->session()->flush();
        $this->return_msg('退出成功','/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function return_msg($msg,$url=false){
        if($url){
             echo "<script>alert('{$msg}');location.href='{$url}';</script>";
             return;
        }else{
            echo "<script>alert('{$msg}');history.go(-1);</script>";
            return;
        }
    }
}
