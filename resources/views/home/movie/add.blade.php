@extends('home.common')
@section('main')
<style>
	.input-group-lg{
		margin-top:5px;
	}
</style>
<h3 class="text-center">发布电影</h3>
<hr>
<div class="center-block" style="width:50%;min-height:500px;">
	<form action="/movie" method="post" enctype="multipart/form-data">
	<div class="input-group input-group-lg">
	  <span class="input-group-addon" id="sizing-addon1">电影名称</span>
	  <input type="text" class="form-control" name="name" placeholder="输入电影名称" aria-describedby="sizing-addon1">
	</div>

	<div class="input-group input-group-lg">
	  <span class="input-group-addon" id="sizing-addon1">电影描述</span>
	  <input type="text" class="form-control"  name="desc"  placeholder="输入电影描述" aria-describedby="sizing-addon1">
	</div>

	<div class="input-group input-group-lg">
	  <span class="input-group-addon" id="sizing-addon1">上映时间</span>
	  <input type="date" class="form-control" name="release_time" aria-describedby="sizing-addon1">
	</div>

	<div class="input-group input-group-lg">
	  <span class="input-group-addon" id="sizing-addon1">电影封面</span>
	  <input type="file" class="form-control" name='img'  aria-describedby="sizing-addon1">
	</div>

	<div class="input-group input-group-lg" id="aetherupload-wrapper" >
                <label>电影文件</label>
                <div class="controls" >
                    <input type="file" id="file"  onchange="aetherupload(this,'file').success(someCallback).upload()"/><!--需要有一个名为file的id，用以标识上传的文件，aetherupload(file,group)中第二个参数为分组名，success方法可用于声名上传成功后的回调方法名-->
                    <div class="progress " style="height: 6px;margin-bottom: 2px;margin-top: 10px;width: 100%;">
                        <div id="progressbar" style="background:blue;height:6px;width:0;"></div>
                    </div>
                    <span style="font-size:12px;color:#aaa;" id="output"></span>
                    <input type="hidden" name="file1" id="savedpath" >
                </div>
            </div>

	 <div id="result"></div>
	
	<button class="btn btn-success" style="width:100%;margin-top:20px;">发布</button>
	{{ csrf_field() }}
</form>
</div>


<script src="{{ URL::asset('js/spark-md5.min.js') }}"></script>
<script src="{{ URL::asset('js/aetherupload.js') }}"></script>
<script>
    // success(callback)中声名的回调方法需在此定义，参数callback可为任意名称，此方法将会在上传完成后被调用
    // 可使用this对象获得fileName,fileSize,uploadBaseName,uploadExt,subDir,group,savedPath等属性的值
    someCallback = function(){
        $('#result').append(
            '<p>文件原名：<span >'+this.fileName+'</span> <br> 文件大小：<span >'+parseFloat(this.fileSize / (1000 * 1000)).toFixed(2) + 'MB'+'</span> <br> 文件储存名：<span id="movie_path">'+this.savedPath.substr(this.savedPath.lastIndexOf('/') + 1)+'</span></p>'
        );
    }

</script>

@endsection