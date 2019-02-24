<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆页面</title>
    <link rel="stylesheet" type="text/css" href="/static/home/login/css/login.css">
    <script type="text/javascript" src="/static/home/login/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".name input").focus(function(){
                $(this).prev("i").css({"background-image":"url(/static/home/login/img/user2.png)"});
            });
            $(".name input").blur(function(){
                $(this).prev("i").css({"background-image":"url(/static/home/login/img/user1.png)"});
            });
            $(".password input").focus(function(){
                $(this).prev("i").css({"background-image":"url(/static/home/login/img/password2.png)"});
            });
            $(".password input").blur(function(){
                $(this).prev("i").css({"background-image":"url(/static/home/login/img/password1.png)"});
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="wrap">
            <header><em>毕业设计</em><span>毕业设计</span></header>
            <article style="margin-top:10px;">
                <section>
                    <aside>
                        <em>
                            <img src="/static/home/login/img/user.png">
                        </em>
                         <form action="/do_login" method="post">
                            <p class="name"><i></i><input type="text" name="username" name="userName" class="userName" placeholder="请输入用户名"></p>
                            <p class="password"><i></i><input type="password" name="pwd" class="pwd" placeholder="请输入密码"></p>
                            <button>登录</button>
                            <!-- <p class="remember"><input type="checkbox" name="remember">记住密码</p> -->
                            <p class="regist"><span>没有账号?</span><a href="/reg">立即注册</a></p>
                            <div class="clear"></div>
                    {{ csrf_field() }}
                            
                        </form>
                    </aside>
                   
                </section>               
            </article>
            
        </div>
    </div>
</body>
</html>
