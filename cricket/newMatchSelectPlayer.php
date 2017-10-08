<?php 
	include 'common.php';
	if(isset($_GET['batingTeam'])){
		$bat=$_GET['batingTeam'];
		$ball=$_GET['bowlingTeam'];
		$matchOvers=$_GET['matchOvers'];
	}
?>
<link rel="stylesheet" type="text/css" href="files/style.css">

<html>
<title>Cricket Score Counter</title>
<body>

<div id="wholeBody">
	<div class="header">
		<span id="manageTeams">Edit Player</span>
	</div>
	
	<div id=newMatch>
		<form action="matchStart.php" method=GET>
			<table>
			<tr>				<td>Select Main Batsman</td>		</tr>
			<tr>				<td>
				<select name=mainBatsman>
					<?php 
					$sql=sql_query("select * from players where teamId={$bat}");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<tr>				<td>Select Support Batsman</td>		</tr>
			<tr>				<td>
				<select name=supportBatsman>
					<?php 
					$sql=sql_query("select * from players where teamId={$bat}");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<tr>				<td><br>Select Bowler</td>		</tr>
			<tr>				<td>
				<select name=bowler>
					<?php 
					$sql=sql_query("select * from players where teamId={$ball}");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<input type=hidden name=batingTeam value="<?php echo $bat ?>">
			<input type=hidden name=bowlingTeam value="<?php echo $ball ?>">
			<input type=hidden name=matchOvers value="<?php echo $matchOvers ?>">
			<tr><td><br><input type=submit value="StartMatch" onclick="return checkPlayers()"></td></tr>
			</table>
		</form>
	</div>
		
	<hr>
	<div id=back>
		<a href="team.php?teamId=<?php echo $teamId ?>">Back</a>
	</div>
</div>

</body>
</html>

<script src="files/jquery.js"></script>
<script src="files/js.js"></script>