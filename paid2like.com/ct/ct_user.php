<?php
include '../files/db.php';
$sql = "CREATE TABLE user( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "fname TEXT NOT NULL, ".
		"lname TEXT NOT NULL, ".
		"uname TEXT NOT NULL, ".
		"pass TEXT NOT NULL, ".
		"email TEXT NOT NULL, ".
		"country TEXT NOT NULL, ".
		"gender TEXT NOT NULL, ".
		"active TEXT NOT NULL, ".
		"date TEXT NOT NULL, ".
       "time TEXT NOT NULL, ".
		"credits TEXT NOT NULL, ".
		"fbid TEXT NOT NULL, ".
		"other TEXT NOT NULL, ".
		"money TEXT NOT NULL, ".
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
