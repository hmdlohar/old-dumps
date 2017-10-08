<?php 
	include 'common.php';
	if(isset($_GET['metchId'])){
		$matchId=$_GET['metchId'];
		$sql=sql_query("select * from metch where id={$matchId}");
		$row=mysql_fetch_array($sql);
		$team1=$row[1];
		$team2=$row[2];
		$team3=$row[3];
	}
?>
<link rel='stylesheet' type='text/css' href='files/style.css'>

<html>
<title>Cricket Score Counter</title>
<body>

<div id='wholeBody'>
	<div class='header'>
		<span id='manageTeams'>
		<?php 
		echo "{$team1} vs {$team2}";
		
		?>
		</span>
	</div>
	<div id=matchSummary>
		<table>
			<tr>
			<th width=20%>Batsman</th>
			<th width=10%>Runs</th>
			<th width=10%>Balls</th>
			<th width=10%>6s</th>
			<th width=10%>4s</th>
			</tr>
			<tr>
			<td>anyname</td>
			<td>32</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			</tr>
		</table>
	</div>
	<div id=back>
		<a href="index.php">Back</a>
	</div>
</div>

</body>
</html>

<script src='files/jquery.js'></script>
<script src='files/js.js'></script>