<?php
include '../files/db.php';
$sql = "CREATE TABLE recharge( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "uname TEXT NOT NULL, ".
		"amount TEXT NOT NULL, ".
		"number TEXT NOT NULL, ".
		"sim TEXT NOT NULL, ".
		"state TEXT NOT NULL, ".
		"type TEXT NOT NULL, ".
		"states TEXT NOT NULL, ".
		"date TEXT NOT NULL, ".
		"time TEXT NOT NULL, ".
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
