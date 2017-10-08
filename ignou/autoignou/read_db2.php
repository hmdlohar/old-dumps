<?php
include 'db.php';
$sql = "SELECT * FROM ignou";
mysql_select_db($dbname);
$retval = mysql_query($sql,$conn);
while($row = mysql_fetch_array($retval)){
$name = $row['name'];
$enrol = $row['enrol'];
$en = $enrol - 147000000;
$mobile = $row['mobile'];
echo "BEGIN:VCARD<br>VERSION:3.0<br>N:{$en}-{$name};;;;<br>TEL;TYPE=CELL;TYPE=PREF:{$mobile}<br>	END:VCARD<br>";
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