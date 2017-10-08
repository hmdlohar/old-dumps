<?php
include '../files/var.php';
session_start();
include '../files/db.php';
include 'profile.php';

if (isset($_POST['pname'],$_POST['pid'])){
	$name = $_POST['pname'];
	$link = $_POST['pid'];
	$points = $_POST['points'];
	$date = date("d-m-Y");
	$time = date("h-i");
	$creditsp = $_POST['credits'];
	$userid = $_POST['userid'];



$ch = curl_init("http://graph.facebook.com/$link");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->category;
if (isset($nowlikes)){
	$newcredits = $credits - $creditsp;
	if ($newcredits > 0){
		$sql_pg="SELECT * FROM page
				WHERE link='$link'";
				mysql_select_db($dbname);
	$retval = mysql_query($sql_pg, $conn);
	$numrows_ap = mysql_num_rows($retval);
		if ($numrows_ap > 0){
			header("Location: {$url}/manage_page.php?error=443");
			}
			else{
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
	
	$sql = 	"INSERT INTO page".
			"(name,link,hit,points,credits,states,userid,other,date,time) ".
			"VALUES ".
			"('$name','$link','0','$points','$creditsp','1','$userid','0','$date','$time')";
			mysql_select_db($dbname);
			$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			die('Could not enter data: ' . mysql_error());
			}
		}
	}
	else
	 {
		header("Location: {$url}/manage_page.php?error=441");
		}
}
else{
	$states = "This is not valude facebook page";
	header("Location: {$url}/manage_page.php?error=442");
	}
	
}
	
	
	
?>
