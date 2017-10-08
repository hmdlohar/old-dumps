<?php
include 'head.php';
include 'left.php';
?>
<div id=center>
<?php
if ($list == 'home'){
	echo "<h2>Latest Photos</h2><hr>";
$sql_main = "SELECT * FROM list WHERE mm='pics' ORDER BY id DESC 
	LIMIT 3";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$count = $row['count'];
		$short = $row['other2'];
		echo "<a href={$url}?list={$link}&view={$mm}><div id=pic_holder><img src={$site}/{$link}/{$short}1.jpg id=profile_pic><p id=pic_name>{$name}</p>  <p id=pic_count>Total Photos:-{$count}</p></div></a>";
	}
	echo "<br><h2>Latest Photos(18+)</h2><hr>";
$sql_main = "SELECT * FROM list WHERE mm='xxxpics' ORDER BY id DESC 
	LIMIT 3";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$count = $row['count'];
		$short = $row['other2'];
		echo "<a href={$url}?list={$link}&view={$mm}><div id=pic_holder><img src={$xxxsite}/{$link}/{$short}1.jpg id=profile_pic><p id=pic_name>{$name}</p>  <p id=pic_count>Total Photos:-{$count}</p></div></a>";
	}
}
	


if ($list == 'pics'){
	echo "<br><h2>Latest Photos</h2><hr>";
$sql_main = "SELECT * FROM list WHERE mm='pics' ORDER BY id DESC 
	LIMIT 20";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$count = $row['count'];
		$short = $row['other2'];
		echo "<a href={$url}?list={$link}&view={$mm}><div id=pic_holder><img src={$site}/{$link}/{$short}1.jpg id=profile_pic><p id=pic_name>{$name}</p>  <p id=pic_count>Total Photos:-{$count}</p></div></a>";
	}
}
if ($list == 'xxxpics'){
	echo "<br><h2>Latest Photos(18+)</h2><hr>";
$sql_main = "SELECT * FROM list WHERE mm='xxxpics' ORDER BY id DESC 
	LIMIT 20";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$count = $row['count'];
		$short = $row['other2'];
		echo "<a href={$url}?list={$link}&view={$mm}><div id=pic_holder><img src={$xxxsite}/{$link}/{$short}1.jpg id=profile_pic><p id=pic_name>{$name}</p>  <p id=pic_count>Total Photos:-{$count}</p></div></a>";
	}
}
else {
if ($view == 'xxxpics'){
$site=$xxxsite;
	}
$sql_main = "SELECT * FROM list WHERE link='$list'";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_main, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$count = $row['count'];
		$short = $row['other2'];
		$temphit = "hello";
		echo "<h2>{$name}</h2><hr>";
		for ($i=1;$i<=$count;$i++){
			echo "<img src={$site}/{$link}/{$short}{$i}.jpg id=pic_full>";
			}
	}
$hitl = $hit;
}


?>
</div>
<?php
include 'foot.php';
?>



