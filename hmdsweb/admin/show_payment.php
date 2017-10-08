<table>
<?php
include "../common.php";
$retval=sql_query("select * from ebook");
while($row=mysql_fetch_array($retval)){
	$email=$row['email'];
	$mobile_number=$row['mobile_number'];
	echo "<tr><td>{$email}</td><td>{$mobile_number}</td></tr>";
	}
?>