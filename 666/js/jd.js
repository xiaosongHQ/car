window.onload = function(){
	function id(name){
		return document.getElementById(name);
	}
	function rand(m,n){
		return Math.ceil(Math.random()*(n-m+1))+m-1;
	}
	var btns = document.getElementsByTagName('button');
	var content = id('content');
	btns[0].onclick=function(){
		var div = createNewDiv();
		content.appendChild(div);
	}
	btns[1].onclick=function(){
		var div = createNewDiv();
		content.insertBefore(div,content.firstElementChild);
	}
	btns[2].onclick=function(){
		content.removeChild(content.firstElementChild);
	}
	btns[3].onclick=function(){
		var div = createNewDiv();
		content.replaceChild(div,content.lastElementChild);
	}
	btns[4].onclick=function(){
		var newdiv = content.lastElementChild.cloneNode(true);
		content.insertBefore(newdiv,content.firstElementChild);
	}
	function createNewDiv(){
		var div = document.createElement('div');
		div.onclick=function(){
			var res = confirm('are you sure delete this div;');
			if(!res){return false;}
			content.removeChild(this);
		}
		div.setAttribute('class','item');
		var img = document.createElement('img');
		img.setAttribute('width','100%');
		img.setAttribute('src','../images/'+rand(1,14)+'.jpg');
		div.appendChild(img);
		return div;
	}
}