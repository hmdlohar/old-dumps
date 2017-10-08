<?php
include '../files/db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$link = $_POST['link'];
$hit = $_POST['hit'];
$other = $_POST['other'];
$count = $_POST['count'];
$table = $_POST['table'];

$sql = "UPDATE $table
	SET name=$name
	WHERE id=$id";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo "Entered data successfully";



?>
