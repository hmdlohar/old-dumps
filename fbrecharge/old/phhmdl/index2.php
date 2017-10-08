







<?php
echo "<table border=1>";
include '../db.php';
$sql = "SELECT ph_id,ph_username,ph_ph,ph_date,ph_frnds
	FROM ph";
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

?>