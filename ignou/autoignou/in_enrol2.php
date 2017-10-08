<?php
include 'db.php';


if (isset($_GET['enrol'])) {
$enrol = $_GET['enrol'];


$sql = 	"INSERT INTO enrol
		(link)
		VALUES
		('$data')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}


?>