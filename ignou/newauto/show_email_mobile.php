<?php
echo "<table>";
include "common.php";
if(isset($_GET['start'])){
	$start=$_GET['start'];
}else{
	$start=1;
}

$retval=sql_query("select email,mobile from enrol LIMIT {$start} ,50");
while($row=mysql_fetch_array($retval)){
	
	echo "<tr><td><a href='https://mbasic.facebook.com/search/?query={$row['email']}'>{$row['email']}</a></td><td><a href='https://mbasic.facebook.com/search/?query={$row['mobile']}'>{$row['mobile']}</a></td></tr>";
}

$start2=$start+50;
$start0=$start-50;
echo "<a href=?start={$start0}>back</a>";
echo "<a href=?start={$start2}>Next</a>";
?>