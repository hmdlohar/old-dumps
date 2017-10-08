<?php
header("Access-Control-Allow-Origin: *");
if(isset($_GET["set"])){
	$file=fopen("status.txt","w+");
	fwrite($file,$_GET["set"]);
}
if(!isset($_COOKIE["likeStatus"])){
	setcookie("likeStatus","0");
}
$file=fopen("status.txt","r+");
echo fgets($file);
?>