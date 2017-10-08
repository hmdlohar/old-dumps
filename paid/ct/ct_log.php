<?php
include '../files/db.php';
$sql =	"CREATE TABLE log( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"action TEXT NOT NULL, ".
		"username TEXT NOT NULL, ".
		"link TEXT NOT NULL, ".
		"points TEXT NOT NULL, ".
		"date TEXT NOT NULL, ".
		"time TEXT NOT NULL, ".
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
