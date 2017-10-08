<?php
include 'db.php';
if (isset($_GET['record'])) {
$enrol = $_GET['record'];


$sql = 	"INSERT INTO record
		(number)
		VALUES
		('$enrol')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}


?>