@extends('admin.common.default') 

@section('content')

<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/user/index" method="get">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择用户类型:</th>
                            <td>
                                <select name="qx" id="">
                                    <option value="">全部</option>
                                    <option value="1">管理员</option>
                                    <option value="2">普通用户</option>
                                </select>
                            </td>
                            <th width="70">用户名:</th>
                            <td><input class="common-text" placeholder="支持用户名模糊搜索" name="uname" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="搜索" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form action='/user/delete' name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                       <button type='button' onclick="window.location.href='/user/create'"><i class="icon-font"></i>新增用户</button>&nbsp;&nbsp;
                       <button type='submit'><i class="icon-font"></i>批量删除</button>&nbsp;&nbsp;
                       <button><i class="icon-font"></i>更新排序</button>
                    </div>
                </div>
                </form>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>序号</th>
                            <th>用户名</th>
                            <th>用户类型</th>
                            <th>联系方式</th>
                            <th>注册时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($users as $k=> $v)
                        <tr>
                            <td class="tc"><input name="uid[]" value="{$v.id}" type="checkbox"></td>
                            <td>{{$k+1}}</td>
                            <td>{{$v->username}}</td>
                            <td>{{$v->user_type==3 ? '管理员' : '普通用户'}}</td>
                            <td>{{$v->phone}}</td>
                            <td>{{$v->created_at}}</td>
                            <td>
                                <button class="btn btn-info" href="/user/edit/{$v.id}">修改</button> &nbsp; 
                                <form action="/user" method="post"><button style="display: inline-block;" class="btn btn-danger">删除</button></form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="list-page">分页</div>
                </div>
            
        </div>
    </div>
@endsection