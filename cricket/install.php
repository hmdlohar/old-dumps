<?php
include 'files/db.php';
include 'common.php';
$sql = "create table log(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
matchId int not null,
playerBat int not null,
playerBat2 int not null,
playerBall int not null,
teamBat int not null,
teamBall int not null,
ballno int not null,
batsmanRun int not null,
teamRun int ,
noball int ,
wiedball int not null,
wicket int not null,
wicketType int not null,
over int not null,
other1 int not null,
other2 int not null
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
