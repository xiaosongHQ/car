<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
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
        return view('/home/movie/add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->post();
        $movie = new Movie;

        $movie->name = $post['name'];
        $movie->desc = $post['desc'];
        $movie->release_time = $post['release_time'];
        $movie->data = $post['file1'];
         // 检测文件是否上传
        if($request->hasfile('img')) $movie->img = '/uploads/'.$request->img->store('home/'.date('Ymd'));
        
        if($movie->save()){
            echo "<script>alert('发布成功，等待审核');window.location.href='/mine';</script>";
        }else{
            echo "<script>alert('发布失败，请稍后重试');window.history.go(-1);</script>";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        
        $movies = Movie::where('state',1)->limit(9)->get();

        return view('/home/movie/movie_play',['movie'=>$movie,'movies'=>$movies]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
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
