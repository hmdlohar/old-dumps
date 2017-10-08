<?php 
	include 'common.php';
?>
<link rel='stylesheet' type='text/css' href='files/style.css'>

<html>
<title>Cricket Score Counter</title>
<body>

<div id='wholeBody'>
	<div class='header'>
		<span id='manageTeams'>Match Summary</span>
		
	</div>
	<div id='teamList'>
		<?php 
			$sql=sql_query('select * from metch');
			while($row=mysql_fetch_array($sql)){
					$batingTeam=strtoupper(getTeam($row['team1'])[1]);
					$bowlingTeam=strtoupper(getTeam($row['team2'])[1]);
				echo "<a href='showSummary.php?metchId={$row['id']}'><div class='teamName'>{$row['id']}. {$batingTeam} vs {$bowlingTeam}</div></a>";
			}
		?>
		

	</div>
	<div id=back>
		<a href="index.php">Back</a>
	</div>
</div>

</body>
</html>

<script src='files/jquery.js'></script>
<script src='files/js.js'></script>