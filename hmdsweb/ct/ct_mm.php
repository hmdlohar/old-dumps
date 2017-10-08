<?php
include '../files/db.php';
$sql = "CREATE TABLE mm( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"name TEXT NOT NULL, ".
		"link TEXT NOT NULL, ".
		"other1 TEXT NOT NULL, ".
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
