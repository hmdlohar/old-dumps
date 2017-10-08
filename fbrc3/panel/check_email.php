<?php
include '../files/ver.php';
include '../files/db.php';
if(isset($_POST['submit2'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$username = $_POST['username'];
$password = $_POST['password'];
$date = date('Y-M-D');
$sql ="SELECT * FROM user WHERE email='$email'";
mysql_select_db($dbname);
$retval= mysql_query($sql,$conn);
$email_rows = mysql_num_rows($retval);
$sql ="SELECT * FROM user WHERE username='$username'";
mysql_select_db($dbname);
$retval= mysql_query($sql,$conn);
$username_rows = mysql_num_rows($retval);

if ($username_rows==0 && $email_rows==0){
$sql = "INSERT INTO user
	(fname,lname,email,mobile,gender,country,username,password,reg_date,other)
	VALUES
	('$fname','$lname','$email','$mobile','$gender','$country','$username','$password','$date','0')";
	mysql_select_db($dbname);
$retval=mysql_query($sql, $conn);
if (!$retval){
	//echo mysql_error();
	echo "Unexpreced Error. go back";
}else{
echo "You are Registered Please Confirm Your Email. <a href={$site}/?view=confirm_email&list=confirm_email>Click Hear</a><br> Recharge Will be preceded after confirming your Email";}
}
else {echo "email used";}
}
if(isset($_GET['email'])){
	$email = $_GET['email'];
	$username = $_GET['username'];
$sql ="SELECT * FROM user WHERE email='$email'";
mysql_select_db($dbname);
$retval= mysql_query($sql,$conn);
$email_rows = mysql_num_rows($retval);
$sql ="SELECT * FROM user WHERE username='$username'";
mysql_select_db($dbname);
$retval= mysql_query($sql,$conn);
$username_rows = mysql_num_rows($retval);
$total_rows = $email_rows+$username_rows;
echo "{$email_rows}{$username_rows}";	
}
?>