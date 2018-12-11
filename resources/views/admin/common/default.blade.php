<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>car后台管理</title>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/main.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/> -->
    <script type="text/javascript" src="/static/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">car后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/admin">首页</a></li>
                <li><a href="/">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <!-- <img width='30' src="/static/userpic/"> -->
                <li><a>管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="/admin_outlogin">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/user"><i class="icon-font">&#xe008;</i>用户管理</a></li>
                        <li><a href="../part/index"><i class="icon-font">&#xe005;</i>分区管理</a></li>
                        <li><a href="../cate/index"><i class="icon-font">&#xe006;</i>板块管理</a></li>
                        <li><a href="../link/index"><i class="icon-font">&#xe004;</i>友链管理</a></li>
                        <li><a href="../post/admin_post_index"><i class="icon-font">&#xe012;</i>帖子管理</a></li>
                        <li><a href="../post/reply"><i class="icon-font">&#xe052;</i>回帖管理</a></li>
                        <li><a href="../jip/index"><i class="icon-font">&#xe052;</i>禁用IP管理</a></li>
                        <li><a href="../del"><i class="icon-font">&#xe033;</i>回收站管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="/set"><i class="icon-font">&#xe017;</i>网站配置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    @yield('content')
    
    <!--/main-->
</div>
</body>
</html>