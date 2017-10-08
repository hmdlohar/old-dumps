<?php
include '../files/var.php';
session_start();
include '../profile.php';

if (isset($_POST['convert'])) {
	$get_credits = $_POST['credits'];
	$get_new = $credits - $get_credits;
	$con_rupis = $get_credits/50;
	$con_new = $money + $con_rupis;
	if ($get_new >= 0) {
		header("Location: {$url}/recharge.php?states=con_sucess");
	$sql_get = "UPDATE user
				SET credits='$get_new'
				WHERE uname='$uname'";
				mysql_select_db($dbname);
				mysql_query($sql_get, $conn);
	$sql_con = "UPDATE user
				SET money='$con_new'
				WHERE uname='$uname'";
				mysql_select_db($dbname);
				mysql_query($sql_con, $conn);
	
	}
	else{
		header("Location: {$url}/recharge.php?states=447");
		}
	}
?>
