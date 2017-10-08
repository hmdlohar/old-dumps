<?php
include 'files/var.php';
session_start();
include 'files/db.php';

if (isset($_GET['username'],$_GET['password'])) {
	$username = $_GET['username'];
	$password = $_GET['password'];
	$sql =	"SELECT * FROM user
	WHERE uname='$username'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $conn );
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))

				{
					$usernow = $row['uname'];
					$passnow = $row['pass'];
					
				}
	if (isset($passnow)) {
		if ($password == $passnow){
			
				$_SESSION['username'] = $usernow;
				header("Location: index.php");
			}
				
	}
	}

	





?>

<?php
include 'head.php';
?>
	<div id=loginbox>
		<h2>
		Login Hear
		</h2>
		<div id=login>
			
			<form action="" method="">
		<div class=logindetailes>Username:</div>
		<div class=logininput><input type=text name=username></div>
		<div class=logindetailes>password:</div>
		<div class=logininput><input type=password name=password></div>
		<div class=logininput><input type=submit value=login></div>
			
			</form><br>
			<div id=forget_pass>
			<a href="forget_pass.php"> Forget Password?</a>
			</div><br>
			<div id=forget_pass>
			<a href="register.php"> Not Have Account? Sign Up Hear.</a>
			</div>
			</div>
	</div>
	
<?php
include 'foot.php';
$page = "login.php";
$sql_hitg = "SELECT * FROM mm WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitg,$conn);
while($row = mysql_fetch_array($retval)){
	$old_hit = $row['hit'];
	}
$new_hit = $old_hit+1;
$sql_hitp = "UPDATE mm SET hit='$new_hit' WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitp,$conn);
?>





