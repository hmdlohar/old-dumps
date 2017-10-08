<?php
if (!isset($_COOKIE['offers'])){
	setcookie("offer","set");
echo "
<body onload='show_main2()'>";
?>
<script type=text/javascript>
function show_main2(){
	window.show_main=setTimeout("show_main3()",1000);
	}
function show_main3(){
	document.getElementById('loginbox2').style.display = 'block';
	}
function close_main(){
	document.getElementById('loginbox2').style.display = 'none';
	}
	
</script>
<div id=loginbox2>
<img src=img/close.png height=30px id=close2 onclick='close_main()'>
<?php
include 'tutorial.php';
echo "</div>";

}
else
echo "<body>";
?>
<?php
include 'files/var.php';
$mm_one = "all";
if (isset($_SESSION['username'])){
	$mm_two = "loged";
	}
	else{
		$mm_two = "nologed";
		}

include 'files/db.php';
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
		
		

?>

<!DOCTYPE html>
<html>
<head>
<title> Paid 2 Like</title>
<link rel="stylesheet" href="files/style.css">

</head>

<div id=main_div>
	<div id=header>
		<h1 id=main_title>
		PAID to LIKE
		</h1>
		<h3 id=main_sub>
		The Best Like Exchange System With Free Recharge
		</h3>
	</div><div id=bernar_head></div>
	<div id=main_menu>
		<ul>
			<?php
			$head_class = 1;
			$sql = "SELECT * FROM mm 
					WHERE other='$mm_one' or other='$mm_two'";
			mysql_select_db($dbname);
			$retval = mysql_query($sql, $conn);
			while(($row = mysql_fetch_array($retval, MYSQL_ASSOC)) && ($head_class < 9))
			{
			$name = $row['name'];
			$link = $row['link'];
			$hit = $row['hit'];	
			echo "<li><a href={$url}/{$link} class={$name} id=head_href class=head_href>{$name}</a></li>";
		
			$head_class++;
			}
			?>
				

		</ul>
	</div>
