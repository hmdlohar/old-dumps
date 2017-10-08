function blink(div,color1,color2){
	colornow=color1;
	function swap(colornow){
		if(colornow==color1){
		colornow=color2;
		}else{
		colornow=color1;
		}
		return colornow;
	}
	time1=setInterval(function(){div.style.color=colornow;colornow=swap(colornow);},500);
}

function result_add(text){
	document.getElementById("result").innerHTML=document.getElementById("result").innerHTML+"<br>"+text;
}
function is_inner(inner,tag){
	hmd_1=document.getElementsByTagName(tag);
	hmd_12=-1;
	for(x=0;x<hmd_1.length;x++){
		if(hmd_1[x].innerHTML.indexOf(inner)>=0){
			hmd_12=x;
			break;
			}
	}
	return hmd_12;
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
function setCookie(cname, cvalue, exdays) {
	
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
function body_click(){
	if(getCookie("body_click")==""){
	document.getElementById("a001").click();
	setCookie("body_click","clicked",1);
	}
}
function convert_link(str){
	while(str.indexOf(" ")>0){
		str=str.replace(" ","_");
		}
		return str;
}


