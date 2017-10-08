<?php 
	include 'common.php';
	if(isset($_GET['playerType'])){
		$teamId=$_GET['teamId'];
		$pName=$_GET['pName'];
		$playerType=$_GET['playerType'];
		
		sql_query("insert into players (name,type,teamId)values('{$pName}','{$playerType}','{$teamId}')");
		header("Location: team.php?teamId={$teamId}");
	}else if(isset($_GET['teamId'])){
		$teamId=$_GET['teamId'];
	}
?>
<link rel="stylesheet" type="text/css" href="files/style.css">

<html>
<title>Cricket Score Counter</title>
<body>

<div id="wholeBody">
	<div class="header">
		<span id="manageTeams">Add Player</span>
	</div>
	<div class="addPlayer">
		<form action="" method="GET">
			<br>
			<br>
			<br>
			Name:- <input type=text name="pName" size=30><br>
				<div class="ballType">
		<input type="radio" name="playerType" value="batsman" checked><span onclick="selectPlayerType(1)">Batsman</span></input><br>
		<input type="radio" name="playerType" value="bowler"><span onclick="selectPlayerType(2)">Bowser</span></input><br>
		<input type="radio" name="playerType" value="allrounder"><span onclick="selectPlayerType(3)">Allrounder</span></input><br>
		<input type=hidden name=teamId value="<?php echo $teamId ?>">
		<input type=submit value="Add Player">
	</div>
		</form>
	</div>
	<div id=back>
		<a href="team.php?teamId=<?php echo $teamId ?>">Back</a>
	</div>
</div>

</body>
</html>

<script src="files/jquery.js"></script>
<script src="files/js.js"></script>