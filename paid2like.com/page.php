<?php
include 'files/db.php';
session_start();
include 'profile.php';
$page = $_GET['link'];
$ch = curl_init("http://graph.facebook.com/$page");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->likes;

$sqlb = "UPDATE user SET other='$nowlikes' WHERE uname='$uname'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sqlb, $conn );
	if(! $retval )
	{
	die('Could not enter data: ' . mysql_error());
	}


header("Location: http://mbasic.facebook.com/{$page}");
$page = "page";
$sql_hitg = "SELECT * FROM hits WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitg,$conn);
while($row = mysql_fetch_array($retval)){
	$old_hit = $row['hit'];
	}
$new_hit = $old_hit+1;
$sql_hitp = "UPDATE hits SET hit='$new_hit' WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitp,$conn);
?>
