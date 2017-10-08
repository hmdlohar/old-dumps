<?php
include '../files/db.php';

$sql = "SELECT * FROM pics
	ORDER BY id DESC 
	LIMIT 3";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$name = $row['name'];
$link = $row['link'];
$hit = $row['hit'];
$other = $row['other'];

echo "<a href={$url}/pics/view.php?page={$row['link']}><div class='next'>
<table> <tr>
<td>  <img src={$site}/$link/{$other}1.jpg  height='125' width='100'>  </td>
<td>{$row['name']}</td>
</tr></table></div></a>";
}

?>
