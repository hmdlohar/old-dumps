<html>
<form action="<?php $_PHP_SELF ?>" method="post">
Name:-<input type=text name=name><br>
Link:-<input type=text name=link><br>
MM:-<input type=text name=mm><br>
<input type=submit>

<?php
include '../files/db.php';
if (isset($_POST['name'])) {
$name = $_POST['name'];
$link = $_POST['link'];
$mm = $_POST['mm'];

$sql = "INSERT INTO post".
       "(name,link,mm) ".
       "VALUES ".
       "('$name','$link','$mm')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

}
echo "<table>";
$sql="select * from post";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
while($row=mysql_fetch_array($retval)){
	$name=$row['name'];
	$link=$row['link'];
	$id=$row['id'];
	$other=$row['other'];
	echo "<tr><td><a href={$url}/?post={$link}>{$name}</a></td><td><form action='' method=post><textarea cols=50 rows=10 name=other>{$other}</textarea><input type=hidden name=edit_id value={$id}><input type=submit></form></td></tr>";
}
if (isset($_POST['edit_id'])) {
$other=$_POST['other'];
$id=$_POST['edit_id'];
$sql="update post set other='$other' where id='$id'";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
}
?>



</table>