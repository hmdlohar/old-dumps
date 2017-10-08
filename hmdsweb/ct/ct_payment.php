<?php
include '../files/db.php';
$sql = "CREATE TABLE ebook( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"email TEXT NOT NULL, ".
		"mobile_number TEXT NOT NULL, ".
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
