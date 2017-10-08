<?php 
	include 'common.php';
?>
<link rel='stylesheet' type='text/css' href='files/style.css'>

<html>
<title>Cricket Score Counter</title>
<body>

<div id='wholeBody'>
	<div class='header'>
		<span id='manageTeams'>Manage Teams</span>
		<span id='newTeam'><a href='newteam.php'>New Team</a></span>
	</div>
	<div id='teamList'>
		<?php 
			$sql=sql_query('select * from teams');
			while($row=mysql_fetch_array($sql)){
				echo "<a href='team.php?teamId={$row['id']}'><div class='teamName'>{$row['name']}</div></a>";
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