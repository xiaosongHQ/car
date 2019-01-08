<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/admin/css/font.css">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .layui-form-item .layui-input-inline{
        width:40%;
      }
      .layui-form-item{
        margin-left: 25%;
      }
    </style>
  </head>
  
  <body>
    <div class="x-body">
        <form class="layui-form">
          <div class="layui-form-item">
              <label for="domain_name" class="layui-form-label">
                  <span class="x-red">*</span>域名
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="domain_name" name="domain_name" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->domain_name}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写域名信息
              </div>
          </div>


          <div class="layui-form-item">
              <label for="web_title" class="layui-form-label">
                  <span class="x-red">*</span>标题
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="web_title" name="web_title" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->web_title}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写网站标题
              </div>
          </div>


          <div class="layui-form-item">
              <label for="web_keyword" class="layui-form-label">
                  <span class="x-red">*</span>关键字
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="web_keyword" name="web_keyword" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->web_keyword}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写网站关键字
              </div>
          </div>


          <div class="layui-form-item">
              <label for="web_describe" class="layui-form-label">
                  <span class="x-red">*</span>描述
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="web_describe" name="web_describe" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->web_describe}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写网站描述
              </div>
          </div>


          <div class="layui-form-item">
              <label for="web_email" class="layui-form-label">
                  <span class="x-red">*</span>邮箱
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="web_email" name="web_email" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->web_email}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写网站联系邮箱
              </div>
          </div>


          <div class="layui-form-item">
              <label for="web_tel" class="layui-form-label">
                  <span class="x-red">*</span>电话
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="web_tel" name="web_tel" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->web_tel}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写网站联系电话
              </div>
          </div>


          <div class="layui-form-item">
              <label for="copyright" class="layui-form-label">
                  <span class="x-red">*</span>版权
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="copyright" name="copyright" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->copyright}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写网站版权
              </div>
          </div>


          <div class="layui-form-item">
              <label for="record_number" class="layui-form-label">
                  <span class="x-red">*</span>备案
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="record_number" name="record_number" required="" lay-verify="required"
                  autocomplete="off" value="@isset($web_sets) {{$web_sets->record_number}}@endisset" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>填写网站备案号
              </div>
          </div>
         
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  更 新
              </button>
          </div>
      </form>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          form.verify({
            nikename: function(value){
              if(value.length < 5){
                return '昵称至少得5个字符啊';
              }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,repass: function(value){
                if($('#L_pass').val()!=$('#L_repass').val()){
                    return '两次密码不一致';
                }
            }
          });
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
          //监听提交
          form.on('submit(add)', function(data){
            console.log(data.field);
            //发异步，把数据提交给php

            $.ajax({
                  type: "POST",
                  url: '/admin/web_set',
                  data: data.field,
                  success: function(data){
                    if(data.code==200){
                      layer.msg(data.msg, {icon: 1});
                    }else{
                      layer.msg(data.msg, {icon: 2});
                    }
                   
//                     location.href = "./index.html";
                  }
            }); 

            // layer.alert("增加成功", {icon: 6},function () {
            //     // 获得frame索引
            //     var index = parent.layer.getFrameIndex(window.name);
            //     console.log(index)
            //     //关闭当前frame
            //     parent.layer.close(index);
            // });
            return false;
          });
          
          
        });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();
    </script>
  </body>

</html>