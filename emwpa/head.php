<?php
include "files/ver.php";
include "files/$bernar";
include "files/db.php";
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
<title> EMWPA</title>
<div id=head>
	<div id=header><div id=title> <font color=red>EM</font>WPA </div>
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
		?>

		<a id=head_right href=>Register</a>
		<a id=head_right href=>Login</a>
	</div>
	<p id=b728x90 style='margin-left:140px;margin-top:10px'><?php echo $bernar2; ?></p>
</div>
<a id=topest target=new href="http://www.facebook.com/anisha778">
<div id=topest>
Like Our Page On Facebook
</div></a>