<?php
include 'db.php';
$sql =	"CREATE TABLE enrol3( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"number TEXT NOT NULL, ".
		"hit INT NOT NULL, ".
		"link TEXT NOT NULL, ".
		"mm TEXT NOT NULL, ".
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