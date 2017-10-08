<?php
include 'db.php';
$sql = "CREATE TABLE bbm( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "title TEXT NOT NULL, ".
       "bid TEXT NOT NULL, ".
       "ind TEXT NOT NULL, ".
		"grp TEXT NOT NULL, ".
		"url TEXT NOT NULL, ".
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
