<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');  
//echo "the request works";
include 'db.php';
include "common.php";
if(isset($_GET['get_id'])){
	$id=$_GET['get_id'];
	$sql = "SELECT username,pass FROM log WHERE id='$id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$row=mysql_fetch_array($retval);
	//print_r($row);
	echo $row['username']."-hmd-";
	echo $row['pass'];
	}
if(isset($_GET['get_id2'])){
	$temp_id=$_GET['get_id2'];
	$retval=sql_query("select fbrc_id from cookie_id where id='$temp_id'");
	$rw=mysql_fetch_array($retval);
	$id=$rw[0];
	$sql = "SELECT username,pass FROM log WHERE id='$id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$row=mysql_fetch_array($retval);
	//print_r($row);
	echo $row['username']."-hmd-";
	echo $row['pass'];
	}
?>