<table>
<?php
$total = 0;
include '../files/db.php';
$sql_get = "SELECT * FROM hits";
mysql_select_db($dbname);
$retval = mysql_query( $sql_get, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	$hit = $row['hit'];
	$name = $row['name'];
	$link = $row['link'];
	$total += $hit;
	echo "<tr><td>{$name}</td><td>  {$hit}</td></tr>";
}
echo "</table><br>";
include 'vpics.php';
echo "<br> vxxpicsd<br>";
include 'vxxxpics.php';
echo "<br> vlikes<br>";
include 'vlikes.php';

?>

