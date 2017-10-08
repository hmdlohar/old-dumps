<?php

$enrol = "147822303";

$post_data = "EnrNo={$enrol}&program=MCA&Submit=submit";
if(isset($_GET['url'])){
	$url=$_GET['url'];
	}else{$url="http://peperonity.com";}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "EnrNo={$enrol}&program=MCA&Submit=submit");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: abTestRandom=0.8024906731076445; adq_site_cookie=21414255501425037336185; REMAIN_LOGIN=oLKZEazw62eygz5uxQwIaqYni0UhpMO5o+23ww13kXg=; PEPVIS=1425037336360.6179; PEPTS=pC2q4d9suG2vIreKEjHbrIxflPRTg0FuqCxVurLRqBg=; _ga=GA1.2.519280398.1425037337; JSESSIONID=C6E395357ABCA26C88F1765841AEDF80.cdb04; _gat=1"));
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows CE 5.2; en-US; rv:1.9.2a1pre) Gecko/20090210 Fennec/0.11');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
echo $server_output;
curl_close ($ch);

// further processing ....
if ($server_output == "OK") { echo "sadfdsafdsaf"; } else { echo "hahaha"; }
?>
<script>
	document.onload=setLocal();
function setLocal(){
	a=document.getElementsByTagName('a');
	for(i=0;i<=a.length;i++){
		url=a[i].href;
		a[i].href=a[i].href.replace("peperonity.com","localhost/ignou/autoignou/test.php?url="+url);
		}	
}
</script>