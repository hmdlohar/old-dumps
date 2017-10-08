<?php
include "../common.php";
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
		$url="http://antarvasna1.com/";
		}	
get_enrol($url);

$perent=is_set("perent","notset","GET");
$id=is_set("id","no_id","GET");
$id=$id+1;
$retval=sql_query("select link,u_link from menu_test where id={$id}");
$row=mysql_fetch_array($retval);
$link2=str_replace("localhost","localhost/hmdsweb/curl/test1.php?url=http://antarvasna1.com",$row[0]);
$link3="{$link2}&perent={$row[1]}&id={$id}";
$id2=$id-1;
$link4="&perent={$perent}&id={$id2}";
echo $link3;
echo $perent;

echo "<script>
window.perent='{$perent}';
window.link3='{$link3}';
window.link4='{$link4}';
</script>";
?>
catList
catRow
<p id=result style="position:fixed;right:25px;top:20px;">result</p>

<script>
	
hmd=document.getElementsByClassName("entry-title");
for(x=0;x<hmd.length;x++){
	story_name=hmd[x].getElementsByTagName("a")[0].innerHTML;
	story_link=hmd[x].getElementsByTagName("a")[0].href;
	//result_add(story_name);
	//ajax1(story_name,story_link);
	}
next=is_inner("Next","a");
if(next>=0){
	np=document.getElementsByTagName("a")[next];
	np.href=np.href.replace("antarvasna1.com","localhost/hmdsweb/curl/antar.php?url=http://antarvasna1.com");
	document.getElementsByTagName("a")[next].click();
	}else{
		//document.location.assign(window.link3);
		}
//alert(window.perent);
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
xmlhttp.open("GET","antar2.php?story_title="+name+"&link="+link2,true);
xmlhttp.send();
//hmd=document.getElementsByClassName("catList")[0].getElementsByClassName("catRow")[0].getElementsByTagName("a");
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
</script>