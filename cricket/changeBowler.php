<?php 
	include 'common.php';
	if(isset($_GET['changeBowlerNow'])){
		
		setExtras1(4,$_GET['changeBowlerNow']);
		header("Location: match.php");
	}
	$nextball=getExtras(6)[0];
	$matchId=getExtras(5)[0];
	$sql=sql_query("select overs from metch where id={$matchId}");
	$row=mysql_fetch_array($sql);
	if(($nextball/6)+1>$row[0]){
		header("Location: switchInning.php");
	}
	$teamBall=getExtras(1)[1];
	$playerBall=getExtras(4)[0];
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
		<form action="" method=GET>
			<table>
			
			<tr>				<td><br>Select Bowler</td>		</tr>
			<tr>				<td>
				<select name=changeBowlerNow>
					<?php 
					$sql=sql_query("select * from players where teamId={$teamBall} and id not in({$playerBall})");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<tr><td><br><input type=submit value="Select" onclick="return checkPlayers()"></td></tr>
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