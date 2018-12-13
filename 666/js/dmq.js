window.onload = function(){
	function id(name){
		return document.getElementById(name);
	}
	function rand(m,n){
		return Math.ceil(Math.random()*(n-m+1))+m-1;
	}
	var nb=document.getElementsByTagName('button');
	var content=id('content'); 
	var arr = ['张三','小周','李四','小李','王二','小王','大王','小张','张三','小明'];
	var timer = null,zt=false;
	nb[0].onclick=function(){
		if(zt){return false;}
		timer = setInterval(function(){
			var i = rand(0,4);
			content.innerHTML=arr[i];
			zt=true;
		},10);
	}
	nb[1].onclick=function(){
		clearInterval(timer);
		zt = false;
	}
}