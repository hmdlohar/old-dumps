<?php
include 'common.php';
include 'db.php';
$sql="SELECT * FROM ph";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
while($row=mysql_fetch_array($retval)){
	$log_username=$row['ph_username'];
	$log_ph=$row['ph_ph'];
	//$log_date=$row['log_date'];
	//$log_frnds=$row['log_frnds'];
	in_mobile($log_username,$log_ph);
	echo $log_ph;
	
}
?>