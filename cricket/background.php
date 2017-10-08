<?php 
	include 'common.php';
	if(isset($_GET['countNewRun'])){
		$score=$_GET['score'];
		$ballNo=$_GET['ballno'];
		$wideball=$_GET['wiedball'];
		$noballrun=$_GET['noballrun'];
		$noball=$_GET['noball'];
		$matchId=getExtras(5)[0];
		$playerBat=getExtras(3)[0];
		$playerBat2=getExtras(3)[1];
		$playerBall=getExtras(4)[0];
		$teamName=getExtras(1)[0];
		$teamName2=getExtras(1)[1];
		$sql=sql_query("select ballno from balls where matchId={$matchId} order by ballno desc limit 1");
		$row=mysql_fetch_array($sql);
		if($score==1||$score==3){
			swapBatsman();
		}
		$over=(floor((int)($ballNo-1)/6));
		addNewRun($matchId,(int)$ballNo,$score,$playerBat,$playerBall,$teamName,$noballrun,$noball,$wideball,$playerBat2,$teamName2,$over);
	}
	else if(isset($_GET['countNewWicket'])){
		$score=$_GET['score'];
		$ballNo=$_GET['ballno'];
		$wideball=$_GET['wiedball'];
		$noballrun=$_GET['noballrun'];
		$noball=$_GET['noball'];
		$wicket=$_GET['wicket'];
		$wicketType=$_GET['wicketType'];
		$matchId=getExtras(5)[0];
		$playerBat=getExtras(3)[0];
		$playerBat2=getExtras(3)[1];
		$playerBall=getExtras(4)[0];
		$teamName=getExtras(1)[0];
		$teamName2=getExtras(1)[1];
		$sql=sql_query("select ballno from balls where matchId={$matchId} order by ballno desc limit 1");
		$row=mysql_fetch_array($sql);
		if($score==1||$score==3){
			swapBatsman();
		}
		$over=(floor((int)($ballNo-1)/6));
		wicket($matchId,(int)$ballNo,$score,$playerBat,$playerBall,$teamName,$noballrun,$noball,$wideball,$playerBat2,$teamName2,$over,$wicket,$wicketType);
	}
	else if(isset($_GET['getNextBallno2'])){
		$matchId=getExtras(5)[0];
		$sql=sql_query("select ballno from balls where matchId={$matchId} order by ballno desc limit 1");
		$row=mysql_fetch_array($sql);
		echo $row[0];
		
	}
	else if(isset($_GET['getNextBallno'])){
		echo getExtras(6)[0];		
	}
	else if(isset($_GET['ballpp'])){
		$bno= (int)getExtras(6)[0];		
		setExtras1(6,$bno+1);
		echo $bno+1;
	}
	else  if(isset($_GET['getRefreshInfo'])){
		$mainBatsman=getPlayer(getExtras(3)[0])[1];
		$supportBatsman=getPlayer(getExtras(3)[1])[1];
		$bowler=getPlayer(getExtras(4)[0])[1];
		$playerBat=getExtras(3)[0];
		$playerBat2=getExtras(3)[1];
		$playerBall=getExtras(4)[0];
		$batingTeam=getExtras(1)[0];
		$matchId=getExtras(5)[0];	
		$sql=sql_query("select count(ballno) from balls where matchId={$matchId} && teamName='{$batingTeam}'");
		$row=mysql_fetch_array($sql);
		$totalball=(int)getExtras(6)[0];
		$sql=sql_query("select sum(batsmanRun+teamRun) from log where matchId={$matchId} && teamBat='{$batingTeam}'");
		$row=mysql_fetch_array($sql);
		$totalScore=$row[0];
		$sql=sql_query("select sum(batsmanRun) from log where matchId={$matchId} && teamBat='{$batingTeam}' && playerBat='{$playerBat}'");
		$row=mysql_fetch_array($sql);
		$mainBatsmanScore=$row[0];
		$sql=sql_query("select sum(batsmanRun) from log where matchId={$matchId} && teamBat='{$batingTeam}' && playerBat='{$playerBat2}'");
		$row=mysql_fetch_array($sql);
		$supportBatsmanScore=$row[0];
		$str="{$mainBatsman}-hmd-{$supportBatsman}-hmd-{$bowler}-hmd-{$totalball}-hmd-{$totalScore}-hmd-{$mainBatsmanScore}-hmd-{$supportBatsmanScore}";
		echo $str;
		
	}
?>