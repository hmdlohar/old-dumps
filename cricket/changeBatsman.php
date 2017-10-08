<?php 
	include 'common.php';
	if(isset($_GET['changeBatsmanNow'])){
		
		setExtras1(3,$_GET['changeBatsmanNow']);
		header("Location: match.php");
	}
	$teamBat=getExtras(1)[0];
	$playerBat=getExtras(3)[0];
	$playerBatSupport=getExtras(3)[0];
	$matchId=getExtras(5)[0];
	$plaied="";
					$sql1=sql_query("select distinct playerBat2 from log where matchId={$matchId}");
					while($row=mysql_fetch_array($sql1)){
						$plaied.="{$row['playerBat2']},";
						//echo $row[0];
					}
					$sql1=sql_query("select distinct playerBat from log where matchId={$matchId}");
					while($row=mysql_fetch_array($sql1)){
						$plaied.="{$row['playerBat']},";
						//echo $row[0];
					}
					$plaied.="{$playerBat},{$playerBatSupport}";
					
					
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
			
			<tr>				<td><br>Select Batsman</td>		</tr>
			<tr>				<td>
				<select name=changeBatsmanNow>
					<?php 
					
					$sql=sql_query("select * from players where teamId={$teamBat} and id not in({$plaied})");
					$numPlayers=mysql_num_rows($sql);
					if($numPlayers==0){
						echo "<script>document.location.assign('switchInning.php');</script>";
					}
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
		
	</div>
</div>

</body>
</html>

<script src="files/jquery.js"></script>
<script src="files/js.js"></script>