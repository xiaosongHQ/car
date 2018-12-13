    function start(){
        nbnb = document.getElementById('nb');
        nbnb.innerHTML = "0";
        valueone = "";
        valuetwo = "";
            }
            function jisuan(){
                valuetwo = Number(nbnb.innerHTML);
                switch(ysf){
                    case "+" : sum = valueone + valuetwo
                    break;
                    case "-" : sum = valueone - valuetwo
                    break;
                    case "x" : sum = valueone * valuetwo
                    break;
                    case "/" : sum = valueone / valuetwo
                    break;
                }
                nbnb.innerHTML = sum;
            }
            function jia(){
                ysf = "+";
                if(!nbnb.innerHTML == "0"){
                    valueone = Number(nbnb.innerHTML);
                }
            }
            function jian(){
                ysf = "-";
                if(!nbnb.innerHTML == "0"){
                    valueone = Number(nbnb.innerHTML);
                }
            }
            function cheng(){
                ysf = "x";
                if(!nbnb.innerHTML == "0"){
                    valueone = Number(nbnb.innerHTML);
                }
            }
            function chu(){
                ysf = "/";
                if(!nbnb.innerHTML == "0"){
                    valueone = Number(nbnb.innerHTML);
                }
            }

            function nine(){
                 var num = document.getElementById('9').innerHTML;
                if(nbnb.innerHTML =="0" || valueone === Number(nbnb.innerHTML) ){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function eight(){
                    var num = document.getElementById('8').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function seven(){
                    var num = document.getElementById('7').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function six(){
                    var num = document.getElementById('6').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function five(){
                    var num = document.getElementById('5').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function four(){
                    var num = document.getElementById('4').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function three(){
                    var num = document.getElementById('3').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function two(){
                    var num = document.getElementById('2').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function one(){
                    var num = document.getElementById('1').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function zero(){
                    var num = document.getElementById('0').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                    nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
            function dian(){
                    //alert("该(小数点)功能存在一定bug,请谨慎使用")
                    var num = document.getElementById('d').innerHTML;
                if(nbnb.innerHTML == "0" || valueone === Number(nbnb.innerHTML)){
                   nbnb.innerHTML = num;
                }else{
                    nbnb.innerHTML += num;
                }
            }
