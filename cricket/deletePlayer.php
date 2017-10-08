<?php 
	include 'common.php';
	if(isset($_GET['deletePlayer'])){
		$did=$_GET['deletePlayer'];
		$teamId=$_GET['teamId'];
		sql_query("delete from players where id={$did}");
		header("Location: team.php?teamId={$teamId}");
	}
	else if($_GET['playerId']){
		$pid=$_GET['playerId'];
		$teamId=$_GET['teamId'];
	}
?>
<link rel="stylesheet" type="text/css" href="files/style.css">

<html>
<title>Cricket Score Counter</title>
<body>

<div id="wholeBody">
	<div class="header">
		<span id="manageTeams">Are you sure you want to delete Player?</span>
	</div>
	<div class="addPlayer">
		<form action="" method="GET">
			<br>
			<br>
			<br>
			<input type=hidden name=deletePlayer value="<?php echo $pid ?>">
			<input type=hidden name=teamId value="<?php echo $teamId ?>">
		<input type=submit name=dp value="yes">
		<button id=deletePlayerNo onclick="return cancelPlayerDelete()">No</button>
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