<?php
include '../files/db.php';
include '../files/ver.php';
if (!isset($_GET['list'])){$view = "home";}
else{
$list = $_GET['list'];
}
 $sql_left = "SELECT * FROM list";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_left, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$main_containt = $row['other'];
		echo "<a href=?list={$link}>{$name}</a> ";
			}
		?>

		<?php
if (isset($_POST['other'],$_POST['link'])){
	$other = base64_encode($_POST['other']);
	$link = $_POST['link'];
	$name = $_POST['name'];
$sql_updatelist = "UPDATE list
			SET other='$other',name='$name' WHERE link='$link'";
			mysql_select_db( $dbname );
		$retval = mysql_query( $sql_updatelist, $conn );
	}
?>
<form action="<?php $_PHP_SELF ?>" method="post">
<?php
 $sql_editleft = "SELECT * FROM list WHERE link='$list'";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_editleft, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$main_containt = base64_decode($row['other']);
		echo "Name:-<input type=text name=name value='{$name}'>Link:- <Input type=text name=link value={$link}><br>Containt:- <br><textarea name=other cols=100 rows=35>{$main_containt}</textarea><input type=hidden name=link value={$link}>";
			}
		?>
<input type=submit></form>
