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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('/admin/index');
});
Route::get('/admin/welcome', function () {
    return view('/admin/welcome');
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