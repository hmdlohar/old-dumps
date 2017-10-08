<?php
include 'db2.php';
$sql =	"CREATE TABLE ig( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"enrol TEXT NOT NULL, ".
		"add_year TEXT NOT NULL, ".
		"till_year TEXT NOT NULL, ".
		"birth TEXT NOT NULL, ".
		"adderss TEXT NOT NULL, ".
		"cource TEXT NOT NULL, ".
		"study_center TEXT NOT NULL, ".
		"regnal TEXT NOT NULL, ".
		"father TEXT NOT NULL, ".
		"mobile TEXT NOT NULL, ".
		"email TEXT NOT NULL, ".
		"name TEXT NOT NULL, ".
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
