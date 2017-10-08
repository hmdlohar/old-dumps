<?php
include 'db.php';
$sql = "create table user(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
username text,
name text,
email text,
mobile int,
datejoin int,
datelogin int,
totalmatch int,
status int,
paid int,
lastsync int,
deviceId text,
expiredate int,
other1 text,
other2 text,
other3 text
);";


mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
