<?php

include '../files/db.php';
include '../files/ver.php';

$id = $_POST['id'];
$count = base64_encode($_POST['count']);

$sql = "UPDATE likes
	SET count='$count'
	WHERE id='$id'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo "Entered data successfully";
header ("Location: likes.php?link=$id");
?>
