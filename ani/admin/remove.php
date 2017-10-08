<?php
include '../files/db.php';
$id = $_GET['id'];
$table = $_GET['table'];

$sql = "DELETE FROM $table
	WHERE id=$id";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo "Entered data successfully";


?>
