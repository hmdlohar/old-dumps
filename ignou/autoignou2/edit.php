
<?php


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
	$sql="delete from work where id=$id";
	echo sql_query($sql);
}


?>