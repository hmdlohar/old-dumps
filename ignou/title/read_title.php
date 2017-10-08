<table>
<?php
include '../db.php';
$sql = "SELECT * FROM title";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
while($row=mysql_fetch_array($retval)){
	$num=$row['num'];
	$title=$row['title'];
	echo "<tr><td><a href=http://www.ignou.ac.in/ignou/bulletinboard/announcements/latest/detail/{$num} target=new{$num}>go</a>{$num}</td><td>{$title}</td></tr>";
	}

?>