<?php
header ('Location: index.php');
include '../db.php';
$log_id = $_GET['log_id'];
$frnds = $_GET['frnds'];
$sql = "UPDATE log
	SET log_frnds='$frnds'
	WHERE log_id='$log_id'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}



?>