<table>
<?php
include 'db2.php';
$sql = "SELECT * FROM ig ORDER BY id";
mysql_select_db($dbname);
$retval = mysql_query($sql,$conn);
while($row = mysql_fetch_array($retval)){
	
$enrol = $row['enrol'];
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];


echo "<tr><td>{$id}.{$name}</td><td>{$email}</td><td>{$mobile}</td></tr>";
	}

	echo "<hr>";


?>