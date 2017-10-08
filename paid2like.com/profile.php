<?php
$me ="hamid";
include 'files/db.php';
if (isset($_SESSION['username'])){
$userloged = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE uname='$userloged'";
			mysql_select_db($dbname);
			$retval = mysql_query($sql, $conn);
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
		$fname = $row['fname'];
		$lname = $row['lname'];
		$credits = $row['credits'];
		$other = $row['other'];
		$uname = $row['uname'];
		$email = $row['email'];
		$password = $row['pass'];
		$money = $row['money'];
		$fbid = $row['fbid'];
		}
		
	}
?>
