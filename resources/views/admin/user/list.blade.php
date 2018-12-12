@extends('admin.common.default') 

@section('content')

<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/user" method="get">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择用户类型:</th>
                            <td>
                                <select name="user_type">
                                    <option {{$arr['user_type']==0 ? "selected" : ''}} value="0">全部</option>
                                    <option {{$arr['user_type']==1 ? "selected" : ''}}  value="1">普通用户</option>
                                    <option {{$arr['user_type']==2 ? "selected" : ''}}  value="2">商家</option>
                                    <option {{$arr['user_type']==3 ? "selected" : ''}}  value="3">管理员</option>
                                </select>
                            </td>
                            <th width="70">用户名:</th>
                            <td><input class="common-text" value="{{$arr['username']}}" placeholder="支持用户名模糊搜索" name="username"  type="text"></td>
                            <td><input class="btn btn-primary btn2" value="搜索" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form action='/user/delete' name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                       <button type='button' onclick="window.location.href='/user/create'"><i class="icon-font"></i>新增用户</button>
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
                                <a href="/user/{{$v->id}}/edit"><button class="btn btn-info">修改</button></a> &nbsp; 
                                <form action="/user/{{$v->id}}" method="post"><button style="display: inline-block;" class="btn btn-danger">删除</button>{{csrf_field()}}{{method_field('DELETE')}}</form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="list-page">{{$users->appends(request()->all())->links() }}</div>
                </div>
            
        </div>
    </div>
@endsection