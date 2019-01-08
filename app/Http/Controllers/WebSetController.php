<?php

namespace App\Http\Controllers;

use App\WebSet;
use Illuminate\Http\Request;

class WebSetController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web_sets = WebSet::first();
        return view('/admin/web_sets/index',compact('web_sets'));
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
        $user = session('admin');$user=88;
        $web_sets = WebSet::first();
        if(empty($web_sets)){
            $web_sets = new WebSet;
        }
            $web_sets->domain_name = $request->post('domain_name');
            $web_sets->web_title = $request->post('web_title');
            $web_sets->web_keyword = $request->post('web_keyword');
            $web_sets->web_describe = $request->post('web_describe');
            $web_sets->web_email = $request->post('web_email');
            $web_sets->web_tel = $request->post('web_tel');
            $web_sets->record_number = $request->post('record_number');
            $web_sets->copyright = $request->post('copyright');
            $web_sets->update_user = $user;   

        if($web_sets->save()){
            return response()->json(['code' => 200,'msg'=>'更新成功!']);
        }else{
            return response()->json(['code' => 400,'msg'=>'更新失败!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WebSet  $webSet
     * @return \Illuminate\Http\Response
     */
    public function show(WebSet $webSet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebSet  $webSet
     * @return \Illuminate\Http\Response
     */
    public function edit(WebSet $webSet)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebSet  $webSet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebSet $webSet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebSet  $webSet
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebSet $webSet)
    {
        //
    }
}
