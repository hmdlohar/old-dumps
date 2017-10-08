<?php
header ('Location: index.php');
include '../db.php';
$ph_id = $_GET['ph_id'];
$frnds = $_GET['frnds'];
$sql = "UPDATE ph
	SET ph_frnds='$frnds'
	WHERE ph_id='$ph_id'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}



?>