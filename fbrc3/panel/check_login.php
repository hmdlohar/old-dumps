<?php
include '../files/ver.php';
include '../files/db.php';
include '../common.php';
if (isset($_POST['login'])){

$username = $_POST['username'];	
$password = $_POST['password'];	
$sql ="SELECT * FROM user WHERE username='$username'";
mysql_select_db($dbname);
$retval= mysql_query($sql,$conn);
$email_rows = mysql_num_rows($retval);
if ($email_rows == 1){
	while($row = mysql_fetch_array($retval)){
		$pass = $row['password'];
		$user = $row['username'];
			if ($user==$username&&$pass==$password){	
				 loginNow($user);
				 header("Location: {$site}/index.php");
				}else{
					header("Location: {$site}/login.php?error=nomatch");
				}
		}
	}else{
		header("Location: {$site}/login.php?error=notfound");
		}
}
else{
header("Location: {$site}/login.php?error=unknown");

}
//header("Location: {$site}/login.php?error=unknown");

?>