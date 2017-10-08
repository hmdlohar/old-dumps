<?php
include "common.php";
if(isset($_GET["change_status"])){
	$status_id=$_GET["change_status"];
	$status=$_GET["status"];
	echo sql_query("update cookie_id set status={$status} where id='{$status_id}'");
	
}



?>