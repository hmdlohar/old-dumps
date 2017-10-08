<?php
include "common.php";
if(isset($_GET['file'])){
	$file=$_GET['file'];
}else{$file=0;}
$enrol=file_get($file);
$data=get_enrol($enrol);

if(strlen($data)>3000){echo "big";
$data2=mysql_real_escape_string($data);
$date=date("ymd");
$time=date("His");
sql_query("insert into enrol(number,date,time,data) values ($enrol,'$date',$time,'$data2')");
$enrol_next=$enrol+(10-($enrol % 10));
file_post($file,$enrol_next);
} else {echo "small";
$enrol_next=$enrol+1;
file_post($file,$enrol_next);
}
echo strlen($data);
?>