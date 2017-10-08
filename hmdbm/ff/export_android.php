<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
include "common.php";
if(isset($_GET['export'])){
	$num =$_GET['export'];
	$retval=sql_query("select string from cookie where num='$num'");
	$row=mysql_fetch_array($retval);
	$rw= $row[0];
	while(strpos($rw,"}{")>0){
		$rw=str_replace("}{","},{",$rw);
		}
	//echo $rw;
	//print_r(json_decode($rw));
	$json=json_decode($rw);
	for($x=0;$x<sizeof($json);$x++){
		$jsonx=$json[$x];
		
		if($jsonx->secure=="TRUE"){$url="https://{$jsonx->host}";}else{$url="http://{$jsonx->host}";}
		$url=str_replace("//.","//",$url);
	
			//$dt= "<script>document.write(new Date({$jsonx->expire}).toGMTString());</script>";
		echo "{$url},{$jsonx->name}={$jsonx->value};Domain={$jsonx->host};Path={$jsonx->path};hmd-";

	}
	//Expires={$jsonx->expire};-
	//echo"asdfsdf";
}
?>
