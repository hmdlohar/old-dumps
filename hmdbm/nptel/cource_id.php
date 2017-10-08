<div id=result2 style="overflow:hidden;height:200px;width:200px;float:right;border:1px solid gold;"></div>
<input type=text id=cource_url><input type=text id=lec_num_start value=1><input type=text id=formate value=mp4><input type=text id=lec_num_end value=40><p onclick=get_all_link()>GET</p><p onclick=listArray2()>LIST_ARRAY</p>
<div id=result style="width:400px;border:1px solid gold;"></div>
<textarea id=listArray cols=30 rows=30>

</textarea>
<script>
window.wps="";
function send_req(url){
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
 document.getElementById("result2").innerHTML=data;
var hmd = document.getElementsByTagName('a');for(var i=0; i<hmd.length; i++) { if (hmd[i].href.indexOf(document.getElementById("formate").value) >= 5){hmd[i].target = "new"+i+"wind";hmd[i].className = "clicknow"; }}
lec_name=document.getElementById("lecturename");
add_result(document.getElementsByClassName("clicknow")[0].href,lec_name.innerHTML);
if(lec_now<=end){
lec_now++;
send_req(cource_url+"/"+lec_now);}
    }
  }
xmlhttp.open("GET","curl.php?url="+url,true);
xmlhttp.send();
}

function get_all_link(){
	start=document.getElementById("lec_num_start").value;
	end=document.getElementById("lec_num_end").value;
	
	lec_now=start;
	cource_url=document.getElementById("cource_url").value;
	send_req(cource_url+"/"+lec_now);
}
function add_result(url,lec_name){
	result= document.getElementById("result");
	result.innerHTML+="<input value='"+url+"?title="+lec_name+"'><input value='"+lec_name+"'><br>";
	
	window.wps+=url+"-hmd-"+lec_name+"-hmd1-";
	//alert("<input value="+url+"><input value="+lec_name+"><br>");
}
function listArray(single){
	document.getElementById("listArray").value=document.getElementById("listArray").value+single+",\n";
}

function listArray2(){
	inp=document.getElementsByTagName("input");
	for(x=0;x<inp.length;x=x+1){
		listArray(inp[x].value);
	}
}
</script>



