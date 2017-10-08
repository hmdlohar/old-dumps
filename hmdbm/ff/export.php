<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
include "common.php";
if(isset($_POST['export'])){
	$num =$_POST['export'];
	$retval=sql_query("select string from cookie where num='$num'");
	$row=mysql_fetch_array($retval);
	$rw= $row[0];
	while(strpos($rw,"}{")>0){
		$rw=str_replace("}{","},{",$rw);
		}
	echo $rw;
}

?>

