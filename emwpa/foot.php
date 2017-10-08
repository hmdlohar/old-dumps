<div id=right>
	<p id=b160x600 style='margin-left:30px'><?php echo $bernar3; ?></p>
</div>

<div id=bottom>
<?php

if ($list == 'home'||'pics'||'xxxpics'){
$sql_get = "SELECT * FROM mm WHERE link='$list'";
mysql_select_db($dbname);
$retval = mysql_query($sql_get,$conn);
while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hitm = $row['hit'];
	}
$hitm++;
$hit_sql = "UPDATE mm SET hit='$hitm' WHERE link='$list'";
mysql_select_db($dbname);
mysql_query($hit_sql,$conn);
	}
if ($list != 'home'||'pics'||'xxxpics'){
$sql_get = "SELECT * FROM list WHERE link='$list'";
mysql_select_db( $dbname );
		$retval = mysql_query( $sql_get, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hitl = $row['hit'];
	}
$hitl++;
$hit_sql = "UPDATE list SET hit='$hitl' WHERE link='$list'";
mysql_select_db($dbname);
mysql_query($hit_sql,$conn);

}
?>
</div>