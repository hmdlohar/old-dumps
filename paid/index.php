<?php
include 'head.php';
include 'left.php';
?>
<div id=center>
<?php

$sql = "SELECT * FROM list where link='$list'";
mysql_select_db($dbname);
$retval = mysql_query($sql,$conn);
while($row = mysql_fetch_array($retval)){
	$name = $row['name'];
	$link = $row['link'];
	$mm = $row['mm'];
	$hit = $row['hit'];
	
	}
include "pages/{$list}.php";
?>
</div>
<?php
include 'foot.php';
?>



