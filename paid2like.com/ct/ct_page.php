<?php
include '../files/db.php';
$sql = "CREATE TABLE page( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "name TEXT NOT NULL, ".
		"link TEXT NOT NULL, ".
		"hit TEXT NOT NULL, ".
		"points TEXT NOT NULL, ".
		"credits TEXT NOT NULL, ".
		"states TEXT NOT NULL, ".
		"date TEXT NOT NULL, ".
       "time TEXT NOT NULL, ".
		"userid TEXT NOT NULL, ".
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
