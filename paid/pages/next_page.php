<?php
$usernow = $_COOKIE['userLoged'];
include '../files/db.php';
include '../common.php';

$ary=get_next_page($usernow);
if($ary==""){
	$ary="230112";
	}
if(isset($_GET['type'])){
$type=$_GET['type'];	
	}else{$type="earn-facebook";}
function next_page($ary,$type){
	include '../files/db.php';
	$usernow = $_COOKIE['userLoged'];
	
	$sql = "SELECT * FROM pages WHERE id not in ($ary) && states=1 && type='$type' ORDER BY points DESC LIMIT 1";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
	$name=$row['name'];

	$points=$row['points'];
	$link=$row['link'];
	$states=$row['states'];
	$userid=$row['userid'];
	$link_id=$row['link_id'];
	$id=$row['id'];
	$user_money=get_user_money($userid);
	if($user_money<$points){
		$sql="UPDATE pages SET states=0 WHERE id = '$id'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql, $conn);
		if(!$retval){
		echo mysql_error(); 
		}next_page($ary,$type);
		}else {
	$json=json_encode($row);
	echo $json;
		}
	}
}
next_page($ary,$type);
?>