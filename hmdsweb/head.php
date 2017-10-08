<?php
include 'files/db.php';
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{$page="home";}
if(isset($_GET['post'])){
	$page=$_GET['post'];
}else{}
include 'common.php';
?>

<link rel="stylesheet" type="text/css" href="files/style.css" />
<div id=head>
	<img id=icon src=img/icon.png>
	<title>Hmd's Webs</title>
	<link rel="shortcut icon" href="img/icon_small.png">
	
	<div id=head_title>Hmd's<span id=head_title2 style="color:#C8C8C8">Web</span></div>
	<div id=b460x60><?php echo $bernar1; ?></div>
	<div id=head_menu>
		<?php
			$sql="SELECt * FROM mm";
			mysql_select_db($dbname);
			$retval=mysql_query($sql,$conn);
			while($row=mysql_fetch_array($retval)){
				$name=$row['name'];
				$link=$row['link'];
				echo "<li><a href=?page={$link}>{$name}</a></li>";
				}
		?>
	</div>
	<div id=b760x90><?php echo $bernar2; ?></div>

</div>