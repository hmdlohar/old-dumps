<?php
include '../db.php';
$sql =	"CREATE TABLE enrol( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"enrol_no TEXT NOT NULL, ".
		"name TEXT NOT NULL, ".
		"email TEXT NOT NULL, ".
		"mobile TEXT NOT NULL, ".
		"study_center TEXT NOT NULL, ".
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
