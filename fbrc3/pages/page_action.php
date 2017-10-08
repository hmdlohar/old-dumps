<?php
$usernow = $_COOKIE['userLoged'];
include '../files/db.php';
include '../common.php';

if(isset($_GET['action'])){
	$action=$_GET['action'];
	$type=$_GET['type'];
	$link_id=$_GET['link_id'];
	if($action=="pause"){
		$sql="UPDATE pages SET states=0 WHERE link_id='$link_id'&&type='$type'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql,$conn);
		if(!$retval){
			echo mysql_error();
		}else{echo "sucess";}
	
	}
		
		if($action=="resume"){
		$sql="UPDATE pages SET states=1 WHERE link_id='$link_id'&&type='$type'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql,$conn);
		if(!$retval){
			echo mysql_error();
		}else{echo "sucess";}
		}
		if($action=="remove"){
		$sql="DELETE FROM pages WHERE link_id='$link_id'&&type='$type'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql,$conn);
		if(!$retval){
			echo mysql_error();
		}else{echo "sucess";}
		}
}
?>