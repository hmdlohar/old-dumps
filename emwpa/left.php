<div id=left>
	<div id=left_header>All Tutorials</div>
		<?php
		if ($view == "home"){
			$sql_left = "SELECT * FROM list LIMIT 30";
			}else{
		$sql_left = "SELECT * FROM list where mm='$view' LIMIT 30";
	}
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_left, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$main_containt = $row['other'];
		if ($mm == 'xxxpics'){
echo "<a href={$url}?list={$link}&view={$mm}>{$name} (18+)</a>";
			}
			else{
		echo "<a href={$url}?list={$link}&view={$mm}>{$name}</a>";
	}		}
		?>
</div>