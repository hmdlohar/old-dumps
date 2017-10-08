<?php 
	include 'common.php';
	if(isset($_GET['batingTeam'])){
		$batingTeam=$_GET['batingTeam'];
		$bowlingTeam=$_GET['bowlingTeam'];
		$mainBatsman=$_GET['mainBatsman'];
		$supportBatsman=$_GET['supportBatsman'];
		$bowler=$_GET['bowler'];
		$matchOvers=$_GET['matchOvers'];
		
		setExtras2(1,$batingTeam,$bowlingTeam);
		setExtras2(3,$mainBatsman,$supportBatsman);
		setExtras2(4,$bowler,"");
		$sql=sql_query("select id from metch order by id desc limit 1 ");
		$row=mysql_fetch_array($sql);
		//echo $row[0];
		$nextId=(int)$row[0];
		$nextId++;
		sql_query("insert into metch (id,team1,team2,overs,firstBat)values({$nextId},'{$batingTeam}','{$bowlingTeam}',{$matchOvers},'{$batingTeam}')");
		setExtras2(5,"{$nextId}","");
		setExtras2(2,"1","1");
		header("Location: match.php");
		
	}
?>