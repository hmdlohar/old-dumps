
<p id=opens onclick=opens(590)>Opesn</p>
<p id=uidnow1>uidnow1</p>
<p id=uidnow2>uidnow2</p>
<a href=test.php?userid=599 id=next_id target=news>new</a>
<script>
window.winRef = new Object();
winRef.closed = true;


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
function opens(uidnow2){
	window.uidnow2=uidnow2;
window.winRef = window.open("test.php?userid="+window.uidnow2, "wind");

}
function closes(){
	window.winRef.close();
}
function check_new(){
	
	}
function updatenow(){
	document.getElementById('uidnow1').innerHTML=window.uid1;
	document.getElementById('uidnow2').innerHTML=window.uidnow2;
	window.uidnow=getCookie("uidnow");
	if(window.uidnow < window.uidnow2){
		closes();
		opens(window.uidnow);
		}
	}
window.uid1=1029;
var intruid=setInterval("updatenow()",1000);
function next_open(){
	var next_inner=window.uid1-1;
	var next_id=document.getElementById('next_id');
	next_id.href="test.php?userid="+next_inner;
	next_id.click();
	window.uid1=next_inner;
	}
var intruid2=setInterval("next_open()",8000);
</script>