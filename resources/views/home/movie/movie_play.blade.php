@extends('home.common')

@section('main')
<link rel="stylesheet" href="/static/home/css/share.css">
<script type="text/javascript" src="/static/home/js/share.js"></script>
<style>
	.comment_list{
		position: relative;
		width:80%;
		min-height:70px;
		background: rgba(58,162,83,0.1);
		margin-top:10px;
		box-shadow: 3px 3px 2px #888888;
		border-radius: 3px;
		padding:15px;
	}
</style>
<div style="margin-top:10px;" class="container">

		<div style="margin-top:40px;" class="col-md-7">
			<video style="top:0px;left:0px; width:100%" src="/aetherupload/display/{{$movie['data']}}" controls></video>
			<button id="up" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 赞一个 &nbsp; <span id="up_num">{{$movie['up']}}</span></button>
			<button id="down" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 踩一踩 &nbsp; <span id="down_num">{{$movie['down']}}</span></button>

	<a style="float:right;position:absolute;bottom:-8px;" href="javascript:void(0)" class="share"><img style="width:43%" src="/static/home/images/share-ico.png"/></a>
			
		</div>

		<div style="" class="col-md-5 list-group">
		  <a href="/" class="list-group-item active">更多精彩视频</a>
			 @foreach($movies as $k => $v)
			  <a href="/movie/{{$v['id']}}" class="list-group-item">{{$v['name']}}</a>
			@endforeach
		</div>
</div>
<div style="margin-top:20px;" class="container">
	<div class="col-md-8 col-md-offset-2">
		发布评论：
		<textarea name="comment_content" class="form-control" rows="3" placeholder="需要登录之后才可以评论"></textarea>
		<button style="margin-top:5px; " id="comment" class="btn btn-success">提交评论</button>
	</div>
	<div style="margin-top:20px " class="col-md-8 col-md-offset-2">
		最新评论：
		@foreach($comments as $k=>$v)
		<div class="comment_list">
			<div style="text-align:left;">{{$v->user['username']}}:</div>
			<div style="margin-left:10%;margin-top:5px;margin-bottom: 5px;width:80%"><span>{{$v['content']}}</span></div>
			<div style="text-align: right">{{$v['created_at']}}</div>
		</div>
		@endforeach
	</div>


		
</div>




<script  type="text/javascript">
	$('.share').shareConfig({
		Shade : true, //是否显示遮罩层
		Event:'click', //触发事件
		Content : 'Share', //内容DIV ID
		Title : '我爱分享' //显示标题
	});
	$('#comment').click(function(){
		var ct = $('textarea[name=comment_content]').val();
		var id = <?php echo $movie['id']; ?>;
		if(ct=='' || ct==null || ct== 'null' || ct=='undefined') {layer.msg('请先填写评论');return false;}
		$.post({
        url: '/comment',
        data: {
        	id:id,
            ct: ct
               },
       success: function (res) {
            layer.msg(res.msg);
        }
         })
	});

	$('#up').click(function(){
		var id = <?php echo $movie['id']; ?>;
		$.post('/comment/up',{id:id},function(res){
			if(res.code==1){
				layer.msg(res.msg);
				var num = parseInt($('#up_num').text())+1;
				$('#up_num').text(num)
			}else{
				layer.msg(res.msg);
			}
		})
	});
	$('#down').click(function(){
		var id = <?php echo $movie['id']; ?>;
		$.post('/comment/down',{id:id},function(res){
			if(res.code==1){
				layer.msg(res.msg);
				var num = parseInt($('#down_num').text())+1;
				$('#down_num').text(num)
			}else{
				layer.msg(res.msg);
			}
		})
	});

</script>
@endsection
