<?php
include '../files/db.php';
$sql = "CREATE TABLE menu_test( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"name TEXT NOT NULL, ".
		"perent TEXT NOT NULL, ".
		"link TEXT NOT NULL, ".
		"date TEXT NOT NULL, ".
		"time TEXT NOT NULL, ".
		"other0 TEXT NOT NULL, ".
		"other1 TEXT NOT NULL, ".
		"other2 TEXT NOT NULL, ".
		"other3 TEXT NOT NULL, ".
		"other4 TEXT NOT NULL, ".
		"other5 TEXT NOT NULL, ".
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
