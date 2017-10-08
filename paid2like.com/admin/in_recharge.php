<?php
include '../files/var.php';
include '../files/db.php';

if (isset($_POST['in_recharge'])){
	$mo_number = $_POST['mo_number'];
	$mo_amount = $_POST['mo_amount'];
	$mo_sim = $_POST['mo_sim'];
	$mo_state = $_POST['mo_state'];
	$date = date("d-m-Y");
	$time = date("h-i");
	$uname = "demo";
	$sql = 	"INSERT INTO recharge".
			"(uname,amount,number,state,sim,date,time,type) ".
			"VALUES ".
			"('$uname','$mo_amount','$mo_number','$mo_sim','$mo_state','$date','$time','done')";
			mysql_select_db($dbname);
			$retval = mysql_query( $sql, $conn );
}
?>
<form action='in_recharge.php' method='POST'>
Mobile Number:<input type=text name=mo_number><br>
Mobile State:<input type=text name=mo_state><br>
Mobile Sim:<input type=text name=mo_sim><br>
Recharge Amount:<input type=text name=mo_amount><br>
<input type=submit name=in_recharge value=IN_recharge>

</form>
