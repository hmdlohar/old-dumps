<?php
include '../files/db.php';
$sql = "CREATE TABLE obj( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"name TEXT NOT NULL, ".
		"menu_id TEXT NOT NULL, ".
		"link TEXT NOT NULL, ".
		"date TEXT NOT NULL, ".
		"time TEXT NOT NULL, ".
		"html TEXT NOT NULL, ".
		"multi_link TEXT NOT NULL, ".
		"u_link TEXT NOT NULL, ".
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
