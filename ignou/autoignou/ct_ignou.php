<?php
include 'db.php';
$sql =	"CREATE TABLE ignou( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"name TEXT NOT NULL, ".
		"enrol INT NOT NULL, ".
		"dob TEXT NOT NULL, ".
		"adderss TEXT NOT NULL, ".
		"reg_center TEXT NOT NULL, ".
		"study_center TEXT NOT NULL, ".
		"mobile TEXT NOT NULL, ".
		"email TEXT NOT NULL, ".
		"subject TEXT NOT NULL, ".
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
