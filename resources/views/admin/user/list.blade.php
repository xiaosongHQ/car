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
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th width='5%'>ID</th>
                            <th width='15%'>用户名</th>
                            <th width='5%'>性别</th>
                            <th width='8%'>用户类型</th>
                            <th width='10%'>联系方式</th>
                            <th width='15%'>注册时间</th>
                            <th width='10%'>注册IP</th>
                            <th width='5%'>头像</th>
                            <th>操作</th>
                        </tr>
                        @foreach($users as $k=> $v)
                        <tr>
                            <td class="tc"><input name="uid[]" value="{$v.id}" type="checkbox"></td>
                            <td>{$v.id}</td>
                            <td>{$v.uname}</td>
                            <td>{$v.sex==1 ? '男' : '女'}</td>
                            <td>{$v.qx==1 ? '管理员' : '普通用户'}</td>
                            <td>{$v.tel}</td>
                            <td>{$v.rtime | date='Y-m-d H:i'}</td>
                            <td>{:long2ip($v.rip)}</td>
                            <td><img src='/static/userpic/{$v.pic}' width='34'></td>
                            <td>
                                <a class="link-update" href="/user/edit/{$v.id}">修改</a> &nbsp; 
                                <a class="link-del" href="/user/delete/{$v.id}">删除</a> &nbsp; 
                                <a class="link-del" href="#">禁用</a> &nbsp; 
                                <a class="link-del" href="#">备用</a>&nbsp; 
                                <a class="link-del" href="#">备用</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="list-page">分页</div>
                </div>
            </form>
        </div>
    </div>
@endsection