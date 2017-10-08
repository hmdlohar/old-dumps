<?php
include "../common.php";
function get_url($num_id){
	$retval=sql_query2("select link from antar where id=$num_id");
	$row=mysql_fetch_array($retval);
	return $row[0];
}

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
		$url="http://antarvasna1.com/पड़ोसन-भाभी-की-चूत-भाग-2/";
		}	
if(isset($_GET['num_id'])){
	$num_id=$_GET['num_id'];
	$num_id2=$_GET['num_id']+1;
	$url=get_url($_GET['num_id']);
	echo $url;
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
window.num_id='{$num_id}';
window.num_id2='{$num_id2}';
window.link3='{$link3}';
window.link4='{$link4}';
</script>";
?>
catList
catRow
<p id=result style="position:fixed;right:25px;top:20px;">result</p>
<form action=antar2.php method=POST target=news>
<input type=id name=num_id value=<?php echo $num_id; ?>>
<textarea id=story name=data ></textarea>
<input type=submit name=full_story id=submit_story>
</form>
<script>
	
hmd=document.getElementsByTagName("p");
pid=0;
for(x=0;x<hmd.length;x++){if(hmd[x].className=="comment-notes"){pid=x; break;}}
full_story="";
for(x=0;x<pid-1;x++){
	if(x==0){
		hmd[x].innerHTML=hmd[x].innerHTML.replace('<a title="antarvasna" href="http://antarvasna1.com/antarvasna/antarvasna/">antarvasna</a> antarvassna Indian Sex <a title="Kamukta " href="http://antarvasna1.com/kamukta/">Kamukta </a>Chudai Hindi Sex','');
		}
	full_story+="<p>"+hmd[x].innerHTML+"</p>";
	}
	//ajax1(full_story,num_id);
	document.getElementById("story").innerHTML=full_story;
	document.getElementById("submit_story").click();
	document.location.assign("http://localhost/hmdsweb/curl/antar4.php?num_id="+window.num_id2);
next=is_inner("Next","a");
if(next>=0){
	np=document.getElementsByTagName("a")[next];
	np.href=np.href.replace("antarvasna1.com","localhost/hmdsweb/curl/antar.php?url=http://antarvasna1.com");
	//document.getElementsByTagName("a")[next].click();
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

xmlhttp.open("POST","antar2.php?full_story="+link2+"&num_id="+link2,true);
xmlhttp.send("story=21");
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