<?php
include 'db.php';
$sql = "CREATE TABLE down( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "name TEXT NOT NULL, ".
		"status TEXT NOT NULL, ".
		"link TEXT NOT NULL, ".
       "date_in TEXT NOT NULL, ".
       "date_out TEXT NOT NULL, ".
       "comment1 TEXT NOT NULL, ".
       "comment2 TEXT NOT NULL, ".
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
