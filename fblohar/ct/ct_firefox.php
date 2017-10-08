<?php
include '../db.php';
$sql = "create table firefox(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,";
for($x=1;$x<=40;$x++){
	$sql.="tab{$x} TEXT NOT NULL,";
	}
$sql.="otherl text not null);";


mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
