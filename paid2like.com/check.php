<?php 
include 'files/var.php';
include 'files/db.php';
session_start();
include 'profile.php';
$page = $_GET['page'];
$points = $_GET['points'];
$points_to = $points +1;



$value = $other;
$date = date("d-m-Y");
$time = date("h-i");


	
	$valuenew = $credits + $points;
	$sql_443 = "SELECT * FROM page WHERE link='$page'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql_443, $conn);
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){$page_credits = $row['credits'];}
	
	$new_points = $page_credits - $points_to;
	
	$sql_442 = "UPDATE page SET credits='$new_points' WHERE link='$page'";
	mysql_select_db($dbname);
	mysql_query($sql_442, $conn);
	
	$sqlb = "UPDATE user SET credits='$valuenew' WHERE uname='$uname'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sqlb, $conn );
	if(! $retval )
	{
	die('Could not enter data: ' . mysql_error());
	}
	
	$sqll = "INSERT INTO log
				(action,user,points,date,time,link)
				VALUES
				('like','$uname','$points','$date','$time','$page')";
				mysql_select_db($dbname);
				$retvall = mysql_query($sqll, $conn);
				if(! $retval )
				{
				die('Could not enter data: ' . mysql_error());
				}
	echo $valuenew;



?>
