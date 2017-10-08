<?php
include '../db.php';
$sql = "CREATE TABLE ph( ".
       "ph_id INT NOT NULL AUTO_INCREMENT, ".
       "ph_username TEXT NOT NULL, ".
	"ph_ph TEXT NOT NULL, ".
	"ph_date TEXT NOT NULL, ".
	"ph_frnds TEXT NOT NULL, ".
       "PRIMARY KEY ( ph_id )); ";
mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
