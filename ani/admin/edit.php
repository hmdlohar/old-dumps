




<?php

include '../files/db.php';
if (isset($_GET['id'],$_GET['table'])) {
$id = $_GET['id'];
$table = $_GET['table'];


$sql = "SELECT *
	FROM $table
	WHERE id=$id";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$id = $row['id'];
$name = $row['name'];
$link = $row['link'];
$hit = $row['hit'];
$other = $row['other'];
$count = $row['count'];

echo "
<html>
<form action=editp.php method='post'>
ID:-<input type=text name=id value={$id}><br>
Name:-<input type=text name=name value={$name}><br>
Link:-<input type=text name=link value={$link}><br>
Other:-<input type=text name=other value={$other}><br>
Count:-<input type=text name=count value={$count}><br>
hit:-<input type=text name=hit value={$hit}><br>
<input type=hidden name=table value={$table}>

<input type=submit>";
}
}
?>




