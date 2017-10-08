<?php
$message="hiiiiiiiiiiiiiiiiii";

$enrol = "147822303";

$post_data = "EnrNo={$enrol}&program=MCA&Submit=submit";
if(isset($_GET['url'])){
	$url=$_GET['url'];
	}else{$url="http://peperonity.com/go/people-search/1/in/-/-/-?act=0-9965274-1426142193_1637cdb02";}
if(isset($_GET['profile'])){
	$profile=$_GET['profile'];
	$url="http://peperonity.com/go/profile/3/{$profile}";
	}else{}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "EnrNo={$enrol}&program=MCA&Submit=submit");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: abTestRandom=0.8024906731076445; adq_site_cookie=21414255501425037336185; REMAIN_LOGIN=oLKZEazw62eygz5uxQwIaqYni0UhpMO5o+23ww13kXg=; PEPVIS=1425037336360.6179; PEPTS=pC2q4d9suG2vIreKEjHbrIxflPRTg0FuqCxVurLRqBg=; _ga=GA1.2.519280398.1425037337; JSESSIONID=B4F251CA641B979521258D2C260F8F0A.cdb02; _gat=1"));
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows CE 5.2; en-US; rv:1.9.2a1pre) Gecko/20090210 Fennec/0.11');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
echo $server_output;
curl_close ($ch);

// further processing ....
if ($server_output == "OK") { echo "sadfdsafdsaf"; } else { echo "hahaha"; }
?>
<script>

		document.onload=finda("Next part ►");
function setLocal(){
	a=document.getElementsByTagName('a');
	for(i=0;i<a.length;i++){
		url=a[i].href;
		a[i].href=a[i].href.replace("peperonity.com","localhost/ignou/pe/test2.php?url=http://peperonity.com");
		}	



}
function finda(text){
	var hmd = document.getElementsByTagName('a');
	for(i=0;i<hmd.length;i++) { 
		html = hmd[i].innerHTML;
	if(html == text){hmd[i].className = "clicknow";
	hmd[i].href=hmd[i].href.replace("peperonity.com","localhost/ignou/pe/test2.php?url=http://peperonity.com");
	var ret=1;
	break;
		}  else {ret=0;}
	
	}return ret;
}
var alla="";
a=document.getElementsByTagName('a');
for(i=0;i<a.length;i++){
	alla+=a[i].href+"hmd";
	}
allb=alla.split("hmd");
allc=new Array();
var alld="";
for(i=1;i<=61;i++){
	allc[i]=allb[i].substring(allb[i].length,35);
	}
for(i=1;i<=61;i++){
	alld+=allc[i]+"hmd";
	}
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
   window.enrol = xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","in_pepe.php?alld="+alld,true);
xmlhttp.send();
function clicknow(){
	document.getElementsByClassName('clicknow')[0].click();
	}
setTimeout("clicknow()",3000);
</script>