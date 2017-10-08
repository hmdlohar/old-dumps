<a href=down.php>Download</a><br>
<a href=fb.php>Facebook Pages</a>

<form action=in_bm.php method=get>
Name:- <input type=text name=name> Link:- <input type=text name=link>  Other:- <input type=text name=other> <input type=submit>
</form>
<table>

<?php
include 'db.php';
$sql = "SELECT * FROM hmdbm where hit='hmdbm'";
mysql_select_db($dbname);
$retval = mysql_query($sql, $conn);
while($row = mysql_fetch_array($retval)){
	$name = $row['name'];
	$link = $row['link'];
	$other = $row['other'];
	$id = $row['id'];
	echo "<tr><td><a href='{$link}' target=next{$id}>{$name}</a></td><td width=200><textarea cols=50 rows=5>{$link}</textarea></td><td>{$other}</td><td><a href=edit.php?elink={$id}>Edit</a>----<a href=in_bm.php?delete={$id}>   DELETE</a></td></tr>";
	}
?>
</table>