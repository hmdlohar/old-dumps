<?php
include 'db.php';
if(isset($_GET['edit'])){
	$db_id=$_GET['db_id'];
	$feild_id=$_GET['feild_id'];
	$value=$_GET['value'];
	$sql="UPDATE down SET $feild_id='$value' WHERE id=$db_id";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "Sucessful";}
}
if(isset($_GET['del'])){
	$db_id=$_GET['db_id'];

	$sql="DELETE FROM down WHERE id=$db_id";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "Sucessful";}
}
if(isset($_GET['done'])){

	$db_id=$_GET['db_id'];
	$sql="UPDATE down SET status=1 WHERE id=$db_id";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "Sucessful";}
}
?>