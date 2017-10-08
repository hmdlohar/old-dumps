<?php 
	include 'common.php';
	if(isset($_GET['tName'])){
		$tname=$_GET['tName'];
		sql_query("insert into teams (name) values ('{$tname}')");
		header("Location: teams.php");
		
	}
?>
<link rel="stylesheet" type="text/css" href="files/style.css">

<html>
<title>Cricket Score Counter</title>
<body>

<div id="wholeBody">
	<div class="header">
		<span id="manageTeams">Add New Team</span>
	</div>
	<div class="addPlayer">
		<form action="" method="GET">
			<br>
			<br>
			<br>
			Name:- <input type=text name="tName" size=30><br>
			<br>
		
		<input type=submit value="Add Team">
	</div>
		</form>
	</div>
</div>

</body>
</html>

<script src="files/jquery.js"></script>
<script src="files/js.js"></script>