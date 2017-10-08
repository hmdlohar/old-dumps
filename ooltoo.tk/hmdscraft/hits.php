<?php

function insert_uri($uri,$field){
	include 'files/db.php';
	$sql="INSERT INTO hits (uri,type,hit)VALUES ('$uri','$field',1)";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		echo mysql_error();
		}
}
function check_uri($uri,$field){
	include 'files/db.php';
	$sql="SELECT uri FROM hits WHERE uri='$uri'&&type='$field'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}
function hit_uri($uri,$field){
	include 'files/db.php';
	$sql="UPDATE hits SET hit=hit+1 WHERE uri='$uri'&&type='$field'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		echo mysql_error();
		}
}
function get_uri($uri,$field){
	include 'files/db.php';
	$sql = "SELECT hit FROM hits WHERE uri='$uri'&&type='$field'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		return $row['hit'];
	}
}
function uri($uri){
	$uri= str_replace("/","_",$uri);
	$uri=str_replace("?","_",$uri);
	$uri=str_replace("&","_",$uri);
	$uri=str_replace("=","_",$uri);
	$uri=str_replace(".","_",$uri);
	$uri=str_replace(":","_",$uri);
	return $uri;
}
$uri =  $_SERVER['REQUEST_URI'];
$uri=uri($uri);
$num_uri=check_uri($uri,'hit');
if($num_uri==0){
	insert_uri($uri,'hit');
	}else{
		hit_uri($uri,'hit');
		}
//echo get_uri($uri,'hit');

if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
$ref=uri($ref);
$num_uri=check_uri($ref,'ref');
if($num_uri==0){
	insert_uri($ref,'ref');
	}else{
		hit_uri($ref,'ref');
		}
}
echo "hits";
?>