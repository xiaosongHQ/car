<!DOCTYPE HTML>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/static/home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/static/home/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="/static/home/js/jquery-2.2.3.min.js"></script> 
<script type="text/javascript" src="/static/home/js/move-top.js"></script>
<script type="text/javascript" src="/static/home/js/easing.js"></script>
<script type="text/javascript" src="/static/home/js/layer.js"></script>
<script type="text/javascript" src="/static/home/js/jquery.nivo.slider.js"></script>
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="/">首页</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							@if(session()->has('user')==false)
							<li><a href="/reg">注册</a></li>
							<li><a href="/login">登录</a></li>
							@else
							<li><a href="/mine">个人中心</a></li>
							<li><a href="/movie/create">发布电影</a></li>
							<li><a href="/login_out">退出</a></li>
							@endif
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		@yield('main')
   <div class="footer">
   	  <div class="wrap">	
	     
			 <div class="copy_right">
				<p>Copyright &copy; 2014.Company name All rights reserved.More Templates <a href="#" target="_blank" title="毕业设计">毕业设计</a> - Collect from <a href="#" title="毕业设计" target="_blank">毕业设计</a></p>
		   </div>			
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>

</body>
</html>

