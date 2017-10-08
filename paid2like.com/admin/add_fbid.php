<?php
include '../files/var.php';
session_start();
if (!isset($_SESSION['username'])) {
	$pls_login = "pls Login First";
	die;
	}
include '../profile.php';
$mm_one = "all";
if (isset($_SESSION['username'])){
	$mm_two = "loged";
	}
	else{
		$mm_two = "nologed";
		}

include '../files/db.php';
if (isset($_GET['view'])) {
	$view = $_GET['view'];
	die;
	}
	else{
		$view = "Home";
	}
$sql = "SELECT * FROM mm
		WHERE name='$view'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql, $conn);
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];	
		}


	error_reporting(0);
if (isset($_POST['fbid'])){
	$add_fbid = $_POST['fbid'];
$ch = curl_init("http://graph.facebook.com/$add_fbid");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->gender;

	if (isset($nowlikes)){
		$id_fbid = $data->id;
		$sql_c_fbid = "SELECT * FROM user WHERE fbid='$id_fbid'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql_c_fbid, $conn);
		$num_id = mysql_num_rows($retval);
		if($num_id == 0) {
			
		$fbid_states = "Your account Added";
		echo "<script>window.location='{$url}/earn-facebook.php';</script>";
			$sql_fbid ="UPDATE user SET fbid='$id_fbid' WHERE uname='$uname'";
			mysql_select_db($dbname);
			mysql_query($sql_fbid, $conn);
			
			}
			else{
				$fbid_states = "This ID is already Used";
				}
		}

	else{
		$fbid_states = "This is not valued facebook user id";
		}
}
		
include '../head.php';
?>
	<link rel="stylesheet" href="../files/style.css">
	<div id=loginbox>
		<h2>
		Link Facebook Account
		</h2>
		<div id=login>
			
		<form action="" method="POST">
		<div class=logindetailes>Enter Your Facebook Profile ID/Username(don't use 'email'):</div>
		<div class=logininput><input type=text name=fbid></div>
		<input type=submit value="Link Account"></div>
<font color=red>		<?php
			if (isset($fbid_states)){echo $fbid_states;}
			?></font>
		</form>
			</div>
			</div>
	</div>
	
<?php
include '../foot.php';
?>
