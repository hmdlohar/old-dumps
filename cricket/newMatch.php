<?php 
	include 'common.php';

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
		<form action="newMatchSelectPlayer.php" method=GET>
			<table>
			<tr>				<td>Select Bating Team</td>		</tr>
			<tr>				<td>
				<select name=batingTeam>
					<?php 
					$sql=sql_query("select * from teams");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<tr>				<td>Select Bowling Team</td>		</tr>
			<tr>				<td>
				<select name=bowlingTeam>
					<?php 
					$sql=sql_query("select * from teams");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<tr>				<td>Enter Match Overs</td>		</tr>
			<tr>				<td>
				<input type=text name=matchOvers>
			</td>		</tr>
			
			<tr><td><br><input type=submit value="Next Step" onclick="return checkTeams()"></td></tr>
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