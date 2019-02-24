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

Route::get('/', function () {
    return view('/home/index');
});

Route::get('/admin', function () {
    return view('/admin/index');
});
Route::get('/admin/welcome', function () {
    return view('/admin/welcome');
});


Route::group(['middleware'=>'web'],function() {

Route::get('/reg', function () { return view('/home/reg'); });   //用户注册
Route::get('/login', function () { return view('/home/login'); });   //用户登录
Route::get('/mine', 'UserController@mine');   //个人中心
Route::resource('/movie','MovieController');   //电影资源路由
Route::post('/do_reg', "UserController@do_reg");   //处理用户注册
Route::post('/do_login', "UserController@do_login");   //处理用户注册
Route::get('/login_out', "UserController@login_out");   //处理用户退出

});



//后台首页
Route::get('/admin', 'AdminController@index');

//用户管理 管理员管理
Route::get('/admin/user/admin', 'AdminController@user_admin_list');

//管理员的停用和启用
Route::get('/admin/user_state/{id}', 'AdminController@user_state');

//用户管理
Route::resource('/admin/user','UserController');

//网站配置
Route::resource('/admin/web_set','WebSetController');