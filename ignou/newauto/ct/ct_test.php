<?php
include '../db.php';
$sql =	"CREATE TABLE test( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"enrol TEXT NOT NULL, ".
		"name INT NOT NULL, ".
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
