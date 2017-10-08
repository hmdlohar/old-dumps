<?php 
	include 'common.php';
	if(isset($_GET['mainBatsman'])){
		$mainBatsman=$_GET['mainBatsman'];
		$supportBatsman=$_GET['supportBatsman'];
		$bowler=$_GET['bowler'];
		
		setExtras2(3,$mainBatsman,$supportBatsman);
		setExtras1(4,$bowler);
		header("Location: match.php");
	}
	$bat=getExtras(1)[0];
	$ball=getExtras(1)[1];
	
?>
<link rel="stylesheet" type="text/css" href="files/style.css">

<html>
<title>Cricket Score Counter</title>
<body>

<div id="wholeBody">
	<div class="header">
		<span id="manageTeams">Select Batsman And Bowler</span>
	</div>
	
	<div id=newMatch>
		<form action="" method=GET>
			<table>
			<tr>				<td>Select Main Batsman</td>		</tr>
			<tr>				<td>
				<select name=mainBatsman>
					<?php 
					$sql=sql_query("select * from players where teamId={$bat}");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<tr>				<td>Select Support Batsman</td>		</tr>
			<tr>				<td>
				<select name=supportBatsman>
					<?php 
					$sql=sql_query("select * from players where teamId={$bat}");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			<tr>				<td><br>Select Bowler</td>		</tr>
			<tr>				<td>
				<select name=bowler>
					<?php 
					$sql=sql_query("select * from players where teamId={$ball}");
					while($row=mysql_fetch_array($sql)){
						echo "<option value={$row['id']}>{$row['name']}</option>";
					}
					?>
				</select>
			</td>		</tr>
			
			<tr><td><br><input type=submit value="StartMatch" onclick="return checkPlayers()"></td></tr>
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