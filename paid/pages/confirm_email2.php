<?php
include '../common.php';
include '../files/db.php';
include '../files/ver.php';
$usernow = $_COOKIE['userLoged'];
$profile=profile($usernow,$dbname,$conn);
if(isset($_POST['confirm'])){
	$confirm_code=$_POST['confirm_code'];
	$profile_code=$profile['login_date'];
	if($confirm_code==$profile_code){
$sql = "UPDATE user SET other=1 WHERE username='$usernow'";
mysql_select_db($dbname);
$retval=mysql_query($sql, $conn);
if (!$retval){
	echo "Unexpreced Error. go back";
}
header("Location: {$url}/index.php");		}else{
			header("Location: {$url}/?view=confirm_email&list=confirm_email&error=23");
			}
	}


?>