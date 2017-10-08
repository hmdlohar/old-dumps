<?php
include '../db.php';
$sql = "SELECT * FROM ignou ORDER BY enrol";
mysql_select_db($dbname);
$retval = mysql_query($sql, $conn);
//$row = mysql_fetch_array($retval)
//print_r($row['enrol']);

$result = array();
$result_id = array();
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
$enrol = $row['enrol'];
$result[] = $row['enrol'];
$result_id[] = $row['id'];
echo "$enrol <br>";
	}

	$matched = array();
$total = sizeof($result);
for ($i=1; $i< $total-1; $i++){
if ($result[$i] == $result[$i+1]){  echo "This Is same{$result_id[$i]}  :{$result[$i]} and {$result[$i+1]}<br>";

//$sqld = "DELETE FROM ignou WHERE id = $result_id[$i]"; mysql_select_db($dbname); $retval = mysql_query($sqld, $conn);
}

	}

?>