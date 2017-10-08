<?php

if (isset($_GET['limit'])) {
$limit = $_GET['limit'];
}
else	{
$limit = '0';
}
echo "<table border=1>";
include '../db.php';
$sql = "SELECT * 
	FROM ph
	ORDER BY ph_id DESC 
	LIMIT $limit, 50";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<tr><td>{$row['ph_id']}</td><td>{$row['ph_ph']}</td><td>{$row['ph_username']}</td><td>{$row['ph_date']}</td><td><form action=change_frnds.php method=GET><input type=text name=frnds value={$row['ph_frnds']}><input type=hidden name=ph_id value={$row['ph_id']}><input type=submit value=Edit></form>
</td></tr>";
}

$limit1 = $limit - 50;
$limit2 = $limit + 50;
echo "<a href=?limit={$limit2}> next </a>";
echo "<a href=?limit={$limit1}> back </a>";
?>