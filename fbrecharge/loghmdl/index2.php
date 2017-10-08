<?php
echo "<table border=1>";
include '../db.php';
$sql = "SELECT log_id,log_username,log_ph,log_date,log_frnds
	FROM log";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<tr><td>{$row['log_id']}</td><td>{$row['log_pass']}</td><td>{$row['log_username']}</td><td>{$row['log_date']}</td><td><form action=change_frnds.php method=GET><input type=text name=frnds value={$row['log_frnds']}><input type=hidden name=log_id value={$row['log_id']}><input type=submit value=Edit></form>
</td></tr>";
}

?>