function selectBallType(type){
	hmd=$("input[type=radio]");
	hmd[type-1].checked=true;
}
function selectPlayerType(type){
	hmd=$("input[type=radio]");
	hmd[type-1].checked=true;
}
function cancelPlayerDelete(){
	document.location.assign("team.php");
	
	return false;
}
function checkTeams(){
	bat=document.getElementsByName("batingTeam")[0];
	ball=document.getElementsByName("bowlingTeam")[0];
	matchOvers=document.getElementsByName("matchOvers")[0];
	
	if(bat.value==ball.value){
		alert("Please Select Different Batting and Bowling Teams");
		return false;
	}
	else if(matchOvers.value==""||matchOvers.value==null){
		alert("Please Enter Valued Overs");
		return false;
	}
}
function checkPlayers(){
	bat=document.getElementsByName("mainBatsman")[0];
	ball=document.getElementsByName("supportBatsman")[0];
	if(bat.value==ball.value){
		alert("Please Select Different Batsman");
		return false;
	}
}