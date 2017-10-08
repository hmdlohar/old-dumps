<?php
include 'db.php';
include 'common.php';
if(isset($_GET['edit'])){
	$edit = $_GET['edit'];
	$id = $_GET['id'];
	$feild = $_GET['feild'];
	$value = $_GET['value'];
	$sql = "UPDATE $edit SET $feild='$value' where id='$id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
	echo "error";
	echo mysql_error();
		}
		else {
			echo $value;
			}
	}
if(isset($_GET['edit3'])){
	$edit = $_GET['edit3'];
	$id = $_GET['id'];
	$feild = $_GET['feild'];
	$value = $_GET['value'];
	$sql = "UPDATE $edit SET $feild='$value' where otherl='$id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
	echo "error";
	echo mysql_error();
		}
		else {
			echo $value;
			}
	}

if(isset($_GET['edit2'])){
	$edit = $_GET['edit2'];
	$id = $_GET['id'];
	$feild = $_GET['feild'];
	$value = $_GET['value'];
	$sql = "UPDATE $edit SET $feild='$value' where id='$id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
	echo mysql_error();
		}
		else {
			echo $value;
			}
	}

if(isset($_GET['del'])){
	$id=$_GET['del'];
	$sql="delete from ac where id=$id";
	echo sql_query($sql);
}
if(isset($_GET['move'])){
	$id = $_GET['move'];
	$newtab = $_GET['newtab'];
	$sql = "UPDATE ac SET firefox='$newtab' where id='$id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
	echo mysql_error();
		}
		else {
			echo $newtab;
			}
	}

if(isset($_GET['del'])){
	$id=$_GET['del'];
	$sql="delete from user where id=$id";
	echo sql_query($sql);
}


?>