<?php

function sql_query($query){
	include "files/db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}

function num_rows($table,$field,$value){
	$retval=sql_query("select $field from $table where $field='$value'");
	
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}
function isMatchRunning(){
	if(getExtras(2)[0]=="1"){
		return true;
	}
	else{
		return false;
	}
}
function getExtras($num){
	$sql=sql_query("select value1,value2,value3 from extras where id={$num}");
	$row=mysql_fetch_array($sql);
	
	return $row;
}
function setExtras($num,$value1,$value2,$value3){
	return sql_query("update extras set value1='{$value1}',value2='{$value2}',value3='{$value3}' where id={$num}");
}
function setExtras2($num,$value1,$value2){
	return sql_query("update extras set value1='{$value1}',value2='{$value2}' where id={$num}");
}
function setExtras1($num,$value1){
	return sql_query("update extras set value1='{$value1}' where id={$num}");
}
function getPlayer($id){
	$sql=sql_query("select * from players where id={$id}");
	$row=mysql_fetch_array($sql);
	return $row;
}
function getTeam($id){
	$sql=sql_query("select * from teams where id={$id}");
	$row=mysql_fetch_array($sql);
	return $row;
}
function addNewRun($matchId,$ballNo,$score,$playerBat,$playerBall,$teamName,$noballrun,$noball,$wideball,$playerBat2,$teamName2,$over){
	return sql_query("insert into log (matchId,ballno,batsmanRun,playerBat,playerBall,teamBat,teamRun,noball,wiedball,playerBat2,teamBall,over) values ('{$matchId}','{$ballNo}','{$score}','{$playerBat}','{$playerBall}','{$teamName}','{$noballrun}','{$noball}','{$wideball}',{$playerBat2},{$teamName2},{$over})");
	
}
function wicket($matchId,$ballNo,$score,$playerBat,$playerBall,$teamName,$noballrun,$noball,$wideball,$playerBat2,$teamName2,$over,$wicket,$wicketType){
	return sql_query("insert into log (matchId,ballno,batsmanRun,playerBat,playerBall,teamBat,teamRun,noball,wiedball,playerBat2,teamBall,over,wicket,wicketType) values ('{$matchId}','{$ballNo}','{$score}','{$playerBat}','{$playerBall}','{$teamName}','{$noballrun}','{$noball}','{$wideball}',{$playerBat2},{$teamName2},{$over},{$wicket},{$wicketType})");
	
}
function swapBatsman(){
	$ex=getExtras(3);
	setExtras2(3,$ex[1],$ex[0]);
}
function ballpp(){
	$bno= (int)getExtras(6)[0];		
	setExtras1(6,$bno+1);
}


?>