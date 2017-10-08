<?php
include "../common.php";
if(isset($_GET['edit_pics'])){
	$feild=$_GET['edit_pics'];
	$id=$_GET['id'];
	$value=$_GET['value'];
	$sql="update pics set $feild='$value' where id=$id";
	$retval=sql_query($sql);
	echo $retval;
}
if(isset($_GET['del_pics'])){
	$id=$_GET['del_pics'];
	$sql="delete from pics where id=$id";
	$retval=sql_query($sql);
	echo $retval;
}
if(isset($_GET['hit_reset'])){
	$uri=$_GET['hit_reset'];
	$type=$_GET['hit_reset_type'];
	$sql="update hits set hit=0 where uri='$uri'&&type='$type'";
	echo sql_query($sql);
}
if(isset($_GET['hit_reset_all'])){
	$uri=$_GET['hit_reset_all'];
	//$type=$_GET['hit_reset_type'];
	$sql="delete from hits";
	echo sql_query($sql);
}
if(isset($_GET['all_same'])){
	$uri=$_GET['all_same'];
	//$type=$_GET['hit_reset_type'];
	$sql="update pics set userid=5";
	echo sql_query($sql);
}
if(isset($_GET['delete_uri'])){
	$uri=$_GET['delete_uri'];
	//$type=$_GET['hit_reset_type'];
	$sql="delete from hits where uri='$uri'";
	echo sql_query($sql);
}

?>