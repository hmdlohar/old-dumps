<?php 
	include 'common.php';
	if(isset($_GET['switchInning'])){
		$target=$_GET['switchInning'];
		setExtras(2,1,2,$target);
		setExtras1(6,0);
		$ex1=getExtras(1);
		setExtras2(1,$ex1[1],$ex1[0]);
		header("Location: InningStart.php");
	}
	if(isset($_GET['finishMatch'])){
		sql_query("update extras set value1=0,value2=0,value3=0");
		header("Location: index.php");
	}
	$teamBat=getExtras(1)[0];
	$teamBall=getExtras(1)[1];
	$playerBat=getExtras(3)[0];
	$playerBatSupport=getExtras(3)[0];
	$matchId=getExtras(5)[0];
	$batingTeam2=getExtras(1)[0];
	$batingTeam=strtoupper(getTeam(getExtras(1)[0])[1]);
	$bowlingTeam=strtoupper(getTeam(getExtras(1)[1])[1]);
	
	$sql=sql_query("select sum(batsmanRun+teamRun) from log where matchId={$matchId} && teamBat='{$batingTeam2}'");
	$row=mysql_fetch_array($sql);
	$team1Score=$row[0];
	$totalScore=$row[0];
	$sql=sql_query("select sum(batsmanRun+teamRun) from log where matchId={$matchId} && teamBat='{$teamBall}'");
	$row=mysql_fetch_array($sql);
	$team2Score=$row[0];
	
	if($team1Score>$team2Score){
		$diff=$team1Score-$team2Score;
		$winTeam=$batingTeam;
	}
	else{
		$diff=$team2Score-$team1Score;
		$winTeam=$bowlingTeam;
	}
	
	
					
?>
<link rel="stylesheet" type="text/css" href="files/style.css">

<html>
<title>Cricket Score Counter</title>
<body>

<div id="wholeBody">
	<div class="header">
		<span id="manageTeams">Inning Finished</span>
	</div>
	
	<div id=newMatch>
		
			<span id=text style="font-size:25;color:blue;">
			<?php 
			if(getExtras(2)[1]==1){
				echo "First Inning Finished, Press next to go to start next inning.
				<br>
				<br>
				Your Target is: <font color=green><u>{$totalScore}</u></font>
				<br>
				
				<button style='height:30px;width:70px;' onclick=startNextInning({$totalScore})>Next>></button>
				";
			}
			else{
				echo "
				Match Finished,
				
				<br>
				<br>
				{$bowlingTeam} Score: <font color=green><u>{$team2Score}</u></font><br>
				{$batingTeam} Score: <font color=green><u>{$team1Score}</u></font>
				<br>
				<br>
				<font color=green><u><b>{$winTeam}</b></u> won by <u><b>{$diff}</b></u> Runs</font>
				<br>
				<br>
				
				<button style='height:30px;width:70px;' onclick=finishMatch()>Finish</button>
				";
			}
			?>
			</table>
		
	</div>
		
	<hr>
	<div id=back>
		
	</div>
</div>

</body>
</html>

<script src="files/jquery.js"></script>
<script src="files/js.js"></script>
<script>
function startNextInning(target){
	document.location.assign("?switchInning="+target);
}
function finishMatch(){
	document.location.assign("?finishMatch=1");
}
</script>