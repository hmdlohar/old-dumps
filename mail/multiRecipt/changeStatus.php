<?php 
if(isset($_GET['emailNum'])){
	$emailNum=$_GET['emailNum'];
}else{
	$emailNum="1";
}
if(isset($_GET['status'])){
	$status=(int)$_GET['status'];
}else{
	$status="1";
}
$datelast=date("ymdhis");
include "common.php";
$sql=sql_query("update `TABLE 1` set status={$status},datelast={$datelast} where email='{$emailNum}'");



?>