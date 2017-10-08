<?php

$sql = "SELECT * FROM xxxpics
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

echo "<a href={$url}/xxxpics/view.php?page={$row['link']}><div class='next'>
<table> <tr>
<td>  <img src={$xxxsite}/$link/{$other}1.jpg width='100' height='125'>  </td>
<td>{$row['name']}</td></a>
</tr></table></div></a>";
}

?>
