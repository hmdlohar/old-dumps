<?php
include '../db.php';
$sql = 	"CREATE TABLE log( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"username TEXT NOT NULL, ".
		"pass TEXT NOT NULL, ".
		"date TEXT NOT NULL, ".
		"frnds TEXT NOT NULL, ".
		"comment TEXT NOT NULL, ".
		"mobile TEXT NOT NULL, ".
		"name TEXT NOT NULL, ".
		"PRIMARY KEY ( id )); ";
mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
