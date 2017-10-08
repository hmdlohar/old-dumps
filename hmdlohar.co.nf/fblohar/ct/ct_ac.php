<?php
include '../db.php';
$sql = "create table ac(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
email text not null,
password text not null,
status text not null,
chrome text not null,
firefox text not null,
chr text not null,
notes text not null,
other1 text not null,
other2 text not null,
other3 text not null,
otherl text not null);";


mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
