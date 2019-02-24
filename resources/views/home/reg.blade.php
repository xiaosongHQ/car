<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册页面</title>
    <link rel="stylesheet" type="text/css" href="/static/home/regist/css/regist.css">
    <script type="text/javascript" src="/static/home/regist/js/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <article style="margin-top:10px">
            <h1><em></em><span>用户注册</span></h1>
            <div class="main">
                <form action="/do_reg" method="post">
                    <div class="tel">
                        <input type="tel" name="mobile" placeholder="手机号"><em>由11个字符组成！</em>
                    </div>
                    <div class="userName">
                        <input type="text" name="username" placeholder="用户名"><em>由5-8个字符组成！</em>
                    </div>
                    <div class="password">
                        <input type="password" name="pwd" placeholder="密码"><em>使用字母、数字、符号两种及以上的组合，8-12个字符</em>
                    </div>
                    <div class="againpwd">
                        <input type="password" name="re_pwd" placeholder="再次输入密码"><em>重复输入密码</em>
                    </div>
                    {{ csrf_field() }}
                    <button>注册</button>
                </form>
                <p class="regist"><span>已有账号</span><a href="/login">立即登录</a></p>

            </div>
        </article>
        
    </div>
</body>
</html>
