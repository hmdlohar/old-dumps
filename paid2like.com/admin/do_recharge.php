<?php
include '../files/var.php';
include '../checklogin.php';
include '../profile.php';
if (isset($_POST['mo_submit'])){
$mo_number = $_POST['mo_number'];
$mo_amount = $_POST['mo_amount'];
$mo_sim = $_POST['mo_sim'];
$mo_state = $_POST['mo_state'];
$date = date("d-m-Y");
$time = date("h-i");

if ($mo_amount < $money){
	header("Location: {$url}/recharge.php?states=requested");
	$sql = 	"INSERT INTO recharge".
			"(uname,amount,number,state,sim,date,time,type) ".
			"VALUES ".
			"('$uname','$mo_amount','$mo_number','$mo_sim','$mo_state','$date','$time','req')";
			mysql_select_db($dbname);
			$retval = mysql_query( $sql, $conn );
}
else{
	header("Location: {$url}/recharge.php?states=444");
	}
}
?>
