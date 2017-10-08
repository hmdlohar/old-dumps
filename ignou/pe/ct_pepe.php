<?php
include 'db.php';
$sql =	"CREATE TABLE pepe( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"userid TEXT NOT NULL, ".
		"other TEXT NOT NULL, ".
		"other2 TEXT NOT NULL, ".
		"other3 TEXT NOT NULL, ".
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
