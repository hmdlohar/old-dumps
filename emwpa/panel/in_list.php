<?php
include '../files/db.php';
if (isset($_POST['name'],$_POST['link'])) {
$name = $_POST['name'];
$link = $_POST['link'];
$mm = $_POST['mm'];
$count = $_POST['count'];
$short = $_POST['short'];
$sql = 	"INSERT INTO list
		(name,link,mm,count,other2)
		VALUES
		('$name','$link','$mm','$count','$short')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}
?>
<html>
<form action="<?php $_PHP_SELF ?>" method="post">
Name:-<input type=text name=name><br>
MM:-
<select name=mm>
<?php $sql_menu = "SELECT * FROM mm";
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_menu, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		echo "<option value={$link}>{$name}</option>";
			}
		?></select><br>
Link:-<input type=text name=link><br>
Count:-<input type=text name=count><br>
Short:-<input type=text name=short><br>
<input type=submit>





