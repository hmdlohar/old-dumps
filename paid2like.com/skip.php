<?php
session_start();
include 'profile.php';
$page = $_GET['page'];
$points = $_GET['points'];
$date = date("d-m-Y");
$time = date("h-i");
$sql_446 = "INSERT INTO log
				(action,user,points,date,time,link)
				VALUES
				('skip','$uname','$points','$date','$time','$page')";
				mysql_select_db($dbname);
				$retvall = mysql_query($sql_446, $conn);
				if(! $retval )
				{
				die('Could not enter data: ' . mysql_error());
				}
				

?>
