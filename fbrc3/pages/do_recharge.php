<?php
include '../files/ver.php';
header("Location: {$site}/?view=recharge&list=recharge&accepted=ture");
include '../files/db.php';
if(isset($_POST['mo_submit'])){
	$number=$_POST['mo_number'];
	$amount=$_POST['mo_amount'];
	$sim=$_POST['mo_sim'];
	$state=$_POST['mo_state'];
	$username=$_POST['mo_username'];
	$date = date("d-m-y");
	$time = date("h-t");
	$sql="INSERT INTO request (action,points,username,link,other,other2,date,time) VALUES ('recharge','$amount','$username','$number','$sim','$state','$date','$time')";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	
	$sql="UPDATE user SET money=money-$amount WHERE username='$username'";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	
	}

?>