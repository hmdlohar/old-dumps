<?php 
	include 'common.php';
	if(!isMatchRunning()){
		header("Location: newMatch.php");
	}
	$mainBatsman=getPlayer(getExtras(3)[0])[1];
	$supportBatsman=getPlayer(getExtras(3)[1])[1];
	$bowler=getPlayer(getExtras(4)[0])[1];
	$batingTeam=strtoupper(getTeam(getExtras(1)[0])[1]);
	$bowlingTeam=strtoupper(getTeam(getExtras(1)[1])[1]);
	$matchId=getExtras(5)[0];	
	$playerBat=getExtras(3)[0];
	$playerBat2=getExtras(3)[1];
	$playerBall=getExtras(4)[0];
	$batingTeam2=getExtras(1)[0];
	$totalball=(int)getExtras(6)[0];
	
	$sql=sql_query("select sum(batsmanRun+teamRun) from log where matchId={$matchId} && teamBat='{$batingTeam2}'");
		$row=mysql_fetch_array($sql);
		$totalScore=$row[0];
		$sql=sql_query("select sum(batsmanRun) from log where matchId={$matchId} && teamBat='{$batingTeam2}' && playerBat='{$playerBat}'");
		$row=mysql_fetch_array($sql);
		$mainBatsmanScore=$row[0];
		$sql=sql_query("select sum(batsmanRun) from log where matchId={$matchId} && teamBat='{$batingTeam2}' && playerBat='{$playerBat2}'");
		$row=mysql_fetch_array($sql);
		$supportBatsmanScore=$row[0];
	$ts=(floor((int)$totalball/6)).".".((int)$totalball%6);
	
?>

<link rel="stylesheet" type="text/css" href="files/style.css">

<html>
<title>Cricket Score Counter</title>
<body>
<center>
<div id="wholeBody">
	<div id=teamNames>
		<?php echo "{$batingTeam} vs {$bowlingTeam}"; ?>
	</div>
<div class="header">
	<table>
	<tr>
		<td><span class="position">Main Batsman</span></td>
		<td class="tdWidth"><span class="person"><?php echo $mainBatsman." (".$mainBatsmanScore.")"; ?></span></td>
		<td><span class="position">Score</span></td>
		<td><span class="person"><?php echo $totalScore ?></span></td>
	</tr>
	<tr>
		<td><span class="position">Support Batsman</span></td>
		<td><span class="person"><?php echo $supportBatsman." (".$supportBatsmanScore.")" ?></span></td>
		<td><span class="position">Overs</span></td>
		<td><span class="person"><?php echo $ts ?></span></td>
	</tr>
	<tr>
		<td><span class="position">Bowler</span></td>
		<td><span class="person"><?php echo $bowler ?></span></td>
		<td><span class="position">Wickets</span></td>
		<td><span class="person"><?php echo $mainBatsman ?></span></td>
	</tr>
	</table>
</div>
<hr>
<div class="ballList">
	<div class="ball" id="ball1">1</div>
	<div class="ball" id="ball2">2</div>
	<div class="ball" id="ball3">3</div>
	<div class="ball" id="ball4">4</div>
	<div class="ball" id="ball5">5</div>
	<div class="ball" id="ball6">6</div>
</div>
<hr>
<div class="runCount">
	<div class="ballType">
		<input type="radio" name="ballType" value="noBall"><span onclick="selectBallType(1)">No ball</span></input>
		<input type="radio" name="ballType" value="wiedBall"><span onclick="selectBallType(2)">Wied ball</span></input>
	</div>
	
	<div class="clickRun">
		<button class="run" onclick="countNewRun(0)">+0</button>
		<button class="run" onclick="countNewRun(1)">+1</button>
		<button class="run" onclick="countNewRun(2)">+2</button>
		<button class="run" onclick="countNewRun(3)">+3</button>
		<button class="run" onclick="countNewRun(4)">+4</button>
		<button class="run" onclick="countNewRun(6)">+6</button>

	</div>
	<hr>
	<div class="clickWicket">
		<button class="wicket" onclick="wicket(1)">Wicket</button>
		<button class="wicket" onclick="wicket(2)">Catch</button>
		<button class="wicket" onclick="wicket(3)">Run Out</button>
		<button class="wicket" onclick="wicket(4)">Stump</button>
		<button class="wicket" onclick="wicket(5)">Hit W</button>
		<button class="wicket" onclick="wicket(6)">LBW</button>
	</div>
</div>
<div id=back>
		<a href="index.php">Back</a>
	</div>
