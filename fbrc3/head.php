<?php
session_start();
include "files/ver.php";
include "files/$bernar";
include "files/db.php";
include "common.php";

if (!isset($_GET['view'])){$view = "home";}
else{
$view = $_GET['view'];
}
if (!isset($_GET['list'])){$list = "home";}
else{
$list = $_GET['list'];
}
?>
<link rel="stylesheet" type="text/css" href="files/style.css" />
<title> Paid2Like - Social Media Exchange</title>
<div id=head>
	<div id=header><div id=title> <font color=green>PAID<font color=red>2</font>LIKE</font> </div>
	<p id=b460x60 style='margin-left:530px'> <?php echo $bernar1 ?></p></div>
	<div id=main_menu>
		<?php $sql_menu = "SELECT * FROM mm";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_menu, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hitm = $row['hit'];
		echo "<a href={$url}?view={$link}&list={$link}>{$name}</a>";
			}
			$isLoged=isLoged();
			if ($isLoged == 0){
				$main_21_display="display:none";
				


		?>
		<a id=head_right href="register.php">Register</a>
		<a id=head_right href="login.php">Login</a>
		<?php
	}
		else{
			$usernow = $_COOKIE['userLoged'];
			global $profile;
			$profile = profile($usernow,$dbname,$conn);
			$main_21_display="diaplay:block";
			echo "<a href=logout.php id=head_right>Logout</a><span id=head_right>Welcome<font color=yellow> {$profile['fname']} </font></span>";
			}

		?>
	</div>
<div id=main_menu2 style="<?php echo $main_21_display; ?>">
<span id=main2_1>You have Rs. </span> <span id=coins><?php echo $profile['money']; ?></span> <span id=coins_img> <img src="img/coins.png"></span>
</div>
	<p id=b728x90 style='margin-left:140px;margin-top:10px'><?php echo $bernar2; ?></p>
</div>
<a id=topest target=new href="http://mbasic.facebook.com/paid2likesme">Like Our Page On Facebook</a>