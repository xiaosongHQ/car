@extends('admin.common.default') 

@section('content')

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/user" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>手机号：</th>
                                <td>
                                    <input class="common-text required" id="title" name="phone" size="50" value="" type="text">
                                    <font color='red'>*手机号也可作为用户名登录</font>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>用户名：</th>
                                <td>
                                    <input class="common-text required" id="title" name="username" size="50" type="text">
                                    <font color='red'>*请输入2-16位字符的用户名(不得包含特殊字符)</font>

                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>密码：</th>
                                <td><input class="common-text" name="password" size="50"  type="password">
                                <font color='red'>*请设置6-16位密码,建议使用的大小写英文加符号</font>
                                </td>
                                    
                            </tr>
                           
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                         {{ csrf_field() }}
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
@endsection