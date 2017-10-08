

<?php
include '../files/db.php';
include '../common.php';
if(isset($_GET['opedit'])){
	$field=$_GET['field'];
	$id=$_GET['id'];
	$value=$_GET['value'];
	$sql="UPDATE user SET $field='$value' WHERE id=$id";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "Edited";}
}
if(isset($_GET['opdel'])){
	//$field=$_GET['field'];
	$id=$_GET['id'];
	//$value=$_GET['value'];
	$sql="DELETE FROM user WHERE id=$id";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "DELETED";}
}
if(isset($_GET['hitreset'])){
	//$field=$_GET['field'];
	$id=$_GET['id'];
	//$value=$_GET['value'];
	$sql="UPDATE hits SET hit=0 WHERE id=$id";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "RESETED";}
}
if(isset($_GET['resetall'])){
	//$field=$_GET['field'];
	//$id=$_GET['id'];
	//$value=$_GET['value'];
	$sql="UPDATE hits SET hit=0";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "RESETED ALL";}
}
?>