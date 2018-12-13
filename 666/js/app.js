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