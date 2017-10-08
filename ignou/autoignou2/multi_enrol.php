<?php
include "common.php";
function get_enrol($enrol){
$url="http://admission.ignou.ac.in/changeadmdata/admissionstatusnew.asp";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "EnrNo={$enrol}&program=MCA&Submit=submit");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(""));
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows CE 5.2; en-US; rv:1.9.2a1pre) Gecko/20090210 Fennec/0.11');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
return $server_output;
}
function curl_do($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "EnrNo=&program=MCA&Submit=submit");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(""));
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows CE 5.2; en-US; rv:1.9.2a1pre) Gecko/20090210 Fennec/0.11');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
return $server_output;
}
if(isset($_GET['enrol_mini'])){
$work_id=is_set("enrol_mini",1,"GET");
$retval=sql_query("select * from work where id={$work_id}");
$row=mysql_fetch_array($retval);
if($row['enrol_current']>=$row['enrol_start']&&$row['enrol_current']<=$row['enrol_end']){
$enrol_mini=$row['enrol_current'];
echo sql_query("update work set enrol_current=enrol_current+1 where id={$work_id}");
for($x=0;$x<=9;$x++){
	//echo "<iframe src=enrol.php?enrol={$enrol_mini}{$x}></iframe>";
	//echo curl_do("http://emwpa.ml/autoignou2/enrol.php?enrol={$enrol_mini}{$x}");
	$enrol="{$enrol_mini}{$x}";
include "enrol2.php";
	}
}
}

?>