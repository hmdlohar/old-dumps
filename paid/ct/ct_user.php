<?php
include '../files/db.php';
$sql =	"CREATE TABLE user( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"fname TEXT NOT NULL, ".
		"lname TEXT NOT NULL, ".
		"username TEXT NOT NULL, ".
		"password TEXT NOT NULL, ".
		"email TEXT NOT NULL, ".
		"country TEXT NOT NULL, ".
		"gender TEXT NOT NULL, ".
		"money FLOAT NOT NULL, ".
		"mobile TEXT NOT NULL, ".
		"fbid TEXT NOT NULL, ".
		"youtubeid TEXT NOT NULL, ".
		"tweeterid TEXT NOT NULL, ".
		"reg_date TEXT NOT NULL, ".
		"login_date TEXT NOT NULL, ".
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
