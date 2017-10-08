<style>
#left {
	float:left;
	width:300px;
	border:0px solid blue;
	}
</style>
<div id=left>
	<table>
<?php
include '../files/db.php';
$sql_hitg = "SELECT * FROM mm";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitg,$conn);
while($row = mysql_fetch_array($retval)){
	$hit = $row['hit'];
	$name = $row['name'];
	echo "<tr><td>{$name}</td><td>{$hit}</td></tr>";
	}
?>
</table>
</div>
<div id=left>
	<table>
<?php
include '../files/db.php';
$sql_hitg = "SELECT * FROM hits";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitg,$conn);
while($row = mysql_fetch_array($retval)){
	$hit = $row['hit'];
	$name = $row['name'];
	echo "<tr><td>{$name}</td><td>{$hit}</td></tr>";
	}
?>
</table>
</div>