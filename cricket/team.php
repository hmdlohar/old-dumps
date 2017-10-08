
<?php 
	include 'common.php';
	if(isset($_GET['teamId'])){
		$teamId=$_GET['teamId'];
	}else{
		$teamId=0;
	}
?>
<link rel='stylesheet' type='text/css' href='files/style.css'>

<html>
<title>Cricket Score Counter</title>
<body>

<div id='wholeBody'>
	<div class='header'>
		<span id='manageTeams'>Team</span>
		<span id='newTeam'><a href="addPlayer.php?teamId=<?php echo $teamId ?>">Add player</a></span>
	</div>
	<div id='teamList'>
		<?php 
			$sql=sql_query("select * from players where teamId={$teamId}");
			while($row=mysql_fetch_array($sql)){
				echo "<div class='playerName'><span>{$row['name']}</span><img src='img/{$row['type']}.png' height=20 style='margin-right:10px;'><span class='deletePlayer'><a href='deletePlayer.php?playerId={$row['id']}&teamId={$teamId}'><img src='img/delete.png' height=30 width=30></a></span><span class='editPlayer'><a href='editPlayer.php?playerId={$row['id']}&teamId={$teamId}'><img src='img/edit.png' height=30 width=30></a></span></div>	";
			}
		?>
		
		
	
		

		
	</div>
	<div id=back>
		<a href="teams.php">Back</a>
	</div>
</div>

</body>
</html>

<script src='files/jquery.js'></script>
<script src='files/js.js'></script>