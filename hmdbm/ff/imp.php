<?php
include "common.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
if(isset($_GET['bmno'])){
	$bmno=$_GET['bmno'];
	$retval=sql_query("select * from bbm where other='bbm' limit $bmno,1");
	$row=mysql_fetch_array($retval);
	echo json_encode($row);
}
if(isset($_GET['bmtotal'])){
	echo num_rows("bbm","other","bbm");
}
?>
