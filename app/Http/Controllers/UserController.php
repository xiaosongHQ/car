<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cont=[];
        $arr = [];
        if($username = $request->get('username')){
            $cont[]=['username','like',"%{$username}%"];
            $arr['username'] = $username;
        }else{
            $arr['username'] = '';
        }
        if($user_type = $request->get('user_type')){
            $cont[]=['user_type','=',"{$user_type}"];
            $arr['user_type'] = $user_type;
        }else{
            $arr['user_type'] = 0;
        }
        $users = User::where($cont)->orderBy('created_at','desc')->paginate(2);

        return view('/admin/user/list',['users'=>$users,'arr'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->post();
        $this->validate($request, [
            'username' => 'required|min:2|max:16',
            'password' => 'required|min:6',
            'phone' => 'required|numeric|digits_between:11,11',
        ]);
        $data['user_type'] = 3;
        $data['created_at'] = time();
        $data['updated_at'] = time();
        $data['password'] = md5(md5($data['password']).'wangsong');
        unset($data['_token']);
        if(User::insert($data)){
            return redirect('/user')->with('true','添加成功');
        }else{
            return back('/user')->with('true','添加失败');
        }
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
        $users = User::findOrFail($id);
        return view('admin/user/edit',['users'=>$users]);
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
        $data = $request->post();
        $temp = [
                            'username' => 'required|min:2|max:16',
                            'password' => 'required|min:6',
                            'phone' => 'required|numeric|digits_between:11,11',
                        ];
        unset($data['_token']);
        unset($data['_method']);
        if(empty($data['password'])){
            unset($temp['password']);
        } 
        $this->validate($request,$temp);
         if(empty($data['password'])){
            unset($data['password']);
        }else{
            $data['password'] = md5(md5($data['password']).'wangsong');
        }
        $data['updated_at'] = time();
        if(User::where('id',$id)->update($data)){
            return redirect('/user')->with('true','更新成功');
        }else{
            return back()->with('false','更新失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(User::where('id',$id)->update(['deleted_at'=>time(),'updated_at'=>time()])){
            return redirect('/user')->with('true','删除成功');
        }else{
            return bake()->with('false','删除失败');
        }
    }
}
