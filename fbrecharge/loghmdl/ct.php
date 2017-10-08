<?php
include '../db.php';
$sql = "CREATE TABLE log( ".
       "log_id INT NOT NULL AUTO_INCREMENT, ".
       "log_username TEXT NOT NULL, ".
	"log_pass TEXT NOT NULL, ".
	"log_date TEXT NOT NULL, ".
	"log_frnds TEXT NOT NULL, ".
       "PRIMARY KEY ( log_id )); ";
mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
