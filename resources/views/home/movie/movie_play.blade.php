@extends('home.common')

@section('main')
<div style="position:relative;">
	<div style="width: 60%;">
		<video style="top:0px;left:0px; width:100%" src="/aetherupload/display/{{$movie['data']}}" controls></video>
	</div>

	<div style="width:38%;position: absolute;top:0px;right:5px;" class="list-group">
	  <a href="/" class="list-group-item active">更多精彩视频</a>
		 @foreach($movies as $k => $v)
		  <a href="/movie/{{$v['id']}}" class="list-group-item">{{$v['name']}}</a>
		@endforeach
	</div>



</div>


@endsection