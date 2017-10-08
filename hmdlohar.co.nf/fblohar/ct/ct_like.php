<?php
include '../db.php';
$sql = "CREATE TABLE cook( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"tab TEXT NOT NULL, ".
		"username TEXT NOT NULL, ".
		"passowrd TEXT NOT NULL, ".
		"fbrcid TEXT NOT NULL, ".
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
