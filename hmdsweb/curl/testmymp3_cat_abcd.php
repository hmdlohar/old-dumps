<?php

function get_enrol($url){
$cSession = curl_init();

$post_data = "";
//step2
curl_setopt($cSession,CURLOPT_URL,$url);
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
curl_setopt($cSession,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 4.4.2; Nexus 4 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.114 Mobile Safari/537.36');
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

echo $result;
return $result;
}
if(isset($_GET['url'])){
	$url=$_GET['url'];
	}else{
		$url="http://www.mymp3song.com/categorylist/13/z/default/1";
		}	
get_enrol($url);
?>
catList
catRow
<p id=result style="position:fixed;right:25px;top:20px;">result</p>
<script>
	
hmd=document.getElementsByClassName("catRow");
for(x=0;x<hmd.length;x++){
	name=hmd[x].getElementsByTagName("a")[0].innerHTML;
	link2=hmd[x].getElementsByTagName("a")[0].href
	ajax1(name,link2);
	}
next=is_inner("Next","a");
if(next>=0){
	np=document.getElementsByTagName("a")[next];
	np.href=np.href.replace("localhost","localhost/hmdsweb/curl/test1.php?url=http://www.mymp3song.com");
	document.getElementsByTagName("a")[next].click();
	
	}
function result_add(text){
	document.getElementById("result").innerHTML=document.getElementById("result").innerHTML+"<br>"+text;
}

function ajax1(name,link2){
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
		
    
   data = xmlhttp.responseText;
result_add(data);
    }
  }
xmlhttp.open("GET","test2.php?movie="+name+"&link="+link2+"&perent=bollymovie",true);
xmlhttp.send();
//hmd=document.getElementsByClassName("catList")[0].getElementsByClassName("catRow")[0].getElementsByTagName("a");
}
function is_inner(inner,tag){
	hmd=document.getElementsByTagName(tag);
	hmd2=-1;
	for(x=0;x<hmd.length;x++){
		if(hmd[x].innerHTML.indexOf(inner)>=0){
			hmd2=x;
			break;
			}
	}
	return hmd2;
}
</script>