@extends('home.common')
@section('main')
<style>
	th{
		font-weight: bold;
		text-align: center;
	}
</style>
<!-- 个人用户 -->
<table class="table table-bordered text-center" >
	<caption ><h4 class="text-center">电影信息管理</h4></caption>
	<!-- On cells (`td` or `th`) -->
	<tr>
	  <th class="">序号</th>
	  <th class="">封面</th>
	  <th class="">电影名称</th>
	  <th class="">点击量</th>
	  <th class="">上映时间</th>
	  <th class="" style="width:20%;">操作</th>
	</tr>
	@foreach($movies as $k => $v)
	<tr class="{{$k%2==0 ? 'active' : ''}}">
	  <td class="">{{$v['id']}}</td>
	  <td class=""><img src="{{$v['img']}}" height="30" alt=""></td>
	  <td class="">{{$v['name']}}</td>
	  <td class="">{{$v['read']}}</td>
	  <td class="">{{$v['created_at']}}</td>
	  <td class="">
			<a href="/movie/{{$v['id']}}"><button class="btn btn-success">播放</button></a>
			<button class="btn btn-danger">删除</button>
	  </td>
	</tr>
	@endforeach
</table>
<!-- <video width="500" controls src="/aetherupload/display/{{$movies[0]['data']}}"></video> -->

<!-- 管理员用户 -->

@endsection
