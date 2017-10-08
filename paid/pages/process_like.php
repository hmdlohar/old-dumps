<?php
$usernow = $_COOKIE['userLoged'];
include '../files/db.php';
include '../common.php';

if(isset($_GET['result'])){
	//$page_id=$_GET['page_id'];
	$id=$_GET['id'];
	$userid=$_GET['userid'];
	$result=$_GET['result'];
	$action=$_GET['action'];
	$points=$_GET['points'];
	$money=$points+0.01;
	$date = date("d-M-Y");
	$time = date("h-i-s");
	$page_array=get_next_page($usernow);
	if($page_array==""){
	$page_array="230112";
	}
	$page_array_next="{$page_array},{$id}";
	$sql="INSERT INTO log (action,date,time,username,link,points) VALUES ('$action','$date','$time','$usernow','$id','$points')";
	$retval = mysql_query($sql, $conn);
	if(!$retval){
		echo mysql_error();
	}
	if($result=='yes'){
	$sql="UPDATE user SET money=money+$points, page_array='$page_array_next' WHERE username='$usernow'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql, $conn);
	if(!$retval){
		echo mysql_error();
		}else{}
	$sql="UPDATE user SET money=money-$money where username='$userid'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql, $conn);
	if(!$retval){
		echo mysql_error();
		}else{

			}
	
	}else{
	$sql="UPDATE user SET page_array='$page_array_next' WHERE username='$usernow'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql, $conn);
	if(!$retval){
		echo mysql_error();
		}
	}

}
$profile = profile($usernow,$dbname,$conn);
echo $profile['money'];

?>