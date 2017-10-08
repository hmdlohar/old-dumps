<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');  
//echo "the request works";
include "common.php";
if(isset($_GET['get_id'])){
	$id=$_GET['get_id'];
	$sql = "select email from ac where firefox={$id} and status=1 order by id desc limit 1";
	$row=mysql_fetch_array(sql_query($sql));
	//print_r($row);
	
	$str=explode("@",$row[0]);
	
	echo "{$row[0]}-hmd-{$str[0]}";
	}

?>