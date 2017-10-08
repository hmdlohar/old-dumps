<?php
include '../db.php';
if(isset($_GET['num'])){
	$num=$_GET['num'];
	$title=$_GET['title'];
$sql = "INSERT INTO title (num,title) VALUES ('$num','$title')";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
if(!$retval){echo mysql_error();} else {echo "enterd";}
}

?>