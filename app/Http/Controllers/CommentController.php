<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Movie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = $request->post('ct');
        if(empty($content)) return response()->json(['msg' => '数据异常，错误号0012'], 200);
        if(!$request->session()->has('user')) return response()->json(['msg' => '数据异常，错误号0012'], 200);
        $user = session()->get('user');
        $movie_id = $request->post('id');
        $comment = new Comment;
        $comment->movie_id  = $movie_id;
        $comment->user_id  = $user['id'];
        $comment->content  = $content;
        if($comment->save()){
            return response()->json(['msg' => '评论成功'], 200);
        }else{
            return response()->json(['msg' => '网络数据异常，请稍后再试'], 200);
        }


    }

    //赞一下
    public function up(Request $request){
        $id = $request->post('id');
        if(empty($id)) return response()->json(['msg' => '非法请求'], 200);
        $movies = Movie::find($id);
        $movies->up = $movies['up']+1;
        if($movies->save()){
            return response()->json(['msg' => '赞 +1','code'=>1], 200);
        }else{
            return response()->json(['msg' => '网络数据异常，请稍后再试','code'=>0], 200);
        }
    }

//踩一下
    public function down(Request $request){
        $id = $request->post('id');
        if(empty($id)) return response()->json(['msg' => '非法请求'], 200);
        $movies = Movie::find($id);
        $movies->down = $movies['down']+1;
        if($movies->save()){
            return response()->json(['msg' => '踩 +1','code'=>1], 200);
        }else{
            return response()->json(['msg' => '网络数据异常，请稍后再试','code'=>0], 200);
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
