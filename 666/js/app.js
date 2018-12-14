window.onload = function(){

	var menu_list = document.getElementsByClassName('menu-list');
	console.log(menu_list);
	for (var i = 0 ; i< menu_list.length ;  i++) {
		menu_list[i].onmouseover = function(){
			this.style.background='#096';
			this.style.color='white';
			this.style.cursor='pointer';
		}
		menu_list[i].onmouseout = function(){
			this.style.background='#f96';
			this.style.color='black';
		}
	}

}
function daojishi(set_date,set_content){
	document.write("<div class='biyetime'><table width='100%'><tr><td style='text-align:right;'><span style='font-size:30px;color:#f96'>"+set_content+"还有</span><span id='day'></span>天<span id='h'></span>时<span id='ii'></span>分<span id='s'></span>秒</td><td style='text-align:left;' width='10%'><span id='ms'></span></td><td width='25.5%' style='text-align:left'>毫秒</td></tr></table></div>");
	
	var s = document.getElementById('s');
	var h = document.getElementById('h');
	var ii = document.getElementById('ii');
	var day = document.getElementById('day');
	var ms = document.getElementById('ms');
	date2 = new Date(set_date);//获取结束日期时间戳
	//定时器
	setInterval(function(){
		date1 = new Date();//获取当前日期时间戳
		date3 = date2.valueOf() - date1.valueOf();//相差时间戳
		var ddd = Math.floor(date3/(1000*60*60*24));  //相差天数
		var hhh = Math.floor(date3/(1000*60*60));	//相差小时
		var iii = Math.floor(date3/(1000*60));	//相差分钟
		var sss = Math.floor(date3/(1000));	//相差秒
		var mmm = date3;	//相差毫秒
		day.innerHTML = ddd;
		h.innerHTML = hhh-(ddd*24);
		ii.innerHTML = iii-60*((ddd*24)+(hhh-(ddd*24)));
		s.innerHTML = sss-60*((ddd*24*60) + ((hhh-(ddd*24))*60) + iii-60*((ddd*24)+(hhh-(ddd*24))));
		ms.innerHTML = mmm-1000*((ddd*24*60*60)+ ((hhh-(ddd*24))*60*60)+ ((iii-60*((ddd*24)+(hhh-(ddd*24))))*60)+ (sss-60*((ddd*24*60) + ((hhh-(ddd*24))*60) + iii-60*((ddd*24)+(hhh-(ddd*24))))));
	},100);
}

var test = document.getElementsByClassName('nowtime');
		
		setInterval(function(){
		 var d = new Date();
		 //年
		 var year = d.getFullYear();
		 //月
		 var month = d.getMonth();
		 if(month<10){
		 	month = '0'+month;
		 }
		 //日
		 var date = d.getDate();
		 //时
		 var hours = d.getHours();
		 if(hours<10){
		 	hours = '0'+hours;
		 }
		 //分
		 var minutes = d.getMinutes();
		 //秒
		 var seconds = d.getSeconds();
		 var str = year+'-'+month+'-'+date+' '+hours+':'+seconds;
		 test[0].innerHTML = str;

		},1000);