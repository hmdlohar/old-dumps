
<?php
include 'nowfunction.php';
include 'db.php';

echo "<table border=1 align=center><tr><th width=120>Name</th><td width=100>Link</td><td width=10>NowLikes</td><td width=300>Other</td></tr>";
$sql2 = "SELECT * FROM likes_list";
mysql_select_db($dbname);
$retval = mysql_query($sql2, $conn);
while($row = mysql_fetch_array($retval)){
	$name= $row['name'];
	$link= $row['link'];
	$other= $row['other'];
	
	echo '<tr><td>';
	nowname($link);
	echo '</td><td>';
	nowid($link);
	echo '</td><td>';
	nowlikes($link);
	echo "</td><td><a target=new href=http://m.facebook.com/send_page_invite/?pageid=";
	nowid($link);
	echo ">Invite</a></td></tr>";
	}

?>
