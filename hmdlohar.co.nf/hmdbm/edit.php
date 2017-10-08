<?php
include 'db.php';
$elink = $_GET['elink'];
$sql = "SELECT * FROM hmdbm WHERE id='$elink'";
mysql_select_db($dbname);
$retval = mysql_query($sql, $conn);
while($row = mysql_fetch_array($retval)){
	$name = $row['name'];
	$link = $row['link'];
	$other = $row['other'];
	$id = $row['id'];
}
echo "<form action=in_bm.php method=POST>Name <input type=text name=name value='{$name}'> Link:- <input type=text name=link value='{$link}' size=50>Other:- <input type=text name=other value={$other} size=30><input type=hidden name=id value={$id}> <input type=submit name=elink>
</form>";

?>