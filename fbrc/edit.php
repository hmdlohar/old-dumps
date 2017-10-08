<?php
include "common.php";
if(isset($_GET['edit'])){
	$edit = $_GET['edit'];
	$id = $_GET['id'];
	$feild = $_GET['feild'];
	$value = $_GET['value'];
	$sql = "UPDATE $edit SET $feild='$value' where id='$id'";

	
	$retval =sql_query($sql);
	if(!$retval){
	echo "error";
	echo mysql_error();
		}
		else {
			echo $value;
			}
	}
if(isset($_GET['edit_comment'])){
	$value = $_GET['value'];
	$id = $_GET['edit_comment'];
	sql_query("UPDATE log SET comment='{$value}' where id='{$id}'");
		}



?>