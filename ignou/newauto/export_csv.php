<?php
echo "<table>";
include "common.php";
$retval=sql_query("select name,email,mobile from enrol LIMIT 2000");
while($row=mysql_fetch_array($retval)){
	
	echo ",{$row['name']},,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,{$row['mobile']},,,,,,,,,,{$row['email']},,,,,,,,<br>";
}

$start2=$start+50;
$start0=$start-50;
echo "<a href=?start={$start0}>back</a>";
echo "<a href=?start={$start2}>Next</a>";
?>