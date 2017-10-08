<div id=one style="float:left;width:200px;border:1px solid green;">
<?php
echo "<table>";
$sump = 0;
include '../files/db.php';
$sql_main = "SELECT * FROM list WHERE mm='pics'";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$sump += $hit;
		$count = $row['count'];
		$short = $row['other2'];
		echo "<tr><td>{$name}</td><td>{$hit}</td></tr>";
	}

?>
</table>
</div>

<div id=one style="float:left;width:200px;border:1px solid green;">
<?php
$sumx = 0;
echo "<table>";
include '../files/db.php';
$sql_main = "SELECT * FROM list WHERE mm='xxxpics'";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$sumx += $hit;
		$count = $row['count'];
		$short = $row['other2'];
		echo "<tr><td>{$name}</td><td>{$hit}</td></tr>";
	}

?>
</table>
</div>

<div id=two style="float:left;width:200px;border:1px solid green;">
<?php
$summ=0;
echo "<table>";
include '../files/db.php';
$sql_main = "SELECT * FROM mm";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$summ += $hit;
		$hit = $row['hit'];
	
		echo "<tr><td>{$name}</td><td>{$hit}</td></tr>";
	}
?>
</table>

</div>

<div id=one style="float:left;width:200px;border:1px solid green;">
<?php
echo "<table border=1>";

echo "<tr><td>Sum Pics</td><td>{$sump}</td></tr>";
echo "<tr><td>Sum XXXpics</td><td>{$sumx}</td></tr>";
echo "<tr><td>Sum MM</td><td>{$summ}</td></tr>";
$sum = $sump+$sumx+$summ;
echo "<tr><td>Sum </td><td>{$sum}</td></tr>";
?>
</table>
</div>