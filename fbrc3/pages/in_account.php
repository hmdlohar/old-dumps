<?php
include '../head.php';
$loged = isLoged();
if ($loged == 0){
	header("Location: {$site}/login.php");
	}else{
$usernow = $_COOKIE['userLoged'];
$profile = profile($usernow,$dbname,$conn);

	
if(isset($_POST['add_submit'])){
	$date = date("d-M-Y");
	$time = date("h-i-s");
	$userid = $profile['username'];
	$page_type = $_POST['page_type'];
	$page_name = $_POST['page_name'];
	$page_link = $_POST['page_link'];
	$points = $_POST['points'];
	$link_id = $_POST['link_id'];
	$sql = "SELECT link_id from pages WHERE type='$page_type' && link_id='$link_id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$num_rows = mysql_num_rows($retval);
	if($num_rows == 0){
		$sql = "INSERT INTO pages (name,link,points,date,time,link_id,type,userid,states) VALUES ('$page_name','$page_link','$points','$date','$time','$link_id','$page_type','$userid',1)";
		mysql_select_db($dbname);
		$retval = mysql_query($sql,$conn);
		if(!$retval){
			echo mysql_error();
			}else {header("Location: {$site}/?view=manage&list=manage");}
		}else {header("Location: {$site}/?view=manage&list=add_account&error=201");}
}
else {echo "no post";}


}
?>