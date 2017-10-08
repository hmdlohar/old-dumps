<?php
$sql_get = "SELECT * FROM hits WHERE link='$hit_page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql_get, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	$hit = $row['hit'];
	$name = $row['name'];
	$link = $row['link'];
}
$set_hit = $hit+1;
$sql_update = "UPDATE hits SET hit='$set_hit' WHERE link='$hit_page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql_update, $conn );
?>
