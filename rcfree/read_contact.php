<table border=1 cellpadding=0 cellspacing=0>
<?php
include 'db.php';
$sql = "SELECT * FROM contact";
mysql_select_db($dbname);
$retval = mysql_query($sql,$conn);
while($row = mysql_fetch_array($retval)){
$name = $row['name'];
$id = $row['id'];
$email = $row['email'];
$mobile = $row['mobile'];
$address = $row['message'];
echo "<tr><td>{$id}</td><td>{$name}</td><td>{$email}</td><td>{$address}</td><td>{$mobile}</td></tr>";
	}
?>

