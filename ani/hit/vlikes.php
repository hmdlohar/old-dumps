<table>
<?php
$total = 0;
include '../files/db.php';
include '../files/ver.php';
include "../files/{$bernarx}";

$sql = "SELECT * FROM likes";

mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$name = $row['name'];
$link = $row['link'];
$hit = $row['hit'];
$other = $row['other'];
$total += $hit;

echo "<tr><td>{$name}</td><td>  {$hit}</td></tr>";
}


echo "Total = {$total}";

?>
</table>