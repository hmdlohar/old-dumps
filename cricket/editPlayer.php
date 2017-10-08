<?php 
	include 'common.php';
	if(isset($_GET['playerId'])){
		$playerId=$_GET['playerId'];
		$teamId=$_GET['teamId'];
	}
	else if(isset($_GET['playerType'])){
		$teamId=$_GET['teamId'];
		$pName=$_GET['pName'];
		$pid=$_GET['pid'];
		$playerType=$_GET['playerType'];
		
		sql_query("update players set name='{$pName}',type='{$playerType}' where id={$pid}");
	
		header("Location: team.php?teamId={$teamId}");
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
	<div class="addPlayer">
		<form action="" method="GET">
			<br>
			<br>
			<br>
			<?php 
			$sql=sql_query("select * from players where id={$playerId}");
			$row=mysql_fetch_array($sql);
			$playerName=$row[1];
			$playerType=$row[2];
				if($playerType=="batsman"){
					$pt=0;
				}
				else if($playerType=="bowler"){
					$pt=1;
				}
				else{
					$pt=2;
				}
				
			?>
			Name:- <input type=text name="pName" size=30 value=<?php echo $playerName ?>><br>
				<div class="ballType">
		<input type="radio" name="playerType" value="batsman" checked><span onclick="selectPlayerType(1)">Batsman</span></input><br>
		<input type="radio" name="playerType" value="bowler"><span onclick="selectPlayerType(2)">Bowser</span></input><br>
		<input type="radio" name="playerType" value="allrounder"><span onclick="selectPlayerType(3)">Allrounder</span></input><br>
					<input type=hidden name=teamId value="<?php echo $teamId ?>">
					<input type=hidden name=pid value="<?php echo $playerId ?>">
		<input type=submit value="Save">
		
		<?php echo "<script>document.getElementsByName('playerType')[{$pt}].checked=true;</script>"; ?>
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