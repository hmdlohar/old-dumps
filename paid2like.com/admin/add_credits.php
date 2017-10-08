<?php
include '../files/var.php';
$pid = $_GET['pid'];
include '../checklogin.php';
include '../profile.php';
$mm_one = "all";
if (isset($_SESSION['username'])){
	$mm_two = "loged";
	}
	else{
		$mm_two = "nologed";
		}

include '../files/db.php';
if (isset($_GET['view'])) {
	$view = $_GET['view'];
	die;
	}
	else{
		$view = "Home";
	}
$sql = "SELECT * FROM mm
		WHERE name='$view'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql, $conn);
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];	
		}


$sqlp = "SELECT * FROM page
		WHERE link='$pid'";
	mysql_select_db($dbname);
	$retval = mysql_query($sqlp, $conn);
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	$credits_page = $row['credits'];
	}
	
if (isset($_POST['credits'])){
	$creditsp = $_POST['credits'];
		$newcredits = $credits - $creditsp;
		$newcredits_page = $credits_page + $creditsp;
		if ($newcredits > 0){
	header("Location: {$url}/manage_page.php");
		$sql_u = "UPDATE user
			SET credits='$newcredits'
			WHERE uname='$uname'";
			mysql_select_db($dbname);
			$retval = mysql_query( $sql_u, $conn );
			if(! $retval )
			{
			die('Could not enter data: ' . mysql_error());
			}
		$sql_p = "UPDATE page
			SET credits='$newcredits_page'
			WHERE link='$pid'";
			mysql_select_db($dbname);
			$retval = mysql_query( $sql_p, $conn );
			if(! $retval )
			{
			die('Could not enter data: ' . mysql_error());
			}
	}
	else{
		header("Location: {$url}/manage_page.php?error=441");
		}
}
		
include '../head.php';
?>
	<link rel="stylesheet" href="../files/style.css">
	<div id=loginbox>
		<h2>
		Login Hear
		</h2>
		<div id=login>
			
		<form action="" method="POST">
		<div class=logindetailes>Add Credits:</div>
		<div class=logininput><input type=text name=credits></div>
		<input type=submit value="Add Credits"></div>
		
		</form>
			</div>
			</div>
	</div>
	
<?php
include '../foot.php';
?>





