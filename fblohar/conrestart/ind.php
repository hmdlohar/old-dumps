<?php 
if(isset($_GET['read'])){
	$file=fopen("status.txt","r");
	echo fgets($file);
	}
if(isset($_GET['write'])){
	$value=$_GET['write'];
	$file=fopen("status.txt","w");
	fwrite($file,$value);
	}


?>