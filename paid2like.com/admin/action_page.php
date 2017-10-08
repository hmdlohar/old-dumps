<?php
include '../files/var.php';
include '../checklogin.php';
include '../profile.php';
include '../files/db.php';
$action = $_GET['action'];

header("Location: {$url}/manage_page.php");

$pid = $_GET['pid'];
if ($action == 'pause'){
	$sql = "UPDATE page
		SET states='0'
		WHERE link='$pid'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql, $conn);
	}
if ($action == 'delete'){
	$sql_s = "SELECT * FROM page
		WHERE link='$pid'";
		mysql_select_db($dbname);
	$retval = mysql_query($sql_s, $conn);
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	$credits_page = $row['credits'];
	}
	$newcredits = $credits_page + $credits;
	echo $uname;
	$sql_u = "UPDATE user
		SET credits='$newcredits'
		WHERE uname='$uname'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql_u, $conn);
	$sql = "DELETE FROM page
		WHERE link='$pid'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql, $conn);
	}
if ($action == 'resume'){
	$sql = "UPDATE page
		SET states='1'
		WHERE link='$pid'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql, $conn);
	}
if ($action == 'add'){
	$sql = "UPDATE page
		SET states='1'
		WHERE link='$pid'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql, $conn);
	}

?>