</div>
</center>
</body>
</html>
<center>
<div id=screanBlocker>
	<br>
	<br>
	<br>
	<br>
	<p id=msg>Select Runs</p>
		<button class="runOut" onclick="runOutRun(0)">+0</button>
		<button class="runOut" onclick="runOutRun(1)">+1</button>
		<button class="runOut" onclick="runOutRun(2)">+2</button>
		<button class="runOut" onclick="runOutRun(3)">+3</button>
</div>
</center>
<script src="files/jquery.js"></script>
<script src="files/js.js"></script>
<script>
	window.noballrun=0;
	window.noball =0;
	window.wideball =0;
function countNewRun(run){
	getNextBallno(run);	
	
}
function bgCountNewRun(noball,wiedball,score,ballno,noballrun){
	
	$.get("background.php?countNewRun=yes&score="+score+"&noball="+noball+"&wiedball="+wiedball+"&noballrun="+noballrun+"&ballno="+ballno,function(data,status){
		console.log(data);
		refreshAll();
	});
}
function countNewWicket(noball,wiedball,score,ballno,noballrun,wicket,wicketType){
	
	$.get("background.php?countNewWicket=yes&score="+score+"&noball="+noball+"&wiedball="+wiedball+"&noballrun="+noballrun+"&ballno="+ballno+"&wicket="+wicket+"&wicketType="+wicketType,function(data,status){
		//console.log(data);
		document.location.assign("changeBatsman.php");
		refreshAll();
	});
}
function getNextBallno(run){
	$.get("background.php?getNextBallno=true",function(data,status){
		
		ballno=parseInt(data);
		ballno++;
		//console.log(ballno);
		
	
	if(document.getElementsByName("ballType")[0].checked){
		window.noball=1;
		bgCountNewRun(1,0,run,ballno,1);
		document.getElementsByName("ballType")[0].checked=false;
		window.noballrun++;
	}else if(document.getElementsByName("ballType")[1].checked){
		window.wiedball=1;
		bgCountNewRun(0,1,run,ballno,1);
		document.getElementsByName("ballType")[1].checked=false;
		window.noballrun++;
	}
	else{
		bgCountNewRun(0,0,run,ballno,0);
		ballpp();
		
	}
	if((ballno%6)==0){
		document.location.assign("changeBowler.php");
	}
	});
}
function getNextBallnoW(wicketType,run){
	$.get("background.php?getNextBallno=true",function(data,status){
		
		ballno=parseInt(data);
		ballno++;
		//console.log(ballno);
		
	if(false){
		
	}
	if(document.getElementsByName("ballType")[0].checked){
		window.noball=1;
		countNewWicket(1,0,run,ballno,1,1,wicketType);
		document.getElementsByName("ballType")[0].checked=false;
		window.noballrun++;
	}else if(document.getElementsByName("ballType")[1].checked){
		window.wiedball=1;
		countNewWicket(0,1,run,ballno,1,1,wicketType);
		document.getElementsByName("ballType")[1].checked=false;
		window.noballrun++;
	}
	else{
		countNewWicket(0,0,run,ballno,0,1,wicketType);
		ballpp();
		
	}
	if((ballno%6)==0){
		
		setTimeout(function(){document.location.assign("changeBowler.php");},500);
	}
	
	});
}
function refreshAll(){
	per=document.getElementsByClassName("person");
	$.get("background.php?getRefreshInfo=yes",function(data,status){
		all=data.split("-hmd-");
		per[0].innerHTML=all[0]+" ("+all[5]+")";
		per[2].innerHTML=all[1]+" ("+all[6]+")";
		per[4].innerHTML=all[2];
		o=parseInt(all[3]);
		over1=Math.floor(o/6);
		over2=Math.floor(o%6);
		per[1].innerHTML=all[4];
		per[3].innerHTML=over1+"."+over2;
		console.log(data);
	});
}
function wicket(type){
	if(type==1){
		getNextBallnoW(1,0);
	}
	else if(type==2){
		getNextBallnoW(2,0);
	}
	else if(type==3){
		document.getElementById("screanBlocker").style.display="block";
	}
	else if(type==4){
		getNextBallnoW(4,0);
	}
	else if(type==5){
		getNextBallnoW(5,0);
	}
	else{
		getNextBallnoW(6,0);
	}
}
function ballpp(){
	$.get("background.php?ballpp=true",function(data,status){});
}
function runOutRun(run){
	document.getElementById("screanBlocker").style.display="none";
	getNextBallnoW(3,run);
}
</script>