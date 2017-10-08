<?php
include 'db.php';
if(isset($_GET['userid'])){
	$userid=$_GET['userid'];
	}else{$userid=424;}
	$next_user=$userid-1;
	$next_user2=$userid-2;



if(isset($_GET['url'])){
	$url=$_GET['url'];
	}else{$url="http://peperonity.com";}
if(isset($_GET['profile'])){
	$profile=$_GET['profile'];
	$url="http://peperonity.com/go/profile/3/{$profile}";
	}else{}
if(isset($_GET['userid'])){
	$userid=$_GET['userid'];
	$sql="SELECT userid FROM pepe WHERE id=$userid";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		global $profile;
		$profile=$row['userid'];
		}
	$url="http://peperonity.com/go/profile/3/{$profile}";
	}else{}
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "EnrNo=&program=MCA&Submit=submit");
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
var next_userid="<?php echo $next_user; ?>";
var next_userid2="<?php echo $next_user2; ?>";
var message="hiiiiiiiiiiiiiii";
var alld="anitaji1hmdtamil58hmdmohitmohit4hmdmr.fantasy0hmdmuslim.comhmdnickson.charles0hmdsai.ram.22hmdrajeevkumar46hmdissufo6hmdananthan1032hmdkumarsunny775hmdsticky.ratz0hmds.senthilnathan0hmdhotgrl6hmdruban19870hmdsindhupatilhmdshoukat4hmdsupersonic11hmdrahul4317hmdnarendra7789hmduma.kalyan0hmdshubham7959hmdmrs.henahmdqwertyuiopazhmdnkx640000hmdjudith64hmdbear.khan9hmddashy11147hmdramesh308hmdromen.arun.0070hmdbsiva1651hmdnav221hmdanto350hmdjanakidevi2hmddaham14hmdrahul25101990hmdhulk.smah0hmddjrk98.comhmdpasv.dornichmdsunshinerajhmdtusar1979hmdmynarmadhanhmdsanthosh143121hmdayyaan.shaikh0hmdsexy.ladka.hu0hmdnagnath150hmdbunny.mehmdsabri14101hmdashiq.kerala.70hmdsampath4939hmdprathmesh123hmdpinki577hmdneedrapenowhmdsirf.tum.10hmdmansi349hmdselvam7832hmdroyalteacherhmdranjit503hmdjoseph.rahman59hmdrajveer8866hmdanand7666130hmd";
	document.onload=setLocal();
function setLocal(){
	a=document.getElementsByTagName('a');
	for(i=0;i<a.length;i++){
		url=a[i].href;
		//a[i].href=a[i].href.replace("peperonity.com","localhost/ignou/pe/test.php?url=http://www.peperonity.com");
		a[i].href=a[i].href.replace("http://peperonity.com/go/profile/3/","test.php?profile=");
		}	
if(finda("Offer friendship")==1){ document.getElementsByClassName('clicknow')[0].click();}
if(finda("Yes")==1){ document.getElementsByClassName('clicknow')[0].click();}
if(finda("Write a message")==1){ document.getElementsByClassName('clicknow')[0].click();}
if(finddiv("Message*:")==1){ var hmd = document.getElementsByTagName('input')[1].value="http://www.anisha778.tk watch daily new HOT & SEXY Girls Photos. and also nude and naked girls photos. album visit now : http://www.anisha778.tk"; 
document.getElementsByTagName('input')[2].click();
document.cookie="uidnow="+next_userid2;
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


}
function finda(text){
	var hmd = document.getElementsByTagName('a');
	for(i=0;i<hmd.length;i++) { 
		html = hmd[i].innerHTML;
	if(html == text){hmd[i].className = "clicknow";
	var ret=1;
	break;
		}  else {ret=0;}
	
	}return ret;
}
function finddiv(text){
	var hmd = document.getElementsByTagName('div');
	for(i=0;i<hmd.length;i++) { 
		html = hmd[i].innerHTML;
	if(html == text){hmd[i].className = "clicknow";
	var ret=1;
	break;
		}  else {ret=0;}
	
	}return ret;
}

</script>