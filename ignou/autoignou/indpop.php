<p id=opens onclick=opens()>opens</p>
<p id=closes onclick=closes()>closes</p>

<p id=enow>enow</p>
<p id=efirst>efisrt</p>
<p id=result>result</p>

<script type="text/javascript">
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
function opens(){
window.winRef = window.open("index3.php", "wind");
	var cook = document.cookie.split(";");
	var ecook = cook[0].split("=");
document.cookie="enrolfirst="+ecook[1];
}
function closes(){
	window.winRef.close();
}

function record(){
	var cook = document.cookie.split(";");
	var ecook = cook[0].split("=");
	
}
function e_first(){
	window.efirst=getCookie("enrolnow");
}
function check_now(){
	var enow=getCookie("enrolnow");
	if(enow <=window.efirst){
		closes();
		document.getElementById('opens').click();
		document.getElementById('result').innerHTML = "no OK"
		}else {document.getElementById('result').innerHTML = "running OK"}
}
function update(){
	document.getElementById('enow').innerHTML = getCookie('enrolnow');
	document.getElementById('efirst').innerHTML = window.efirst;
}
e_first();
window.inter = setInterval("check_now()",30000);
window.inter2 = setInterval("e_first()",30000);
window.inter3 = setInterval("update()",3000);


</script>