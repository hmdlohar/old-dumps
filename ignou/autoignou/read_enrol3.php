<?php
include 'db.php';
$sql = "SELECT * FROM enrol3 ORDER BY number";
mysql_select_db($dbname);
$retval = mysql_query($sql,$conn);
while($row = mysql_fetch_array($retval)){
$link = $row['link'];
$enrol = $row['number'];


echo "enrol:{$enrol}<br>";
	}

	echo "<hr>";
$sql = "SELECT * FROM record";
mysql_select_db($dbname);
$retval = mysql_query($sql,$conn);
while($row = mysql_fetch_array($retval)){
$number = $row['number'];
$id = $row['id'];
//echo "{$id}=={$number}<br>";
}

?>