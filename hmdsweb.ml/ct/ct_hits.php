<?php
include '../files/db.php';
$sql =	"CREATE TABLE hits( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"uri TEXT NOT NULL, ".
		"hit TEXT NOT NULL, ".
		"type TEXT NOT NULL, ".
		"other TEXT NOT NULL, ".
		"other2 TEXT NOT NULL, ".
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
