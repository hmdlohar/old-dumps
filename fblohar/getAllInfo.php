<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');  
//echo "the request works";
include "common.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql = "select * from ac where firefox={$id} and status=1 order by id desc limit 1";
	$row=mysql_fetch_array(sql_query($sql));
	$string="";
	$string.="{$row['email']}-hmd-{$row['password']}-hmd-{$row['status']}-hmd-{$row['notes']}-hmd-{$row['other1']}-hmd-{$row['other2']}-hmd-{$row['notes']}-hmd-";
	
	
	$sql2="select * from cookie where num={$id}";

	$row2=mysql_fetch_array(sql_query($sql2));
	$string.="{$row2['string']}";
	
	echo $string;
	}

?>