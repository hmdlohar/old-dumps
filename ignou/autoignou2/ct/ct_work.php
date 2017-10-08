<?php
include '../db.php';
$sql =	"CREATE TABLE work( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"file TEXT NOT NULL, ".
		"hits INT NOT NULL, ".
		"enrol_start TEXT NOT NULL, ".
		"enrol_end TEXT NOT NULL, ".
		"enrol_current TEXT NOT NULL, ".
		"other TEXT NOT NULL, ".
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
